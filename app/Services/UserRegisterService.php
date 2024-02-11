<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRegisterRepository;

class UserRegisterService
{
    public function __construct()
    {
    }

    public function getByLoginId(string $login_id): User
    {
        $userRegisterRepository = new UserRegisterRepository();
        return $userRegisterRepository->getByLoginId($login_id);
    }

    public function register(array $requests): void
    {
        $insertItems = self::setRegisterItems($requests);
        $userRegisterRepository = new UserRegisterRepository();
        $userRegisterRepository->register($insertItems);
    }

    private function setRegisterItems(array $requests): array
    {
        if ($requests['id'] !== null) {
            $results['id'] = $requests['id'];
        }
        if (!isset($requests['login_id'])) {
            $results['login_id'] = self::generateUserId();
        } else {
            $results['login_id'] = $requests['login_id'];
        }
        $results['sei'] = $requests['sei'];
        $results['mei'] = $requests['mei'];
        $results['is_admin'] = $requests['is_admin'];
        $results['password'] = self::generatePassword($requests['password']);

        return $results;
    }

    private function generateUserId(): string
    {
        return substr(md5(date('Y-m-d H:i:s')), 0, 16);
    }

    private function generatePassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

}
