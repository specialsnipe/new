<?php

namespace App\Http\Requests\Admin\Users;

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
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле необходимо заполнить',
            'name.string' => 'Введены не правильные символы',
            'email.required' => 'Поле необходимо заполнить',
            'email.email' => 'Данные должны быть формата some@some.domain',
            'email.string' => 'Введены не правильные символы',
            'email.unique:users' => 'Эта почта занята',
            'password.required' => 'Поле необходимо заполнить',
            'password.string' => 'Введены не правильные символы',
        ];
    }
}
