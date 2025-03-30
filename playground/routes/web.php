<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
//     //can return HTML, javascript
//     // return "";
// });

// // // //route is a class
// // // //route::prefix
// Route::get('/admin', function(){
//     return "Admin Page";
// });

Route::prefix('/admin')->group(function () {
    Route::prefix('/users')->name('users.')->group(function () {
        Route::prefix('/config')->group(function () {
            //
        });

        // Route::get('/update', function () {
        //     //
        // })->name('update');
        // Route::redirect('/update', '/create')
        //     ->name('update');

        Route::get('/create', function () {
            return "create";
        })->name('create');

        Route::get('/delete', function () {
            return "delete";
        })->name('delete');
    });

    Route::get('/dashboard', function () {
        // $cars = (object)[
        //     "brand" => "Honda",
        //     "color" => "red"
        // ];

        // return $cars->color;

        return redirect()->route('users.update');
    });
});

Route::get('/work-experiences', [UserController::class, 'workExperiences'])->name('work-experiences');

Route::view('/register', 'register');