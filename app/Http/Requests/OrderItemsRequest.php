<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderItemsRequest extends FormRequest
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
            'price' => 'required',
            'quantity' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'price.required' => 'Vui lòng nhập giá sản phẩm ',
            'quantity.required' => 'Vui lòng nhập số lượng đặt hàng'
        ];
    }
}
