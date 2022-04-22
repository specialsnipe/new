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
            'title' => 'string',
            'date_From' => 'date',
            'date_To' => 'date',
            'price_From' => 'numeric',
            'price_To' => 'numeric',
            'region' => 'array',
            'order_By_Title'=>'string',
            'order_By_Price'=>'string',
        ];
    }

}
