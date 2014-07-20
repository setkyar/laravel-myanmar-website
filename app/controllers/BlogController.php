<?php

use LM\Interfaces\BlogRepositoryInterface;
use LM\Interfaces\CategoryRepositoryInterface;

class BlogController extends BaseController {

	protected $blog;
	protected $category;

	/**
	* Create a new BlogController instance.
	*/
    public function __construct(BlogRepositoryInterface $blog, CategoryRepositoryInterface $category)
    {
        $this->blog = $blog;
        $this->category = $category;
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
	 * Blog Index
	 *
	 * @return View
	 */

	public function getIndex() 
	{
		$blogs = $this->blog->getActiveBlogs('8');
		return View::make('blogs.index')
					->with('blogs', $blogs);
	}

	/**
	 * Blog Single
	 *
	 * @return View
	 * @author Hein Zaw Htet
	 **/
	public function getSingle($slug)
	{
		$blog = $this->blog->getBySlug($slug);
		return View::make('blogs.single')
					->with('blog', $blog);
	}

	/**
	 * Get Blogs by Category
	 *
	 * @return View
	 * @author Hein Zaw Htet
	 **/
	public function getByCategory($name)
	{
		list($category, $blogs) = $this->blog->getByCategoryName($name);
		return View::make('blogs.category')
					->with('blogs', $blogs)
					->with('category', $category);
		
	}

	/**
	 * Display all blogs for admin
	 *
	 * @return View
	 * @author Hein Zaw Htet
	 **/
	public function getAdminIndex()
	{
		$blogs = $this->blog->findAll();
		return View::make('blogs.adminIndex')
					->with('blogs', $blogs);
	}

	/**
	 * Blog Creation Form
	 *
	 * @return View
	 * @author Hein Zaw Htet
	 **/
	public function getCreate()
	{
		$categories = $this->category->getCategoriesList();
		return View::make('blogs.create')
					->with('categories', $categories);
	}

	/**
	 * Blog Edit Form
	 *
	 * @return View
	 * @author Hein Zaw Htet
	 **/
	public function getEdit($id)
	{
		$blog = $this->blog->findById($id);
		$currentCategories = $this->blog->getCategoryListById($id);
		$categories = $this->category->getCategoriesList();
		return View::make('blogs.edit')
					->with('blog', $blog)
					->with('categories', $categories)
					->with('currentCategories', $currentCategories);
	}

	/**
	 * Ceate blog
	 *
	 * @return Redirect
	 * @author Hein Zaw Htet
	 **/
	public function postCreate()
	{
		$data = Input::all();
		$data = array_add($data, 'user_id', Auth::user()->id);
		$blog = $this->blog->create($data);
		$blog->categories()->sync(Input::get('category'));
		return \Redirect::to('/blog')
                        ->with('success', 'သင့် ဘလော့ထည့်သွင်းပြီးသွားပါပြီ');

		return \Redirect::route('blogEdit', array('id' => $blid))
                        ->with('success', "သင့် ဘလော့ထည့်သွင်းပြီးသွားပါပြီ");
	}

	/**
	 * Updaing a blog by id
	 *
	 * @return Redirect
	 * @author Hein Zaw Htet
	 **/
	public function postEdit($id)
	{
		$blog = $this->blog->update(Input::all(), $id);
		if ($blog == true) {
			return \Redirect::route('blogEdit', array('id' => $id))
                        ->with('success', "သင့် ဘလော့ထည့်သွင်းပြီးသွားပါပြီ");
		} else {
			return \Redirect::route('blogEdit', array('id' => $id))
                        ->with('error', "တစ်ခုခုမှားနေပါတယ်");
		}
	}

	/**
	 * Deleting blog by ID
	 *
	 * @return Redirect
	 * @author Hein Zaw Htet
	 **/
	public function anyDelete($id)
	{
		$blog = $this->blog->findById($id);
		$blog->categories()->detach();
		$blog->delete($id);
		return \Redirect::route('blogAdmin')
                       	->with('success', "ခုနက ဘလော့ဂ်ကို ဖျက်ပြီးပါပြီ");
	}

}