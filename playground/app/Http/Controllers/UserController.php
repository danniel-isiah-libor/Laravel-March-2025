<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
        $workExperiences = (new WorkExperience())->getRecords();

        $workExperiences = WorkExperience::simplePaginate(2);  

        
        return view('work-experience', [
            'data' => $workExperiences
        ]);

    }
}
