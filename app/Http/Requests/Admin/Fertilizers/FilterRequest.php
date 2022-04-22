<?php

namespace App\Http\Requests\Admin\Fertilizers;

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
            'norm_nitrogen_From' => 'numeric',
            'norm_nitrogen_To' => 'numeric',
            'norm_phosphorus_From' => 'numeric',
            'norm_phosphorus_To' => 'numeric',
            'norm_potassium_From' => 'numeric',
            'norm_potassium_To' => 'numeric',
            'crops_id' => 'array',
            'area' => 'array',
            'price_From' => 'numeric',
            'price_To' => 'numeric',
            'description' => 'string',
            'purpose' => 'string',
            'order_By_Title' => 'string',
            'order_By_Price' => 'string',
        ];
    }

}
