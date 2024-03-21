<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\LoginRepository;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;

class LoginService
{
    public function __construct()
    {
    }

    public function login(array $requests): bool
    {
        $user = self::getUser($requests['login_id']);

        // TODO エラーをスローするよう修正予定
        // 参考：https://www.wantedly.com/companies/logical-studio/post_articles/500137
        // ViewErrorBagに入れて画面表示させる

        if ($user === null) {
            return false;
        }

        if(!password_verify($requests['password'], $user->password)){
            return false;
        }

        // sessionに保存
        session([
            'login' => [
                'userId' => $user->id,
                'loginId' => $user->login_id,
            ]
        ]);

        return true;

    }

    private function getUser(string $login_id): ?User
    {
        $loginService = new LoginRepository();
        return $loginService->getByLoginId($login_id);
    }
}
