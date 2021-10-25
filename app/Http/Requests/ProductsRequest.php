<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'name'=>'required|min:2|max:255|unique:products,name,'.$this->route('product'),
            'slug'=>'required',    
            'code'=>'required',    
            'sold'=>'required',
            'description'=>'required',
            'status'=>'required',
            'brand_id'=>'required',
            'category_id'=>'required',   
            'status'=>'required',           
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.unique' => 'Tên đã tồn tại',
            'slug.required' => 'Vui lòng nhập slug sản phẩm',   
            'description.required' => 'Vui lòng nhập mô tả sản phẩm ',  
        ];
    }
}
