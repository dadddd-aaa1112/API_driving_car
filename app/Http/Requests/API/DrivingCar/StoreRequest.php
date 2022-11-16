<?php

namespace App\Http\Requests\API\DrivingCar;

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
            'client_id' => 'required|exists:clients,id',
            'car_id' => 'required|exists:cars,id',
        ];
    }

    public function messages()
    {
        return [
            'client_id.required' => 'Необходимо указать клиента',
            'client_id.exists' => 'Необходимо выбрать существующего клиента из базы',
            'car_id.required' => 'Необходимо указать автомобиль',
            'car_id.exists' => 'Необходимо выбрать существующий автомобиль из базы',

        ];
    }
}
