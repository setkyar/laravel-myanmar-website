<?php

namespace LM\Repositories;

use LM\Models\User;
use LM\Interfaces\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    /**
     * Create a new instance.
     *
     * @param  \LM\User  $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Find all users
     *
     * @param  int  $perPage
     * @return LM\Models\User
     */
    public function findAll($perPage = 200)
    {
        return $this->model->orderBy('created_at', 'desc')
                            ->paginate($perPage);
    }
}