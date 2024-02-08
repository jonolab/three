<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientRegisterRequest;
use App\Services\IngredientRegisterService;

class IngredientRegisterController extends Controller
{
    public function index()
    {
        return view('ingredient_register');
    }

    public function detail(int $id)
    {
        $ingredientRegisterService = new IngredientRegisterService();
        $ingredient = $ingredientRegisterService->getById($id);

        return view('ingredient_register', ['ingredient' => $ingredient]);
    }

    public function register(IngredientRegisterRequest $request)
    {
        $validated = $request->validated();
        $ingredientRegisterService = new IngredientRegisterService();
        $ingredientRegisterService->register($validated);
        return redirect('/master/ingredient');
    }
}
