<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    public function getRecords()
    {
        $workExp = [
            [
                'company_name' => 'Amazon',
                'role' => 'Software Engineer',
                'duration' => 'January 2021 to December 2025'
            ],
            [
                'company_name' => 'Netflix',
                'role' => 'System Designer',
                'duration' => 'January 2021 to December 2025'
            ],
            [
                'company_name' => 'Google',
                'role' => 'General Manager',
                'duration' => 'January 2021 to December 2025'
            ],
        ];

        return $workExp;
    }
}
