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
            'title' => 'string|nullable',
            'norm_nitrogen_From' => 'numeric|nullable',
            'norm_nitrogen_To' => 'numeric|nullable',
            'norm_phosphorus_From' => 'numeric|nullable',
            'norm_phosphorus_To' => 'numeric|nullable',
            'norm_potassium_From' => 'numeric|nullable',
            'norm_potassium_To' => 'numeric|nullable',
            'crops_id' => 'array',
            'area' => 'array',
            'price_From' => 'numeric|nullable',
            'price_To' => 'numeric|nullable',
            'description' => 'string|nullable',
            'purpose' => 'string|nullable',
            'order_By_Title' => 'string|nullable',
            'order_By_Price' => 'string|nullable',
        ];
    }

}
