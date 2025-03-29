<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        // $cars = (object) [
        //     'brand' => "honda",
        //     "color" => "red"
        // ];
        // return $cars->brand;

        return route('admin.users.update');
    });
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/create', function () {
            return "Admin Users Create";
        })->name('create'); /* admin.users.create */
        Route::get('/update', function () {
            return "Admin Users Update";
        })->name('update');
        // Route::redirect('/update', '/create')->name('update');
        Route::get('/delete', function () {
            return "Admin Users Delete";
        })->name('delete');
    });
});

Route::get('users/update/{id}', function ($id) {
    return "User updated for id: $id";
});


ROute::get('request', function (Request $request) {
    // dd($request->query('name'));
    dd($request->all());
});


// Route::get('/work-experience', function (Request $request) {
  
//     $data = [
//         'Amazon' => [
//             'role' => 'Software Engineer',
//             'duration' => 'January 2021 to December 2025'
//         ],
//         'Netflix' => [
//             'role' => 'System Designer',
//             'duration' => 'January 2021 to December 2025'
//         ],
//         'Google' => [
//             'role' => 'General Manager',
//             'duration' => 'January 2021 to December 2025'
//         ],
//     ];

//     $company = $request->company ?? "No Company found";

//     if (isset($data[$company])) {
//         $role = $data[$company]['role'];
//         $duration = $data[$company]['duration'];
//     } else {
//         $role = "No Company found to display role";
//         $duration = "No Company found to display duration";
//     }

//     return "
//     <ul>
//         <li><b>Company: </b>$company</li>
//         <li><b>Role: </b>$role</li>
//         <li><b>Duration: </b>$duration</li>
//     </ul>
//     ";
// });


Route::get('/work-experiences', [UserController::class, 'workExperiences'])->name('work-experiences');

Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::post('/register-user', [RegisterController::class, 'register'])->name('register-user');
Route::post('/login-user', [RegisterController::class, 'login'])->name('login-user');

Route::view('/','welcome')->name('home');

Route::get('/logout', function() {
    Auth::logout();
});