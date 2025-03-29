<?php

namespace App\Http\Requests;

use App\Rules\EmailRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'name' => [
                'string',
                'required'
            ],
            'email' => [
                'string',
                'email',
                'required',
                (new EmailRule())
            ],
            'password' => [
                'string',
                'required',
                // 'min:8',
                // 'max:12',
                // 'confirmed',
                Password::min(8)
                // ->max(12)
                // ->letters()
                // ->numbers()
                // ->symbols()
                // ->uncompromised()
                // ->mixedCase()
            ],
            // 'user_id' => [
            //     'integer',
            //     'required',
            //     // 'unique:users',
            //     // 'exists:users,id'
            // ]
        ];
    }

    public function messages()
    {
        return [
            'password' => [
                'min' => 'This is a custom message',
            ]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            // 'role' => 'customer'
        ]);
    }
}
