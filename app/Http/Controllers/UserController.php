<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends Controller
{
    public function index()
    {
        $userService = new UserService();
        $users = $userService->search();
        return view('user', ['users' => $users]);
    }
}
