<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                            'name' => 'required|string|min:3|max:255|unique:product,name,slug',
                            'description' => 'required|string',
                            'price' => 'required|numeric|min:0',
                            'category_id' => 'required|numeric',
                            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:10240',
                            'status' => 'required|numeric|min:0|max:1',
                            'hot' => 'required|numeric|min:0|max:1',
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
                            'price' => 'required|numeric|min:0',
                            'category_id' => 'required|numeric',
                            'status' => 'required|numeric|min:0|max:1',
                            'hot' => 'required|numeric|min:0|max:1',
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
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least 0.',
            'category_id.required' => 'The category field is required.',
            'category_id.numeric' => 'The category must be a number.',
            'status.required' => 'The status field is required.',
            'status.numeric' => 'The status field is required..',
            'status.min' => 'The status field is required.',
            'status.max' => 'The status field is required.',
            'hot.required' => 'The hot field is required.',
            'hot.numeric' => 'The hot field is required.',
            'hot.min' => 'The hot field is required.',
            'hot.max' => 'The hot field is required.',
        ];
    }
}
