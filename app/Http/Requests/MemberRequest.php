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
            'name' => ['required', 'string','min:1','max:255'],
            'email' => ['required','string','email', 'unique:members'],
            'wa_number' => ['required','numeric', 'min:9', 'max:20', 'unique:members'],
            'line_id' => ['required', 'string', 'max:255', 'unique:members'],
            'github' => ['required','string','max:255'],
            'birth_place' => ['required', 'string', 'max:255'],
            'birth_date' => ['required','date'],
            'gender' => ['required'],
            'cv' => ['required','max:10000','mimes:pdf,jpg,jpeg,png'],
            'card' => ['required','max:10000','mimes:pdf,jpg,jpeg,png'],
        ];
    }
}
