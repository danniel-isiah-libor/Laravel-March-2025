<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperience;
use App\Models\User;

class UserController extends Controller
{
    public function workExperiences(WorkExperience $model)
    {
        // $data = $model->with([
        //     'user'
        // ])
        // ->whereHas('user', function ($query) {
        //     $query->where('id', 1);
        // })->get();


        $data = $model
            ->select('users.name as username', 'work_experience.*')
            ->join('users', 'users.id', '=', 'work_experience.user_id')->get();

        return view('work-experience', [
            'data' => $data,
        ]);
    }
}
