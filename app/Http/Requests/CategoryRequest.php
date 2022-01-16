<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories|max:255',
            'banner' => 'required|max:255',
            'parent_id' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return  [
            'banner.unique' => 'Banner đã tồn tại',
            'banner.required' => 'Vui lòng chọn banner',
            'name.unique' => 'Tên đã tồn tại',
            'name.required' => 'Vui lòng nhập tên',
            'parent_id.required' => 'Vui lòng chọn danh mục cha',
        ];
    }
}
