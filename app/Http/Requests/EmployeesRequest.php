<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
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
        $roles = [
            'name' => 'required|min:2|max:255|unique:employees,name,' . $this->route('employee'),
            'slug' => 'required',
            'email' => 'required|min:2|max:255|unique:employees,email,' . $this->route('employee'),
            'password' => 'required|min:6',
            'birthday' => 'required',
            'address' => 'required',
            'identification' => 'required|min:9|max:12',
            'image' => 'required',
        ];
        if($this->route('employee')){
            unset($roles['image']);
        }
        return $roles;
    }
    public function messages()
    {
        return [
            'name.required'  => 'Vui lòng nhập tên khách hàng',
            'name.unique'    => 'Tên đã tồn tại',
            'name.min'       => 'Tên không được thấp hơn 2 ký tự',
            'name.max'       => 'Tên không được quá 255 ký tự',
            'slug.required'  => 'Vui lòng nhập slug ',
            'email.required'  => 'Vui lòng nhập email',
            'email.unique'    => 'Email đã tồn tại',
            'email.min'       => 'Email không được thấp hơn 2 ký tự',
            'email.max'       => 'Email không được quá 255 ký tự',
            'password.required'  => 'Vui lòng nhập password',
            'password.min'       => 'Password không được thấp hơn 6 ký tự',
            'birthday.required'  => 'Vui lòng nhập ngày sinh',
            'address.required'   => 'Vui lòng nhập địa chỉ',
            'identification.required'   => 'Vui lòng nhập CCCD',
            'identification.min'       => 'CCCD không được thấp hơn 9 ký tự',
            'identification.max'       => 'CCCD không được quá 12 ký tự',
            'image.required' => 'Vui lòng nhập hình ảnh',
        ];
    }
}
