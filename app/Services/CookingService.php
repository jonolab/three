<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\CookingRepository;
use App\Repositories\IngredientRegisterRepository;
use App\Repositories\IngredientRepository;
use App\Repositories\UserRegisterRepository;
use App\Services\Utils\MailService;

class CookingService
{
    public function __construct()
    {
    }

    public function search(): \Illuminate\Support\Collection
    {
        $loginSessions = session('login');
        $cookingRepository = new CookingRepository();
        return $cookingRepository->search($loginSessions['userId']);
    }
}
