<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
                  'name' => 'required|max:255',
                  'email' => 'required|max:255',
                  'phone' => 'required|max:255',
                  'address' => 'required|max:255',
                  'gender' => 'required|max:255',
                  //'total' => 'required|max:255',
                  //'status' => 'required|max:255',            
        ];
    }
    public function messages()
    {
        return  [
            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Vui lòng nhập email',
            'name.required' => 'Vui lòng nhập tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'gender.required' => 'Vui lòng nhập giới tính',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'total.required' => 'Vui lòng nhập mật khẩu',
        ];
    }
}
