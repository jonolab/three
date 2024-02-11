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

    public function detail(string $login_id)
    {
        $userRegisterService = new UserRegisterService();
        $user = $userRegisterService->getByLoginId($login_id);

        return view('user_register', ['user' => $user]);
    }

    public function register(UserRegisterRequest $request)
    {
        $validated = $request->validated();
        $userRegisterService = new UserRegisterService();
        $userRegisterService->register($validated);

        return redirect('/master/user');
    }
}
