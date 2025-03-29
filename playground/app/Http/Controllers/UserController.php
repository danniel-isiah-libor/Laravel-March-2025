<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
        // $workExperiences = (new WorkExperience())->getRecords();

        $itemsPerPage = $request->itemsPerPage ?? 2;

        // $workExperiences = WorkExperience::with([
        //     'user' => function ($query) {
        //         // $query->where();
        //     }
        // ])
        //     ->whereHas('user', function ($query) {
        //         $query->where('id', 1);
        //     })
        //     ->toSql();

        $workExperiences = WorkExperience::where('work_experiences.user_id', 1)
            ->select('users.name as username')
            ->join('users', 'users.id', '=', 'work_experiences.user_id')
            ->get();

        dd($workExperiences);

        // ->simplePaginate(2); // SELECT * FROM work_experiences

        // $companyName = $request->name ?? null;

        // if ($companyName) {
        //     $workExperiences = array_filter(
        //         $workExperiences,
        //         function ($workExperience) use ($companyName) {
        //             return strtolower($workExperience['company_name']) == strtolower($companyName);
        //         }
        //     );
        // }

        return view('work-experience', [
            'data' => $workExperiences
        ]);

        // $html = "<ul>";

        // foreach ($workExperiences as $workExperience) {
        //     $html .= "<li>";
        //     $html .= "<h2>" . $workExperience['company_name'] . "</h2>";
        //     $html .= "<p>Role: " . $workExperience['role'] . "</p>";
        //     $html .= "<p>Tenure: " . $workExperience['tenure'] . "</p>";
        //     $html .= "</li>";
        // }

        // $html .= "</ul>";

        // return $html;
    }

    public function register(RegisterRequest $request)
    {
        $validatedRequest = $request->validated();

        // process register
        User::create($validatedRequest);

        // $user = new User();
        // $user->name = $validatedRequest['name'];
        // $user->email = $validatedRequest['email'];
        // $user->password = $validatedRequest['password'];
        // $user->save();

        // User::insert([
        //     [
        //         'name' => $validatedRequest['name'],
        //         'email' => $validatedRequest['email'],
        //         'password' => bcrypt($validatedRequest['password']),
        //         // 'created_at' => now(),
        //         // 'updated_at' => now()
        //     ]
        // ]);

        return redirect()->route('home');
    }

    public function login(LoginRequest $request)
    {
        $validatedRequest = $request->validated();

        $user = User::whereEmail($validatedRequest['email'])->first();
        Auth::login($user);
        return redirect()->route('home');

        if (Auth::attempt($validatedRequest)) {
            // $user = User::whereEmail($validatedRequest['email'])->first();
            // Auth::login($user);
            // return redirect()->route('home');
        } else {
            // $user = User::whereEmail($validatedRequest['email'])->first();
            // $user->update([
            //     'failed_attempts' => $user->failed_attempts + 1
            // ]);
        }

        // $user = User::whereEmail($validatedRequest['email'])->first();

        // if (Hash::check($validatedRequest['password'], $user->password)) {
        //     dd(true);
        // } else {
        //     dd(false);
        // }
    }
}
