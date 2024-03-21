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
        $ingredientService = new IngredientService();
        $ingredients = $ingredientService->search();
        $cookingRegisterService = new CookingRegisterService();
        $cooking = $cookingRegisterService->getById($id);

        return view('cooking_register', ['ingredients' => $ingredients,'cooking' => $cooking]);
    }

    public function register(CookingRegisterRequest $request)
    {
        $validated = $request->validated();
        $cookingRegisterService = new CookingRegisterService();
        $cookingRegisterService->register($validated);
        return redirect('/cooking');
    }
}
