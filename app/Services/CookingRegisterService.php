<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Repositories\CookingRegisterRepository;
use App\Repositories\IngredientRegisterRepository;
use App\Repositories\IngredientRepository;

class CookingRegisterService
{
    public function __construct()
    {
    }

    public function getById(int $id): \App\Models\Cooking
    {
        $cookingRegisterRepository = new CookingRegisterRepository();
        return $cookingRegisterRepository->getById($id);
    }

    public function register(array $requests): void
    {
        $registerItems = self::setRegisterItems($requests);
        $cookingRegisterRepository = new CookingRegisterRepository();
        $cookingRegisterRepository->register($registerItems);
    }

    private function setRegisterItems(array $requests): array
    {
        $results = [];
        if ($requests['id'] !== null) {
            $results['id'] = $requests['id'];
        }
        $results['name'] = $requests['name'];
        $results['ingredient_id_1'] = $requests['ingredient_id_1'];
        $results['ingredient_id_2'] = $requests['ingredient_id_2'];
        $results['ingredient_id_3'] = $requests['ingredient_id_3'];

        $loginSessions = session('login');
        $results['user_id'] = $loginSessions['userId'];

        $results['is_release'] = $requests['is_release'];

        return $results;
    }
}
