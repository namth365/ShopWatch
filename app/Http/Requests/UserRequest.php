<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|unique:users,name|max:50',
            'position' => 'required',
            'email' => 'required|unique:users,email|max:50',
            'password' => 'required|min:6',
            'address' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'phone' => 'required|unique:users,phone|max:50',
        ];
    }
    public function messages(){
            return [
                'name.required' => 'Vui lòng nhập tên',
                'name.unique' => 'Tên đã tồn tại',
                'position.required' => 'Vui lòng nhập chức vụ',
                'email.required' => 'Vui lòng nhập emaill',
                'email.unique' => 'Emaill đã tồn tại',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.unique' => 'Mật khẩu phải có ít nhất 6 kí tự',
                'address.required' => 'Vui lòng nhập địa chỉ',
                'gender.required' => 'Vui lòng chọn giới tính',
                'birthday.required' => 'Vui lòng chọn ngày sinh',
                'phone.required' => 'Vui lòng nhập số điện thoại',
                'phone.unique' => 'Số điện thoại đã tồn tại',
            ];
    }
}
