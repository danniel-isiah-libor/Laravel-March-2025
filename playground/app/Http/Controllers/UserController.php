<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
        $workExperiences = [
            [
                'company_name' => 'Company A',
                'role' => 'Software Engineer',
                'tenure' => '2018 Dec - 2020 Jan',
            ],
            [
                'company_name' => 'Company B',
                'role' => 'Software Engineer',
                'tenure' => '2018 Dec - 2020 Jan',
            ],
            [
                'company_name' => 'Company C',
                'role' => 'Software Engineer',
                'tenure' => '2018 Dec - 2020 Jan',
            ]
        ];

        $companyName = $request->name ?? null;

        if ($companyName) {
            $workExperiences = array_filter(
                $workExperiences,
                function ($workExperience) use ($companyName) {
                    return $workExperience['company_name'] == $companyName;
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
