<?php

namespace App\Http\Requests\Admin\Clients;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'title' => 'string|nullable',
            'date_From' => 'date|nullable',
            'date_To' => 'date|nullable',
            'price_From' => 'numeric|nullable',
            'price_To' => 'numeric|nullable',
            'region' => 'array',
            'order_By_Title'=>'string|nullable',
            'order_By_Price'=>'string|nullable',
        ];
    }

}
