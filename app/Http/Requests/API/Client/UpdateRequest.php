<?php

namespace App\Http\Requests\API\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'full_name' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'client_id.required' => 'Необходимо ввести имя клиента',
            'client_id.string' => 'Имя клиента должно быть существующим',
        ];
    }
}
