<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAttributesRequest extends FormRequest
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
            'content'=>'required|min:2|max:255'    
        ];
    }
    public function messages()
    {
        return [
            'content.required' => 'Vui lòng nhập nội dung',
            'content.min'       => 'Tên không được thấp hơn 2 ký tự',   
            'content.max'       => 'Tên không được quá 255 ký tự',       
        ];
    }
}
