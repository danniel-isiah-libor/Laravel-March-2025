<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterUserStoreRequest $request)
    {
        $validatedData = $request->validated();

        /* dd($request->all()); */

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);

        return redirect()->route('home');
    }

    public function login(LoginRequest $request)
    {
        $validatedData = $request->validated();

        // $user = User::whereEmail($validatedData['email'])->first();
        // // Authenticating
        // if (Hash::check($validatedData['password'], $user->password)) {
        //     dd('Authenticated');
        // } else {
        //     dd('Not authenticated');
        // }

        if (Auth::attempt($validatedData)) {
            // dd('Authenticated');
            $user = User::whereEmail($validatedData['email'])->first();
            Auth::login($user);
            return redirect()->route('home');
        } else {
            $user = User::whereEmail($validatedData['email'])->first();
            $user->update([
                'failed_attempts' => $user->failed_attempts + 1
            ]);

            dd($user->failed_attempts);
        }
    }
}
