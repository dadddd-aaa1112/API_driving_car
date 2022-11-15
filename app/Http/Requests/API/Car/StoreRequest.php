<?php

namespace App\Http\Requests\API\Car;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'reg_number' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'reg_number.required' => 'Необходимо ввести регистрационный номер авто',
            'reg_number.string' => 'Регистрационный номер авто должен быть существующим',
        ];
    }
}
