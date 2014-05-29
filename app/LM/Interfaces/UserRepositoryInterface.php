<?php

namespace LM\Interfaces;

use LM\Models\User;

interface UserRepositoryInterface
{

    /**
     * Create a new user.
     *
     * @param  array  $data
     * @return LM\User
     */
    public function create(array $data);
}