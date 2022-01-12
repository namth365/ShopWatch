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
                  'email' => 'required|unique:users|max:255',
                  'phone' => 'required|unique:users|max:255',
                  'address' => 'required|max:255',
                  'gender' => 'required|max:255',
                  'birthday' => 'required|max:255',
                  'password' => 'required|max:255',
            ];
    }
    public function messages()
    {
        return  [
            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Phải có email',
            'name.required' => 'Phải có tên',
            'phone.required' => 'Phải có số điện thoại',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'gender.required' => 'Phải có giới tính',
            'birthday.required' => 'Phải có ngày sinh',
            'address.required' => 'Phải có địa chỉ',
            'password.required' => 'Phải có mật khẩu',
        ];
    }
}
