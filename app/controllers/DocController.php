<?php

use LM\Interfaces\DocRepositoryInterface;

class DocController extends BaseController {

	protected $doc;

	/**
	* Create a new DocController instance.
	*/
    public function __construct(DocRepositoryInterface $doc)
    {
        $this->doc = $doc;
    }

	/**
	 * Documenation Home
	 *
	 * @return View
	 */

	public function getIndex($topic = null) {
		
		// Set default page
		if ($topic === null) $topic = 'introduction';
		

		if (file_exists(base_path('docs/' . $topic. '.md'))) {
			// Get Contents
			$content = $this->doc->getContent($topic .'.md');
			$toc = $this->doc->getToc('documentation.md');
		} else {
			App::abort(404);
		}


		return View::make('docs.index')
					->with('toc', $toc)
					->with('content', $content);
	}

}
