<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\IngredientRegisterRepository;

class IngredientRegisterService
{
    public function __construct()
    {
    }

    public function getById(int $id)
    {
        $ingredientRegisterRepository = new IngredientRegisterRepository();
        return $ingredientRegisterRepository->getById($id);
    }

    public function register(array $requests): void
    {
        $registerItems = self::setRegisterItems($requests);
        $ingredientRegisterRepository = new IngredientRegisterRepository();
        $ingredientRegisterRepository->register($registerItems);
    }

    private function setRegisterItems(array $requests): array
    {
        $results = [];
        if ($requests['id'] !== null) {
            $results['id'] = $requests['id'];
        }
        $results['name'] = $requests['name'];

        return $results;
    }
}
