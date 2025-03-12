<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequestValidation extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'mobile_number' => 'required|string|min:10|max:15',
            'house_village_name' => 'nullable|string|max:255',
            'area_landmark' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'pin_code' => 'nullable|string|min:6|max:6',  // Assuming pin code is a 6-digit number
            'color' => 'nullable|in:black,brown',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'email.email' => 'Please enter a valid email address.',
            'mobile_number.required' => 'The mobile number field is required.',
            'mobile_number.min' => 'The mobile number must be at least 10 characters.',
            'house_village_name.required' => 'The house or village name is required.',
            'area_landmark.required' => 'The area or landmark is required.',
            'state.required' => 'The state field is required.',
            'city.required' => 'The city field is required.',
            'pin_code.required' => 'The pin code is required.',
            'pin_code.min' => 'The pin code must be exactly 6 characters.',
            'color.required' => 'The color selection is required.',
            'color.in' => 'The selected color must be either black or brown.',
        ];
    }
}
