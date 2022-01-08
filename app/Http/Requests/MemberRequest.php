<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class MemberRequest extends FormRequest
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
            'group_name' => ['required','min:1','max:255','unique:groups'],
            'email' => ['required','email','unique:groups'],
            'password' => ['required','confirmed',
            Password::min(8)
            ->mixedCase()
            ->numbers()
            ->symbols()],
            'status' => ['required'],
        ];
    }
}
