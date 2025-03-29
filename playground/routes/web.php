<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

Route::get('/', function () {
    //return view('welcome');
    return "hello world";
});
Route::get('work-experience',function(Request $request){
$WorkExperience = [

    
]
$input = $request->all();
return"
  <ul>
  <li>company Name: {$input['Company_Name']}</li>
  <li>Start Date: {$input['Start_Date']}</li>
 <li>Role: {$input['Role']}</li>
 </ul>
";
});