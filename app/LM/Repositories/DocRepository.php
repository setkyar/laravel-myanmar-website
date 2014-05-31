<?php

namespace LM\Repositories;

use LM\Interfaces\DocRepositoryInterface;
use \Illuminate\Filesystem\Filesystem as File;

class DocRepository implements DocRepositoryInterface
{
    protected $file;
    /**
     * Create a new instance.
     *
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function getToc($fileName)
    {
        return $this->file->get(base_path('docs/' . $fileName));
    }

    public function getContent($fileName)
    {
        return $this->file->get(base_path('docs/' . $fileName));
    }
}