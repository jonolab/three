<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientRegisterController extends Controller
{
    public function index()
    {
        return view('ingredient_register');
    }
}
