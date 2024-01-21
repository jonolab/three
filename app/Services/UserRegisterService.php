<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRegisterRepository;
use App\Services\Utils\MailService;

class UserRegisterService
{
    public function __construct()
    {
    }

    public function sendMail(array $requests): void
    {
        $user = self::getUserByEmail($requests['email']);
        $to = $requests['email'];
        $subject = '会員本登録のお知らせ';
        $body = "以下リンクを押して、本登録してください。\r\n http://localhost/user-register/confirm?id={$user->id}";
        $mailService = new MailService();
        $mailService->sendMail($to, $subject, $body);
    }

    public function register(array $requests): void
    {
        $insertItems = self::setInsertItems($requests);
        $userRegisterRepository = new UserRegisterRepository();
        $userRegisterRepository->userInsert($insertItems);
    }

    private function getUserByEmail(string $email): User
    {
        $userRegisterRepository = new UserRegisterRepository();
        return $userRegisterRepository->getUserByEmail($email);
    }

    private function setInsertItems(array $requests): array
    {
        return [
            'id' => self::generateUserId(),
            'sei' => $requests['sei'],
            'mei' => $requests['mei'],
            'email' => $requests['email'],
            'is_temporary' => 1,
            'password' => self::generatePassword($requests['password']),
        ];
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
