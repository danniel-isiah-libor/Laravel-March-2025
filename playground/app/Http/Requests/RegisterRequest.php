<?php

namespace App\Http\Requests;

use App\Rules\EmailRule;
use Illuminate\Validation\Rules\Password;

use Illuminate\Foundation\Http\FormRequest;



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
            'name' => ['string', 'required'],
            'email' => [
                'email','string','required',new EmailRule(),
            ],
            'password' => ['string', 'required', 'confirmed',
            Password::min(8)
            // ->max(12)
            // ->letters()
            // ->numbers()
            // ->symbols()
            // ->uncompromised()
            // ->mixedCase()
        ],
            // 'user_id' =>[
            //     'string',
            //     'required',
            //     // 'unique:users',
            //     // 'exists:users,id'
            // ]
        ];
    }

    public function messages(){
        return [
            'password' => [
                'min' => 'This is my custom.',
            ]
            ];
        }
}
