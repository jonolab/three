<?php

namespace App\Repositories;

use App\Models\User;

class UserRegisterRepository
{
    public function __construct()
    {
    }

    public function getUserByEmail(string $email): User
    {
        return User::where('email',$email)->first();
    }

    public function userInsert(array $insertItems): void
    {
        $user = new User();
        $user->create($insertItems);
    }
}
