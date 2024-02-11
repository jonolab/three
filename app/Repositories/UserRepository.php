<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function __construct()
    {
    }

    public function search(): \Illuminate\Database\Eloquent\Collection
    {
        return User::all();
    }
}
