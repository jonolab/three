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
            'sei' => 'required',
            'mei' => 'required',
            'email' => 'required | email:filter,dns',
            'password' => 'required',
        ];
    }
}
