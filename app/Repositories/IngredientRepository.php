<?php

namespace App\Repositories;

use App\Models\Ingredient;

class IngredientRepository
{
    public function __construct()
    {
    }

    public function search(): \Illuminate\Database\Eloquent\Collection
    {
        $ingredient = new Ingredient();
        return $ingredient::all();
    }
}
