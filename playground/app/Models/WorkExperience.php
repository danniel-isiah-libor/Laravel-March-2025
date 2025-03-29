<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $table = 'work_experience';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'company_name',
        'role',
        'start_date',
        'end_date',
        'responsibilities',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
