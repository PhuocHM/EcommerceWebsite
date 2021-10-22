<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name'=>'required|unique:brans,name,'.$this->route('brand'),
            'slug'=>'required',    
            
            'description'=>'required',
            'parent_id'=>'required',
            'status'=>'required',     
                  
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục',
            'name.unique' => 'Tên đã tồn tại',
            'slug.required' => 'Vui lòng nhập slug danh mục',
            'description.required' => 'vui lòng nhập mô tả',          
           
        ];
    }
}
