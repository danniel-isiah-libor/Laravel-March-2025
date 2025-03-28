<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
        $workExperiences = (new WorkExperience())->getRecords();

        $companyName = $request->name ?? null;

        if ($companyName) {
            $workExperiences = array_filter(
                $workExperiences,
                function ($workExperience) use ($companyName) {
                    return strtolower($workExperience['company_name']) == strtolower($companyName);
                }
            );
        }

        $html = "<ul>";

        foreach ($workExperiences as $workExperience) {
            $html .= "<li>";
            $html .= "<h2>" . $workExperience['company_name'] . "</h2>";
            $html .= "<p>Role: " . $workExperience['role'] . "</p>";
            $html .= "<p>Tenure: " . $workExperience['tenure'] . "</p>";
            $html .= "</li>";
        }

        $html .= "</ul>";

        return $html;
    }
}
