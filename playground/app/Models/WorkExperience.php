<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class WorkExperience extends Model
{
    use HasFactory;

    public function getRecords()
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

        /**
         * SELECT * FROM work_experiences .....
         */

        return $workExperiences;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
