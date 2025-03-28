<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperience;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {

        $workExp = (new WorkExperience())->getRecords();

        $companyName = $request->company ?? null;

        if ($companyName) {
            $workExp = array_filter(
                $workExp,
                function ($workExp) use ($companyName) {
                    return $workExp['company_name'] == $companyName;
                }
            );
        }

        $html = "<ul>";

        foreach ($workExp as $we) {
            $html .= "<l1>";
            $html .= "<h2>" . $we['company_name'] . "</h2>";
            $html .= "<p>Role: " . $we['role'] . "</p>";
            $html .= "<p>Duration: " . $we['duration'] . "</p>";
            $html .= "</h2>";
        }
        $html .= "<ul>";

        return view('work-experience', [
            'data' => $html,
        ]);
    }
}
