<?php

namespace App\Repositories;

use App\Models\Cooking;

class CookingRepository
{
    public function __construct()
    {
    }

    public function search(int $userId): \Illuminate\Database\Eloquent\Collection
    {
        return Cooking::where('user_id', $userId)->get();
    }

    public function delete(int $id)
    {
        Cooking::where('id', $id)->update(['deleted_at' => date('Y-m-d H:i:s')]);
    }
}
