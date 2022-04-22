<?php

namespace App\Http\Requests\Admin\Fertilizers;

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
            'norm_nitrogen' => 'required|numeric',
            'norm_phosphorus' => 'required|numeric',
            'norm_potassium' => 'required|numeric',
            'crops_id' => 'required|integer|exists:crops,id',
            'area' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'purpose' => 'required|string',
        ];
    }

}
