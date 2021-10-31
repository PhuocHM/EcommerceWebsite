<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponsRequest extends FormRequest
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
            'amounts' => 'required',
            'description' => 'required',
            'expired_day' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'amounts.required'       => 'Tên không được quá 255 ký tự',
            'description.required'  => 'Vui lòng nhập mô tả',
            'expired_day.required' => 'Vui lòng nhập ngày hết hạn',
            'image.required' => 'Vui lòng nhập ảnh',
        ];
    }
}
