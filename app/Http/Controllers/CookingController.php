<?php

namespace App\Http\Controllers;

use App\Services\CookingService;
use App\Services\IngredientService;
use Illuminate\Http\Request;

class CookingController extends Controller
{
    public function index()
    {
        $cookingService = new CookingService();
        $cookingList = $cookingService->search();
        return view('cooking', ['cookingList' => $cookingList]);
    }

    public function delete(int $id)
    {
        $ingredientService = new IngredientService();
        $ingredientService->delete($id);
        return redirect('/master/ingredient');
    }
}
