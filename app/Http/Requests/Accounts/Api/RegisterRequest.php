<?php

namespace App\Http\Requests\Accounts\Api;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Accounts\WithHashedPassword;

class RegisterRequest extends FormRequest
{
    use WithHashedPassword;

    /**
     * Determine if the supervisor is authorized to make this request.
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['unique:users,phone'],
            'password' => ['required', 'min:4'],
            'avatar' => ['nullable', 'base64_image'],
            'firebase_token' => ['required', 'string'],
            //'device_name' => ['required'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('customers.attributes');
    }
}
