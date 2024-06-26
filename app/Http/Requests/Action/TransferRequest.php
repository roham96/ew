<?php

namespace App\Http\Requests\Action;

use Illuminate\Foundation\Http\FormRequest;

class TransferRequest extends FormRequest
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
            'mobile' => ['required', 'numeric', 'exists:users,mobile'],
            'amount' => ['required', 'numeric', 'min:1000', 'max:100000000'],
        ];
    }


    public function attributes()
    {
        return [
          'mobile'=>__('action.mobile'),
          'amount'=>__('action.amount'),
        ];
    }
}
