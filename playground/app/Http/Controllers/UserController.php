<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
        // $workExperiences = (new WorkExperience())->getRecords();

        $itemsPerPage = $request->itemsPerPage ?? 2;

        $workExperiences = WorkExperience::Paginate(); // SELECT * FROM work_experiences

        $companyName = $request->name ?? null;

        if ($companyName) {
            $workExperiences = array_filter(
                $workExperiences,
                function ($workExperience) use ($companyName) {
                    return strtolower($workExperience['company_name']) == strtolower($companyName);
                }
            );
        }

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

        // dd($validatedRequest);

        // process register
        User::create($validatedRequest);
        // $user = new User();
        // $user->name = $validatedRequest['name'];
        // $user->email = $validatedRequest['email'];
        // $user->password = bcrypt($validatedRequest['password']);
        // $user->save();


        // User::insert([
        //     'name' => $validatedRequest['name'],
        //     'email' => $validatedRequest['email'],
        //     'password' => bcrypt($validatedRequest['password']),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        return redirect()->route('home');
    }
}