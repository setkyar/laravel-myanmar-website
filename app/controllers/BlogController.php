<?php

use LM\Interfaces\BlogRepositoryInterface;

class BlogController extends BaseController {

	protected $blog;

	/**
	* Create a new BlogController instance.
	*/
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->blog = $blog;
    }

	/**
	 * Blog Index
	 *
	 * @return View
	 */

	public function getIndex() 
	{
		$blogs = $this->blog->getActiveBlogs('1');
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

}