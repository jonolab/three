<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Services\UserRegisterService;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('user_register');
    }

    public function register(UserRegisterRequest $request)
    {
        $validated = $request->validated();
        $userRegisterService = new UserRegisterService();
        $userRegisterService->register($validated);
        $userRegisterService->sendMail($validated);

        return view('user_register_mail');
    }
}
