<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    // return view('welcome');
    return "Hello World";
});



Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->name('user.')->group(function () {
        Route::get('/create', function () {
            return "Create User";
        })->name('create');
        Route::get('/edit', function () {
            return "Edit User";
        })->name('edit');
        Route::get('/delete', function () {
            return "Delete User";
        })->name('delete');
    });
});

Route::fallback(function () {
return "<h1>Page Not Found</h1>";
});


Route::get('/users/update/{id}

', function ($id) {
    //update user

    return "Update User". $id;
});

Route::get('/request', function (Request $request) {
    // dd($request->query('name', 'default'));
   
});

Route::get('/work-experiences',[UserController::class, 'workExperiences'])
->name('work-experiences');
