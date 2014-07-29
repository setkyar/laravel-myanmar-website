<?php

namespace LM\Repositories;

use LM\Models\User;
use LM\Interfaces\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    protected $model;
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

    public function findByProfileUrl($profile_url)
    {
        return $this->model->where('profile_url', '=', $profile_url)
                            ->with('blogs')
                            ->first();
    }

    public function blogs()
    {
        return $this->hasMany('LM\Models\Blog');
    }

}