<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required',
            'phone'   => 'required',
            'dob'     => 'required',
            'gender'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is required',
            'phone.required' => 'Phone number field is required',
            'dob.required' => 'Date of birth field is required',
            'gender.required' => 'Gender field is required',
        ];
    }
}
