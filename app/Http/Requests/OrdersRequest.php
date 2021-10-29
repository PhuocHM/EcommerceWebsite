<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
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
            //'code' => 'required',
            'payment_method' => 'required',
            'total_price' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'Vui lòng nhập mã đơn hàng',
            'payment_method.required' => 'Vui lòng nhập phương thức thanh toán',
            'total_price.required' => 'Vui lòng nhập tổng giá đơn hàng'
        ];
    }
}
