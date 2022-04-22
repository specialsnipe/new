<?php

namespace App\Http\Requests\Admin\Clients;

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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'date' => 'required|date',
            'price' => 'required|numeric',
            'region' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Заполните поле',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'date.required' => 'Заполните поле',
            'date.date' => 'Данные должны соответствовать формату дд.мм.гггг ',
            'price.required' => 'Заполните поле',
            'price.regex:/^\d*(\.\d{2})?$/' => 'Денные должны соответствовать численному типу',
            'region.required' => 'Заполните поле',
            'region.string' => 'Данные должны соответствовать строчному типу',
        ];
    }
}
