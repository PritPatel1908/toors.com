<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupValidation extends FormRequest
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
    public function rules(): array
    {
        return [
            'username' => 'required|min:4|max:10',
            'first_name' => 'required|min:2|max:15',
            'last_name' => 'required|min:2|max:15',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'pincode' => 'required|integer',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'password' => 'required|min:4|max:8'
        ];
    }
}
