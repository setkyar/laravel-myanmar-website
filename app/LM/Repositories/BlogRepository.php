<?php

namespace LM\Repositories;

use LM\Models\Blog;
use LM\Interfaces\BlogRepositoryInterface;
use Illuminate\Cache\Repository as Cache;

class BlogRepository implements BlogRepositoryInterface
{
    protected $model;
    protected $cache;
    /**
     * Create a new instance.
     *
     */
    public function __construct(Blog $blog, Cache $cache)
    {
        $this->model = $blog;
        $this->cache = $cache;
    }

    /**
     * Get active blogs paginated by 8
     *
     * @return View
     * @author Hein Zaw Htet
     **/
    public function getActiveBlogs($perPage = 8)
    {
        return $this->model->where('status', 'active')
                            ->orderBy('created_at', 'desc')
                            ->paginate($perPage);
                            
    }

    /**
     * Get single blog by slug
     *
     * @return View
     * @author Hein Zaw Htet
     **/
    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)
                            ->firstOrFail();
    }
}