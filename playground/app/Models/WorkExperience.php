<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    public function getRecords(){
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

            return $workExperiences;
    }
}
