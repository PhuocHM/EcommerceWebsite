<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ResetPassAdminRequest extends FormRequest
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
            'password' => ['required', 'min:4', 'max:255', function ($attr, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password))
                return $fail('Mật khẩu cũ không đúng');
            }],
            'new_password' => 'required|min:4|max:255',
            'new_password_confirmation' => 'required|same:new_password',
        ];
    }

    public function messages()
    {
        return [

            'password.required' => 'Vui lòng nhập Mật khẩu cũ',
            'password.min' => 'Vui lòng nhập hơn 4 kí tự',
            'password.max' => 'Vui lòng nhập không quá 255 kí tự',


            'new_password.required' => 'Vui lòng nhập Mật khẩu mới',
            'new_password.min' => 'Vui lòng nhập hơn 4 kí tự',
            'new_password.max' => 'Vui lòng nhập không quá 255 kí tự',

            'new_password_confirmation.required' => 'Vui lòng nhập lại Mật khẩu',
            'new_password_confirmation.same' => 'Nhập lại Mật khẩu không đúng',
        ];
    }
}
