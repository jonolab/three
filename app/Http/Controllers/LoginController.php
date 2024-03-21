<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (session('login') !== null) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        $loginService = new LoginService();
        if (!$loginService->login($validated)) {
            return redirect('/login');
        }
        return redirect('/dashboard');
    }
}
