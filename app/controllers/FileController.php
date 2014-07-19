<?php

use LM\Interfaces\FileRepositoryInterface;

class FileController extends BaseController {

	protected $file;

	/**
	* Create a new BlogController instance.
	*/
    public function __construct(FileRepositoryInterface $file)
    {
        $this->file = $file;
        $this->beforeFilter('auth');
    }

    /**
     * File Index
     *
     * @return View
     * @author Hein Zaw Htet
     **/
    public function getIndex()
    {
        return 'todo';
    }

    /**
     * Post Upload
     *
     * @return Response
     * @author Hein Zaw Htet
     **/
    public function postUpload()
    {
        $file = $this->file->upload(Input::get('key'), Input::get('type'));
        if( $file ) {
           return Response::json(url($file),200);
        } else {

           return Response::json('error', 400);
        }
    }

}