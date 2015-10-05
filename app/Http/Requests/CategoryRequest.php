<?php

namespace CodeCommerce\Http\Requests;

use CodeCommerce\Http\Requests\Request;

class CategoryRequest extends Request
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
            'name'          => 'required | min:5 | max:80',
            'description'   => 'required'
        ];
    }

//    public function messages()
//    {
//        return [
//            'name.required'         => 'O campo Name é obrigatório',
//            'name.min'              => 'O campo Name deve possuir no mínimo 5 letras',
//            'name.max'              => 'O campo Name deve possuir no máximo 80 letras',
//            'description.required'  => 'O campo description é obrigatório'
//        ];
//    }
}
