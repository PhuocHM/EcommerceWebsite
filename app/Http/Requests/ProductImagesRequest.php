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
        $roles = [       
            'image' => 'required',        
        ];
        if ($this->route('productImage')) {
            unset($roles['image']);
        }
        return $roles;
    }
    public function messages()
    {
        return [
            'image.required' => 'Vui lòng nhập hình ảnh',
        ];
    }
}
