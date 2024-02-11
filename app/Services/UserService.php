<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    public function __construct()
    {
    }

    public function search(): \Illuminate\Database\Eloquent\Collection
    {
        $userRepository = new UserRepository();
        return $userRepository->search();
    }
}
