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

    public function delete(int $id)
    {
        $ingredientService = new IngredientService();
        $ingredientService->delete($id);
        return redirect('/master/ingredient');
    }
}
