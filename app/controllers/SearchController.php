<?php

use LM\Interfaces\BlogRepositoryInterface;

class SearchController extends BaseController {

	protected $blog;

	/**
	* Create a new SearchController instance.
	*/
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->blog = $blog;
    }

	/**
	 * Searching
	 *
	 * @return View
	 */

	public function getIndex() 
	{
		$query = e(Input::get('query'));

		// Just a teaser. don't take it seriously.
		if (strpos($query,'&lt;script') !== false) {
    		return View::make('search.meme');
		}
		
		$results = $this->blog->getSearch($query);
		return View::make('search.result')
					->with('results', $results)
					->with('query', $query);
		
	}
}