<?php

use LM\Interfaces\CategoryRepositoryInterface;

class CategoryController extends BaseController {

	protected $category;

	/**
	* Create a new BlogController instance.
	*/
    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
        $this->beforeFilter('auth', array(
        	'only' => array(
        		'getAdminIndex',
        		'getCreate',
        		'getEdit',
        		'postCreate',
        		'postUpdate'
        		)
        	));
    }

    /**
     * Category Index Page for Admin
     *
     * @return View
     * @author Hein Zaw Htet
     **/
    public function getAdminIndex()
    {
        $categories = $this->category->findAll();
    	return View::make('blogs.categories.adminIndex')
                    ->with('categories', $categories);
    }

    /**
     * Category creation form
     *
     * @return View
     * @author Hein Zaw Htet
     **/
    public function getCreate()
    {
        return View::make('blogs.categories.create');
    }

    /**
     * Create category
     *
     * @return Redirect
     * @author Hein Zaw Htet
     **/
    public function postCreate()
    {
        $data = Input::all();
        $category = $this->category->create($data);
        return \Redirect::to('admin/blog/category')
                        ->with('success', 'အမျိုးအစား ပေါင်းထည့်ပြီးပါပြီ');
    }

    /**
     * Deleting category by ID
     *
     * @return Redirect
     * @author Hein Zaw Htet
     **/
    public function anyDelete($id)
    {
        $category = $this->category->findById($id);
        $category->delete($id);
        return \Redirect::route('categoryAdminIndex')
                        ->with('success', "ဖျက်ပြီးပါပြီ");
    }

}