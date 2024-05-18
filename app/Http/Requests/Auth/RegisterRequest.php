<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            'national_code' => ['required', 'numeric', 'regex:/^[0-9]{10}/i'],
            'mobile' => ['required',  'unique:users,mobile', 'regex:/^[0][9][0-9]{9}/i'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required_if:password,true', 'string', 'min:8'],
        ];
    }


    public function attributes()
    {
        return [
            'national_code' => __('action.national_code'),
            'mobile' => __('action.mobile'),
            'password' => __('action.password'),
            'confirm_password' => __('action.confirm_password'),
        ];
    }
}
