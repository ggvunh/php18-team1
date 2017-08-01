<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
        'email' => 'required|email',
        'password' => 'required|min:6|max:20|same:password',
        ];
    }
    public function messages()
    {
        return [
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Bạn chưa nhâp password',
        'password.confirmed' => 'Password bạn nhập chưa đúng',
        'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
        'password.max' => 'Mật khẩu chỉ không được quá 20 kí tự',
        'password.same' => 'Mật khẩu nhập không đúng'
        ];
    }
}


