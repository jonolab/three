<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => [],
            'login_id' => [],
            'sei' => 'required',
            'mei' => 'required',
            'password' => 'required',
            'is_admin' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'sei' => '姓',
            'mei' => '名',
            'password' => 'パスワード',
        ];
    }

    public function messages() {
        return [
            'sei.required' => ':attributeを入力してください。',
            'mei.required' => ':attributeを入力してください。',
            'password.required' => ':attributeを入力してください。',
        ];
    }

}
