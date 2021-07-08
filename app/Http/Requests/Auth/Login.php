<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
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
        $rules = [
            'log_email' => 'required|email',
            'log_pass' => 'required',
        ];

        return $rules;
    }

   public function attributes(){

        return [
            'log_email' => 'البريد الالكتروني',
            'log_pass' => 'كلمة السر',
        ];

   }

}
