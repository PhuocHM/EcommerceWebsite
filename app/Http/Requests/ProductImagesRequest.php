<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductImagesRequest extends FormRequest
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
            'image' => 'required|unique:product_image,image,'.$this->route('product_image')
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Vui lòng nhập hình ảnh',
            'image.unique' => 'Hình ảnh đã tồn tại'
           
        ];
    }
}
