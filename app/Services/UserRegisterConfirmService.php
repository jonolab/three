<?php

namespace App\Services;

use App\Repositories\UserRegisterConfirmRepository;

class UserRegisterConfirmService
{
    public function __construct()
    {
    }

    public function register(array $requests): void
    {
        $updateItems = self::setUpdateItems();
        $updateConditions = self::setUpdateConditions($requests);
        $userRegisterConfirmRepository = new UserRegisterConfirmRepository();
        $userRegisterConfirmRepository->userUpdate($updateItems, $updateConditions);
    }

    private function setUpdateItems(): array
    {
        return [
            'is_temporary' => 0,
        ];
    }

    private function setUpdateConditions(array $requests): array
    {
        return [
            'id' => $requests['id'],
        ];
    }
}
