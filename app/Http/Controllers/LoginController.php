<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        $loginService = new LoginService();
        $loginService->login($validated);

        return view('dashboard');
    }
}
