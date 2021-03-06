<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersRequest extends FormRequest
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
            'name'=>'required',
            'slug'=>'required',    
            'phone'=>'required',   
            'address'=>'required',   
            'bonus_points'=>'required',   
                            
        ];
    }
    public function messages()
    {
        return [
            'name.required'          => 'Vui lòng nhập tên khách hàng',        
            'slug.required'          => 'Vui lòng nhập slug mô tả',   
            'phone.required'        => 'Vui lòng nhập số điện thoại',   
            'address.required'       => 'Vui lòng nhập địa chỉ',   
            
        ];
    }
}
