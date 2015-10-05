<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;

class ProductRequest extends Request
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
            'name'          => 'required | min:5 | max: 80',
            'description'   => 'required | min:2',
            'price'         => 'required | min:0.01 | regex:/^\d*(\.\d{2})?$/',
            'featured'      => 'required',
            'recommend'     => 'required'
        ];
    }

//    public function messages()
//    {
//        return [
//            'name.required' => 'O campo Name é obrigatório'
//        ];
//    }
}
