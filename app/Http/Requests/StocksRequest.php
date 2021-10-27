<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StocksRequest extends FormRequest
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
            'produce_id' => 'required',
            'employee_id' => 'required',
            'supplier_id' => 'required',
            'quantity' => 'required',
            'cost_price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'produce_id.required'  => 'Vui lòng nhập tên sản phẩm',
            'employee_id.required'  => 'Vui lòng nhập nhân viên nhập kho',
            'supplier_id.required' => 'Vui lòng nhập nhà cung cấp',
            'quantity.required' => 'Vui lòng nhập số lượng',
            'cost_price.required' => 'Vui lòng nhập giá vốn',
        ];
    }
}
