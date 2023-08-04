<?php

namespace App\Services;

class AccountService extends Service
{
    protected $userRepository;

    public function __construct(\App\Repositories\UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findMe()
    {
        $user = $this->userRepository->first();
        $user->username = 'me';
        return $user;
    }
}
