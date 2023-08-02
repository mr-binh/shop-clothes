<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|regex:/^[\p{L}\s]+$/u',
            'phone' => 'required|regex:/^0\d{9}$/',
            'email' => 'required|regex:/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/',
            'street' => 'required|string',
            'note' => 'nullable|string',
            'terms' => 'required|accepted',
            'province' => 'required|string',
            'district' => 'required|string',
            'commune' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.regex' => 'The name must be a string.',
            'phone.required' => 'The phone field is required.',
            'phone.regex' => 'The phone must start with 0 and have 10 digits.',
            'email.required' => 'The email field is required.',
            'email.regex' => 'The email must be a valid email address.',
            'street.required' => 'The street field is required.',
            'terms.required' => 'The terms field is required.',
            'terms.accepted' => 'The terms must be accepted.',
            'province.required' => 'The province field is required.',
            'district.required' => 'The district field is required.',
            'commune.required' => 'The commune field is required.',
        ];
    }
}
