<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginClientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "email" => "required|exists:customers,email",
            "password" =>  "required",
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "Vui lòng nhập tên đăng nhập",
            "email.exists" => "Tài khoản không tồn tại trong hệ thống",
            "password" =>  "Vui lòng nhập mật khẩu",
        ];
    }
}
