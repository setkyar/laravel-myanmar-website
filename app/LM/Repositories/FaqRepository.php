<?php

namespace LM\Repositories;

use LM\Models\Faq;
use LM\Interfaces\FaqRepositoryInterface;

class FaqRepository extends AbstractRepository implements FaqRepositoryInterface
{
    protected $model;
    /**
     * Create a new instance.
     *
     * @param  \LM\FAQ  $faq
     * @return void
     */
    public function __construct(Faq $faq)
    {
        $this->model = $faq;
    }

    /**
     * Get active faqs paginated by 8
     *
     * @return View
     * @author Hein Zaw Htet
     **/
    public function getActives($perPage = 8)
    {
        return $this->model->where('status', 'active')
                            ->orderBy('created_at', 'desc')
                            ->paginate($perPage);

    }

    /**
     * Get single faq by slug
     *
     * @return View
     * @author Hein Zaw Htet
     **/
    public function getBySlug($slug)
    {
        return $this->model/*->with('user')*/
                            ->where('slug', $slug)
                            ->firstOrFail();
    }

    /**
     * Search faq by question or errors or answer
     *
     * @author Hein Zaw Htet
     **/
    public function getSearch($query, $limit = 8)
    {
        return $this->model->orWhere('question', 'LIKE', '%'.$query.'%')
                            ->orWhere('errors', 'LIKE', '%'.$query.'%')
                            ->orWhere('answer', 'LIKE', '%'.$query.'%')
                            ->orderBy('created_at', 'desc')
                            ->paginate($limit);
    }
}