<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CookingRegisterRequest extends FormRequest
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
            'ingredient_id_1' => 'required',
            'ingredient_id_2' => [],
            'ingredient_id_3' => [],
            'is_release' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '料理名',
            'ingredient_id_1' => '食材１',
        ];
    }

    public function messages() {
        return [
            'name.required' => ':attributeを入力してください。',
            'ingredient_id_1.required' => ':attributeを入力してください。',
        ];
    }
}
