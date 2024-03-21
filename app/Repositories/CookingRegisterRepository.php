<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Cooking;
use App\Models\Ingredient;

class CookingRegisterRepository
{
    public function __construct()
    {
    }

    public function getById(int $id): Cooking
    {
        return Cooking::where('id', $id)->first();
    }

    public function register(array $Items): void
    {
        Cooking::upsert($Items,['id']);
    }
}
