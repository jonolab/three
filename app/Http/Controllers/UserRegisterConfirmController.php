<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterConfirmRequest;
use App\Services\UserRegisterConfirmService;
use Illuminate\Http\Request;

class UserRegisterConfirmController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->query('id');
        return view('user_register_confirm')->with('id',$id);
    }

    public function register(UserRegisterConfirmRequest $request)
    {
        $validated = $request->validated();
        $userRegisterConfirmService = new UserRegisterConfirmService();
        $userRegisterConfirmService->register($validated);
        return view('login');
    }
}
