<?php

use LM\Interfaces\ForumRepositoryInterface;

class ForumController extends BaseController {

	protected $forum;

	/**
	* Create a new DocController instance.
	*/
    public function __construct(ForumRepositoryInterface $forum)
    {
        $this->forum = $forum;
    }

	/**
	 * Forum Home
	 *
	 * @return View
	 */

	public function getIndex($topic = null) {
		return View::make('pages.coming-soon-feature');
	}

}