<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'name' => 'required|unique:sliders,id,'.$this->id.'|max:255',
            'image' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return  [
            'name.unique' => 'Slider đã tồn tại',
            'name.required' => 'Phải có slider',
            'image.required' => 'Phải có tên thể loại',
        ];
    }
}
