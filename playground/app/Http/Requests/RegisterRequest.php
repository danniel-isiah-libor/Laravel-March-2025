<?php

namespace App\Http\Requests;

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
                'email',
                'string',
                'required'
            ],
            'password' => [
                'string',
                'required',
                // 'min:8',
                // 'max:12',
                'confirmed',
                Password::min(8)
                    ->max(12)
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            // 'user_id' => [
            //     'integer',
            //     'required',
            //     // 'unique:users,id',
            //     // 'exists:users,id'
            // ]
        ];
    }
}
