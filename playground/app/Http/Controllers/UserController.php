<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function workExperiences(Request $request)
    {
                $workExperiences = (new WorkExperience())->getRecords();
        
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
        
                //return $html;
                return view('work-experience',
                [
                    'data'=> $html
                ]);
        
    }
}
