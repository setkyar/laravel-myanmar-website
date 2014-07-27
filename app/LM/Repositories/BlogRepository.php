<?php

namespace LM\Repositories;

use LM\Models\Blog;
use LM\Models\Category;
use LM\Interfaces\BlogRepositoryInterface;
use Illuminate\Cache\Repository as Cache;

class BlogRepository extends AbstractRepository implements BlogRepositoryInterface
{
    protected $model;
    protected $category;
    protected $cache;
    /**
     * Create a new instance.
     *
     */
    public function __construct(Blog $blog, Category $category, Cache $cache)
    {
        $this->model = $blog;
        $this->category = $category;
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
        // return $this->model->with(array(
        //                         'user' => function($q) { $q->remember(10080); },
        //                         'categories' => function($q) { $q->remember(10080); }
        //                     ))
        //                     ->remember(10080)
        //                     ->where('status', 'active')
        //                     ->orderBy('created_at', 'desc')
        //                     ->paginate($perPage);

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
        return $this->model->with('user')
                            ->where('slug', $slug)
                            ->firstOrFail();
    }

    /**
     * Count total blogs
     *
     * @author Hein Zaw Htet
     **/
    public function getCount()
    {
        return $this->model->count();
    }

    /**
     * Updating blog
     *
     * @author Hein Zaw Htet
     **/
    public function update(array $data, $id)
    {
        $model = $this->findById($id);
        $model->fill($data);
        $model->categories()->sync($data['category']);
        return $model->push();
    }

     /**
     * Get category list by id
     *
     * @author Hein Zaw Htet
     **/
    public function getCategoryListById($id)
    {
        // $model = $this->model->find($id);
        // dd($model->categories()->id);
        $model = $this->model->find($id);
        $list = $model->categories->toArray();
        return array_fetch($list, 'id');
    }

    /**
     * Get Blogs by categories
     *
     * @author Hein Zaw Htet
     **/
    public function getByCategoryName($name, $limit = 8)
    {

        $category = $this->category->whereName($name)->first();

        $blogs = $category->blogs()->orderBy('created_at', 'DESC')
                                    ->paginate($limit);

        return [ $category, $blogs ];
    }

    /**
     * Search blog by title or content
     *
     * @author Hein Zaw Htet
     **/
    public function getSearch($query, $limit = 8)
    {
        return $this->model->orWhere('title', 'LIKE', '%'.$query.'%')
                            ->orWhere('content', 'LIKE', '%'.$query.'%')
                            ->orderBy('created_at', 'desc')
                            ->paginate($limit);
    }

}
