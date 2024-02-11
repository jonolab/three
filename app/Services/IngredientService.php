<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\IngredientRegisterRepository;
use App\Repositories\IngredientRepository;
use App\Repositories\UserRegisterRepository;
use App\Services\Utils\MailService;

class IngredientService
{
    public function __construct()
    {
    }

    public function search(): \Illuminate\Database\Eloquent\Collection
    {
        $ingredientRepository = new IngredientRepository();
        return $ingredientRepository->search();
    }

    public function delete(int $id): void
    {
        $ingredientRepository = new IngredientRepository();
        $ingredientRepository->delete($id);
    }
}
