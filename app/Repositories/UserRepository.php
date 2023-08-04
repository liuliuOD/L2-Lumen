<?php

namespace App\Repositories;

class UserRepository extends Repository
{
    public function __construct(\App\Models\User $user)
    {
        $this->model = $user;
    }
}
