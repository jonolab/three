<?php

namespace App\Repositories;

use App\Models\User;

class LoginRepository
{
    public function __construct()
    {
    }

    public function getByLoginId(string $login_id): ?User
    {
        return User::where('login_id', $login_id)->first();
    }
}
