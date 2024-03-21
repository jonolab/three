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

    public function search(): \Illuminate\Database\Eloquent\Collection
    {
        $loginSessions = session('login');
        $cookingRepository = new CookingRepository();
        return $cookingRepository->search($loginSessions['userId']);
    }

    public function delete(int $id): void
    {
        $ingredientRepository = new IngredientRepository();
        $ingredientRepository->delete($id);
    }
}
