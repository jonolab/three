<?php

namespace App\Repositories;

use App\Models\Ingredient;

class IngredientRegisterRepository
{
    public function __construct()
    {
    }

    public function getById(int $id): Ingredient
    {
        return Ingredient::where('id', $id)->first();
    }

    public function register(array $Items): void
    {
        Ingredient::upsert($Items,['id']);
    }
}
