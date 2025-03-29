<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
        // $workExperiences = (new WorkExperience())->getRecords();

        $itemsPerPage = $request->itemsPerPage ?? 10;

        $workExperiences = WorkExperience::paginate($itemsPerPage); // SELECT * FROM work_experiences

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
        // User::create([

        // ]);

        User::insert([
            
        ]);
        return redirect()->route('home');
    }
}
