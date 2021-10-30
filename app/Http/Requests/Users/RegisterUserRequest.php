<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:4|confirmed',
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập nickname',
            'name.string' => 'Vui lòng nhập đúng định dạng kí tự',
            'name.max' => 'Vui lòng nhập không quá 255 kí tự',
            'name.unique' => 'Nickname đã tồn tại',

            'email.required' => 'Vui lòng nhập Email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.max' => 'Vui lòng nhập không quá 255 kí tự',
            'email.unique' => 'Email đã tồn tại',

            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'Vui lòng nhập tối thiểu 4 kí tự',
            'password.string' => 'Chỉ được nhập chữ hoặc số',
            'password.confirmed' => 'Nhập lại mật khẩu không đúng',

            'customer_name.required' => 'Vui lòng nhập họ và tên',
            'customer_name.string' => 'Vui lòng nhập đúng định dạng',
            'customer_name.max' => 'Vui lòng nhập không quá 255 kí tự',

            'phone.required' => 'Vui lòng nhập SĐT',
            'phone.numeric' => 'Vui lòng nhập đúng định dạng số',
            // 'phone.max' => 'Vui lòng nhập đúng 10 số',

            'address.required' => 'Vui lòng nhập địa chỉ',
            'address.string' => 'Vui lòng nhập đúng định dạng',
            'address.max' => 'Vui lòng nhập không quá 255 kí tự',
        ];
    }
}
