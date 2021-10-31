<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name' => 'required|min:2|max:255|unique:brands,name,' . $this->route('brand'),
            'slug' => 'required',
            'image' => 'required',
        ];
        if($this->route('brand')){
            unset($roles['image']);
        }
        return $roles;
    }
    public function messages()
    {
        return [
            'name.required'  => 'Vui lòng nhập tên thương hiệu',
            'name.unique'    => 'Tên đã tồn tại',
            'name.min'       => 'Tên không được thấp hơn 2 ký tự',
            'name.max'       => 'Tên không được quá 255 ký tự',
            'slug.required'  => 'Vui lòng nhập slug thương hiệu',
            'image.required' => 'Vui lòng nhập hình ảnh',               
        ];
    }

}
