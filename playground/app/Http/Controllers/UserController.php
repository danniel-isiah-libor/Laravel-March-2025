<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
        // $workExperiences = (new WorkExperience())->getRecords();

        $itemsPerPage = $request->itemsPerPage ?? 2;

        $workExperiences = WorkExperience::simplePaginate(2); // SELECT * FROM work_experiences

        $workExperiences = WorkExperience::simplePaginate(2);  

        
        return view('work-experience', [
            'data' => $workExperiences
        ]);

    }

    public function register(RegisterRequest $request)
    {
        $validatedRequest = $request->validated();

        dd($validatedRequest);

        // process register

        return redirect()->route('home');
    }
}
