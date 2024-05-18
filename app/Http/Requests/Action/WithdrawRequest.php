<?php

namespace App\Http\Requests\Action;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawRequest extends FormRequest
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
            // 'uuid' => ['required','uuid', 'exists:wallets,uuid,holder_id,'.auth()->user()->id],
            'mobile' => ['required', 'numeric', 'exists:users,mobile,id,'.auth()->user()->id],
            'amount' => ['required', 'numeric', 'min:1000', 'max:100000000'],
            'card'=> ['required','numeric']
        ];
    }

    public function attributes()
    {
        return [
          'mobile'=>__('action.mobile'),
          'amount'=>__('action.amount'),
          'card'=>__('action.card'),
        ];
    }
    // /**
    //  * Get the error messages for the defined validation rules.
    //  *
    //  * @return array
    //  */
    // public function messages()
    // {
    //     return [
    //         'mobile.required' => __('actions',[]),
    //         'body.required'  => 'A message is required',
    //     ];
    // }
}
