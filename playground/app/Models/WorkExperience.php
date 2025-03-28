<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class WorkExperience extends Model
{
   public function getRecords(){
    $workExperiences = [
        [
            'company_name' => 'Company A',
            'role'         => 'Software Engineer',
            'tenure'       => '2018 Dec - 2020 Jan',
        ],
        [
            'company_name' => 'Company B',
            'role'         => 'Software Engineer',
            'tenure'       => '2018 Dec - 2020 Jan',
        ],
        [
            'company_name' => 'Company C',
            'role'         => 'Software Engineer',
            'tenure'       => '2018 Dec - 2020 Jan',
        ],
    ];

    return $workExperiences;
   }
}
