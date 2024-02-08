<?php

namespace App\Repositories;

use App\Models\Ingredient;

class IngredientRegisterRepository
{
    public function __construct()
    {
    }

    public function getById(int $id)
    {
        $ingredient = new Ingredient();
        return $ingredient::where('id', $id)->first();
    }

    public function register(array $Items): void
    {
        $ingredient = new Ingredient();
        $ingredient::upsert($Items,['id']);
    }
}
