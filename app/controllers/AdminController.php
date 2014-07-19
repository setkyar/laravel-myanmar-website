<?php

use LM\Interfaces\BlogRepositoryInterface;
use LM\Interfaces\CategoryRepositoryInterface;

class AdminController extends BaseController {

	protected $blog;
	protected $category;

	/**
	* Create a new BlogController instance.
	*/
    public function __construct(BlogRepositoryInterface $blog, CategoryRepositoryInterface $category)
    {
        $this->blog = $blog;
        $this->category = $category;
        $this->beforeFilter('auth');
    }

	/**
	 * Admin Dashboard
	 *
	 * @return View
	 */

	public function getIndex() 
	{
		$totalBlogs = $this->blog->getCount();
		return View::make('admin.index')
					->with('totalBlogs', $totalBlogs);
	}
}