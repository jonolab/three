<?php

namespace App\Http\Controllers;

use App\Http\Requests\CookingRegisterRequest;
use App\Http\Requests\IngredientRegisterRequest;
use App\Services\CookingRegisterService;
use App\Services\IngredientRegisterService;
use App\Services\IngredientService;

class CookingRegisterController extends Controller
{
    public function index()
    {
        $ingredientService = new IngredientService();
        $ingredients = $ingredientService->search();
        return view('cooking_register', ['ingredients' => $ingredients]);
    }

    public function detail(int $id)
    {
        $ingredientRegisterService = new IngredientRegisterService();
        $ingredient = $ingredientRegisterService->getById($id);

        return view('ingredient_register', ['ingredient' => $ingredient]);
    }

    public function register(CookingRegisterRequest $request)
    {
        $validated = $request->validated();
        $cookingRegisterService = new CookingRegisterService();
        $cookingRegisterService->register($validated);
        return redirect('/cooking');
    }
}
