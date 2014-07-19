<?php

namespace LM\Repositories;

use LM\Interfaces\DocRepositoryInterface;
use \Illuminate\Filesystem\Filesystem as File;
use Illuminate\Cache\Repository as Cache;

class DocRepository implements DocRepositoryInterface
{
    protected $file;
    protected $cache;
    /**
     * Create a new instance.
     *
     */
    public function __construct(File $file, Cache $cache)
    {
        $this->file = $file;
        $this->cache = $cache;
    }

    public function getToc($fileName)
    {
        return $this->readDoc($fileName);
    }

    public function getContent($fileName)
    {
        return $this->readDoc($fileName);
    }

    protected function readDoc($fileName)
    {
        // Key for cache
        $cacheKey = md5('docs.'.$fileName);

        // use cache if exist
        if ($this->cache->has($cacheKey)) {
            return $this->cache->get($cacheKey);
        }

        $getContent = $this->file->get(base_path('docs/' . $fileName));
        $doc = \Markdown::text($getContent);
        // Put it in cache
        $this->cache->put($cacheKey, $doc, 10080);
        return $doc;
    }
}