<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|unique:users,email,' . $this->user,
            'phone' => 'required|unique:users,phone,' . $this->user,
            'fullname' => 'required|string',
            'user_catalogue_id' => 'required|integer|gt:0',

        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
            'fullname' => 'Họ và tên',
            'phone' => 'Số điện thoại',
            'user_catalogue_id' => 'Nhóm thành viên',
        ];
    }

    public function messages()
    {
        return __('validation');
    }
}
