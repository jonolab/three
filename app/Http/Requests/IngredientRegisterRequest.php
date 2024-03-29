<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => [],
            'name' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '食材名',
        ];
    }

    public function messages() {
        return [
            'name.required' => ':attributeを入力してください。',
        ];
    }
}
