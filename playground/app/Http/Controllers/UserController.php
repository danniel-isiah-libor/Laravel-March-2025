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
                    'role' => 'Admin',
                    'tenure' => 'Jan 2023 to Present' 
                ],
                [
                    'company_name' => 'Company B',
                    'role' => 'IT Specialist',
                    'tenure' => 'Jan 2021 to Present' 
                ],
                [
                    'company_name' => 'Company A',
                    'role' => 'HR',
                    'tenure' => 'Jan 2020 to Present' 
                ]
        
                ];
        
                $companyName =$request->name ?? null;
                if($companyName){
                    $workExperience = array_filter($workExperiences,function($workExperience) use($companyName) {
                        return $workExperience['company_name'] == $companyName;
                    }
                );
                }
        
                $html= "<ul>";
                foreach ($workExperiences as $workExperience){
                    $html .="<li>";
                    $html .="<h2>".$workExperience['company_name']."</h2>";
                    $html .="<p>Role: ".$workExperience['role']."</h2>";
                    $html .="<p>Tenure: ".$workExperience['tenure']."</h2>";
                    $html .="</li>";
                }
                $html.="</ul>";
        
                return $html;
        
    }
}
