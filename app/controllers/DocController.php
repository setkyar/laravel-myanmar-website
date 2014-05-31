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

		// Get Contents
		$getToc = $this->doc->getToc('documentation.md');

		if ($topic === null) $topic = 'introduction'; // Set default page

		$getContent = $this->doc->getContent($topic .'.md');

		// Converted to HTML
		$toc = Markdown::text($getToc);
		$content = Markdown::text($getContent);

		return View::make('docs.index')
					->with('toc', $toc)
					->with('content', $content);
	}

}
