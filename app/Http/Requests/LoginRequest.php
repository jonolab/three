<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'login_id' => 'required',
            'password' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'login_id' => 'ログインID',
            'password' => 'パスワード',
        ];
    }

    public function messages() {
        return [
            'login_id.required' => ':attributeを入力してください。',
            'password.required' => ':attributeを入力してください。',
        ];
    }
}
