<?php namespace LM\Repositories;

use LM\Interfaces\FileRepositoryInterface;
class FileRepository implements FileRepositoryInterface {
	public function upload($key, $type)
	{
		$file = \Input::file($key);
        $fileName = $file->getClientOriginalName();
        $path = '/uploads/'.$type.'s/'.date("Y").'/'.date("F").'/';
        $file->move(public_path().$path, $fileName);

        return $path.'/'.$fileName;
	}
}