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
        'password' => 'required|min:6|max:20',
        ];
    }
    public function messages()
    {
        return [
        // 'email.confirmed' => 'Email bạn nhập chưa đúng',
        // 'email.required' => 'Bạn chưa nhâp email',
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Bạn chưa nhâp password',
        'password.confirmed' => 'Password bạn nhập chưa đúng',
        'password.min' => 'Password phải có ít nhất 6 kí tự',
        'password.max' => 'Password chỉ không được quá 20 kí tự'
        ];
    }
}


