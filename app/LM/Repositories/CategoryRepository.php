<?php

namespace LM\Repositories;

use LM\Models\Category;
use LM\Interfaces\CategoryRepositoryInterface;
use Illuminate\Cache\Repository as Cache;

class CategoryRepository extends AbstractRepository implements CategoryRepositoryInterface
{
    protected $model;
    protected $cache;
    /**
     * Create a new instance.
     *
     */
    public function __construct(Category $category, Cache $cache)
    {
        $this->model = $category;
        $this->cache = $cache;
    }

    /**
     * Display all category paginated by $perPage
     *
     * @return Object
     * @author Hein Zaw Htet
     **/
    public function findAll($perPage = 8)
    {
        return $this->model->paginate($perPage);
    }


    /**
     * Get categories list as array
     *
     * @return array()
     * @author Hein Zaw Htet
     **/
    public function getCategoriesList()
    {
        $categories = $this->model->all();
        $categoryList = array();
        foreach ($categories as $category => $value) {
            $categoryList[$value['id']] = $value['name'];
        }
        return $categoryList;
    }
}