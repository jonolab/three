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
        return Ingredient::whereNull('deleted_at')->get();
    }

    public function delete(int $id)
    {
        Ingredient::where('id', $id)->update(['deleted_at' => date('Y-m-d H:i:s')]);
    }
}
