<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [];
        $method = $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'POST':
                switch ($method) {
                    case 'store': // hàm nào gọi đến
                        $rules = [
                            'name' => 'required|string|min:3|max:255',
                            'description' => 'required|string',
                        ];
                        break;
                }
                break;
            case 'PUT':
                switch ($method) {
                    case 'update': // hàm nào gọi đến
                        $rules = [
                            'name' => 'required|string|min:3|max:255',
                            'description' => 'required|string',
                        ];
                        break;
                }
                break;
            default:
                break;

        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.min' => 'The name must be at least 3 characters.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
        ];
    }
}
