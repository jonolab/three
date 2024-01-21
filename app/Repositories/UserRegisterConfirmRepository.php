<?php

namespace App\Repositories;

use App\Models\User;

class UserRegisterConfirmRepository
{
    public function __construct()
    {
    }

    public function userUpdate(array $updateItems, array $updateConditions): void
    {
        User::where('id', '=', $updateConditions['id'])
            ->update(['is_temporary' => $updateItems['is_temporary']]);
    }
}
