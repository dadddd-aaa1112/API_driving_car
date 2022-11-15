<?php

namespace App\Http\Requests\API\DrivingCar;

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
            'client_id' => 'required|exists:clients,id',
            'car_id' => 'required|exists:cars,id',
            'status' => 'required|exists:statuses,id',
        ];
    }

    public function messages()
    {
        return [
            'client_id.required' => 'Необходимо выбрать клиента',
            'client_id.exists' => 'Необходимо выбрать клиента',
            'car_id.required' => 'Необходимо выбрать автомобиль',
            'car_id.exists' => 'Необходимо выбрать автомобиль',
            'status.required' => 'Необходимо выбрать статус',
            'status.exists' => 'Необходимо выбрать статус',
        ];
    }
}
