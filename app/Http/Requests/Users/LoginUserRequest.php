<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'password' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập Email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.max' => 'Vui lòng nhập không quá 255 kí tự',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'Vui lòng nhập tối thiểu 4 kí tự'
        ];
    }
}
