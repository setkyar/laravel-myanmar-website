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

		// Get Contents
		$content = $this->doc->getContent($topic .'.md');
		$toc = $this->doc->getToc('documentation.md');


		return View::make('docs.index')
					->with('toc', $toc)
					->with('content', $content);
	}

}
