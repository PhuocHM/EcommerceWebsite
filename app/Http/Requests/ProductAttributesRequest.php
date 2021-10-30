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
            'name'=>'required|unique:attributes,name,'.$this->route('attribute'),
            'slug'=>'required',    
            
       
            'category_id'=>'required',
             
              
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập thuộc tính',
            'name.unique' => 'Tên đã tồn tại',
            'slug.required' => 'Vui lòng nhập slug thuộc tính',   
           
        ];
    }
}
