<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountsRequest extends FormRequest
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
            'name'                       => 'required',
            'amounts'                    => 'required',
            'start_date'                  => 'required',    
            'expired_date'                => 'required',
            'description'                => 'required',
            'image'                      => 'required',         
        ];
    }
    public function messages()
    {
        return [
            'name.required'              =>'Nhập tên chiết khấu được giảm',
            'amounts.required'           =>'Nhập số tiền được giảm',
            'description.required'       => 'Vui lòng nhập mô tả',
            'image.required'             => 'Vui lòng nhập hình ảnh khuyến mại',   
            'expired_day.required'             => 'Vui lòng nhập ngày kết thúc',   
            'start_day.required'             => 'Vui lòng nhập ngày khuyến mại',   
           
        ];
    }
}
