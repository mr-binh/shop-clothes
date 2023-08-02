<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'code' => 'required|string|min:3|max:255|unique:coupon,code',
            'type' => 'required|numeric|min:0|max:1',
            'value' => 'required|numeric|min:0',
            'discount_max' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|numeric|min:0|max:1',
            'description' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'The code field is required.',
            'code.string' => 'The code must be a string.',
            'code.min' => 'The code must be at least 3 characters.',
            'code.max' => 'The code may not be greater than 255 characters.',
            'code.unique' => 'The code has already been taken.',
            'type.required' => 'The type field is required.',
            'type.numeric' => 'The type must be a number.',
            'type.min' => 'The type must be at least 0.',
            'type.max' => 'The type may not be greater than 1.',
            'value.required' => 'The value field is required.',
            'value.numeric' => 'The value must be a number.',
            'value.min' => 'The value must be at least 0.',
            'discount_max.required' => 'The discount max field is required.',
            'discount_max.numeric' => 'The discount max must be a number.',
            'discount_max.min' => 'The discount max must be at least 0.',
            'quantity.required' => 'The quantity field is required.',
            'quantity.numeric' => 'The quantity must be a number.',
            'quantity.min' => 'The quantity must be at least 0.',
            'start_date.required' => 'The start date field is required.',
            'start_date.date' => 'The start date is not a valid date.',
            'end_date.required' => 'The end date field is required.',
            'end_date.date' => 'The end date is not a valid date.',
            'status.required' => 'The status field is required.',
            'status.numeric' => 'The status must be a number.',
            'status.min' => 'The status must be at least 0.',
            'status.max' => 'The status may not be greater than 1.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
        ];
    }
}
