<?php

namespace LM\Repositories;

use LM\Models\Forum;
use LM\Interfaces\ForumRepositoryInterface;

class ForumRepository extends AbstractRepository implements ForumRepositoryInterface
{
    protected $model;
    /**
     * Create a new instance.
     *
     * @param  \LM\User  $user
     * @return void
     */
    public function __construct(Forum $forum)
    {
        $this->model = $forum;
    }
}