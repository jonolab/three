<?php

namespace App\Http\Controllers;

use App\Services\IngredientService;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredientService = new IngredientService();
        $ingredients = $ingredientService->search();
        return view('ingredient', ['ingredients' => $ingredients]);
    }
}
