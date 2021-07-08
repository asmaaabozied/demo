<?php

namespace App\Http\Requests\Accounts;

use Illuminate\Foundation\Http\FormRequest;

class AddressesRequest extends FormRequest
{
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
            'address' => ['required', 'string'],
            'phone' => ['required', 'string'],

            'email' => ['required', 'string'],
            'block' => ['required', 'string'],
            'street' => ['required', 'string'],

            'house' => ['required', 'string'],
            'area_id' => ['required', 'exists:areas,id'],

            'city_id' => ['required', 'exists:cities,id'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('addresses.attributes');
    }
}
