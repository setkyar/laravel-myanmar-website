<?php

use LM\Interfaces\FaqRepositoryInterface;

class FaqController extends BaseController {

	protected $faq;

	/**
	* Create a new DocController instance.
	*/
    public function __construct(FaqRepositoryInterface $faq)
    {
        $this->faq = $faq;
        $this->beforeFilter('auth', array(
        	'only' => array(
        		'getCreate',
        		'getEdit',
        		'postCreate',
        		'postEdit',
        		'anyDelete',
        		'getAdminIndex'
        		)
        	));
    }

	/**
	 * Faq Home
	 *
	 * @return View
	 */

	public function getIndex() {
		$faqs = $this->faq->getActives();
		return View::make('faqs.index')
					->with('faqs', $faqs);
	}



	/**
	 * Search FAQ
	 *
	 * @return View
	 */

	public function getSearch() {
		$query = e(Input::get('query'));

		// Just a teaser. don't take it seriously.
		if (strpos($query,'&lt;script') !== false) {
    		return View::make('search.meme');
		}
		$faqs = $this->faq->getSearch($query);

		return View::make('faqs.search')
					->with('faqs', $faqs)
					->with('query', $query);
	}



	/**
	 * Faq Index for Admin
	 *
	 * @return View
	 */

	public function getAdminIndex() {
		$faqs = $this->faq->getActives();
		return View::make('faqs.adminIndex')
					->with('faqs', $faqs);
	}

	/**
	 * Faq Single
	 *
	 * @return View
	 */

	public function getSingle($slug) {
		$faq = $this->faq->getBySlug($slug);
		$pageTitle = $faq->title;
		return View::make('faqs.single')
					->with('faq', $faq)
					->with('pageTitle', $pageTitle);
	}

	/**
	 * Edit faq
	 *
	 * @return View
	 */

	public function getEdit($id) {
		$faq = $this->faq->findById($id);
		return View::make('faqs.edit')
					->with('faq', $faq);
	}


	/**
	 * Faq Creation Form
	 *
	 * @return View
	 * @author Hein Zaw Htet
	 **/
	public function getCreate()
	{
		return View::make('faqs.create');
	}


	/**
	 * Ceate Faq
	 *
	 * @return Redirect
	 * @author Hein Zaw Htet
	 **/
	public function postCreate()
	{
		$data = Input::all();
		$data = array_add($data, 'user_id', Auth::user()->id);
		$blog = $this->faq->create($data);
		return \Redirect::route('blogEdit', array('id' => $blog))
                        ->with('success', "သင့် Faq ထည့်သွင်းပြီးသွားပါပြီ");
	}

	/**
	 * Updaing a faq by id
	 *
	 * @return Redirect
	 * @author Hein Zaw Htet
	 **/
	public function postEdit($id)
	{
		$faq = $this->faq->update(Input::all(), $id);
		if ($faq == true) {
			return \Redirect::route('faqEdit', array('id' => $id))
                        ->with('success', "သင့် Faq ထည့်သွင်းပြီးသွားပါပြီ");
		} else {
			return \Redirect::route('faqEdit', array('id' => $id))
                        ->with('error', "တစ်ခုခုမှားနေပါတယ်");
		}
	}

	/**
	 * Deleting a FAQ
	 *
	 * @return View
	 */

	public function getDelete($id) {
		$faq = $this->faq->findById($id);
		$faq->delete($id);
		return \Redirect::route('faqAdmin')
                       	->with('success', "ခုနက Faq ဖျက်ပြီးပါပြီ");
	}

}