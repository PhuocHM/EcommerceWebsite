<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolesRequest extends FormRequest
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
            'name'=>'required|min:2|max:255|unique:groups,name,'.$this->route('group'),
            'slug' => 'required',
            'info'=> 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'  => 'Vui lòng nhập tên khách hàng',
            'name.unique'    => 'Tên đã tồn tại',
            'name.min'       => 'Tên không được thấp hơn 2 ký tự',   
            'name.max'       => 'Tên không được quá 255 ký tự',  
            'slug.required'  => 'Vui lòng nhập slug ', 
            'info.required'  => 'Vui lòng nhập thông tin ', 
        ];
    }
}
