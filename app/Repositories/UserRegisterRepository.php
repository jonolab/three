<?php

namespace App\Repositories;

use App\Models\User;

class UserRegisterRepository
{
    public function __construct()
    {
    }

    public function getByLoginId(string $login_id): User
    {
        return User::where('login_id', $login_id)->first();
    }

    public function register(array $Items): void
    {
        User::upsert($Items,['id']);
    }
}
