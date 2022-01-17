<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'supplier' => 'required',
            'status' => 'required',
            'image' => 'required',
            'description' => 'required'
           
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'quantity.required' => 'Vui lòng nhập số lượng sản phẩm',
            'category_id.required' => 'Vui lòng chọn danh mục sản phẩm',
            'supplier.required' => 'Vui lòng nhập nhà sản xuất',
            'status.required' => 'Vui lòng chọn trạng thái sản phẩm',
            'image.required' => 'Vui lòng chọn tệp',
            'description.required' => 'Vui lòng nhập mô tả sản phẩm'
        ];
    }
}
