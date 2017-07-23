<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:20',
        'name' => 'required',
        're_password' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return [
        'email.required' => 'Vui lòng nhâp email',
        'email.email' => 'Không đúng định dạng email',
        'email.unique' => 'Email đã có người sử dụng',
        'password.required' => 'Vui lòng nhập password',
        'password.min' => 'Mật khẩu phải ít nhất 6 kí tự',
        'password.max' => 'Mật khẩu không được quá 20 kí tự',
        'name.required' =>  'Ban phải nhập Username',
        're_password' => 'Bạn phải nhập lại password',
        're_password.same' => 'Password nhập lại không đúng'
        ];
    }
}
