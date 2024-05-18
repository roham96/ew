<?php

namespace App\Http\Requests\Action;

use Bavix\Wallet\Models\Wallet;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DepositRequest extends FormRequest
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
            'mobile' => ['required', 'numeric', 'exists:users,mobile,id,'.auth()->user()->id],
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
