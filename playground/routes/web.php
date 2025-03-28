<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  //  return view('welcome');

  //return "<h1 style='color: red'> 
  // Hello Laravel </h1>";
  return "<script> alert('Hello Laravel')";
  
});

Route::get('/admin/users/update/1', function () {
    return "Admin Page";
});

Route::get('/admin/users/create/1', function () {
    return "Admin Page";
});

Route::get('/admin/users/delete/1', function () {
    return "Admin Page";
});

Route::get('/admin/dashboard', function () {
    return "Admin Dashboard";
});

Route::prefix('/admin')->group(function (){
    Route::prefix('/users')->name('users.')->group(function(){
        Route::get('/update',function(){
        })->name('update');
        Route::get('/create',function(){
        })->name('create');
        Route::get('/delete',function(){
        })->name('delete');

    });
});

Route::get('/dashboard',function (){
    //$cars = (object)

    return route('users.update');
});

Route::fallback(function(){
    return "<h1> PAGE NOT FOUND <h1>";
});

// Route::get('/users/update/{id
// }',function ($id){
//     //updating user record...
//     return "User Updated for ID: ".$id;
// });

// Route::get('/request')(function(Request $request){
//     dd($request->query('name'));
// }); 

// Route::get('/work-experience/{company_name}',function($company_name){
//     return "</ul> SN Aboitiz, Sr System Specialist, Jan 2023 to Present </ul>";
// });

Route::get('/work-experiences',[UserController::class, 'workExperiences'])->name('work experiences');

