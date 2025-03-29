<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');

//     // return "<h1 style='color: red'>
//     // Hello Laravel </h1>";
//     return "<script> alert('Hello Laravel') </script>";
// });

Route::get('/admin/users/update/1', function () {
    return "Admin Page";
});

Route::get('/admin/users/create', function () {
    return "Admin Page";
});

Route::get('/admin/users/delete', function () {
    return "Admin Page";
});

Route::get('/admin/dashboard', function () {
    return "Admin Dashboard";
});

Route::prefix('/admin')->group(function () {
    Route::prefix('/users')->name('users.')->group(function () {
        Route::prefix('/config')->group(function () {
            //
        });

        // Route::get('/update', function () {
        //     //
        // })->name('update');
        Route::redirect('/update', '/create')
            ->name('update');

        Route::get('/create', function () {
            //
        })->name('create');

        Route::get('/delete', function () {
            //
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

Route::fallback(function () {
    return "<h1> PAGE NOT FOUND </h1>";
});

Route::get('/users/update/{id}/{name?}', function ($id, $name = "John") {
    // updating user record...
    return "User Updated for ID: " . $id . ' ' . $name;
})->where('id', '[0-9]+');

// Route::get('/users/update/2', function () {
//     // updating user record...
//     return "User Updated";
// });

// Route::get('/users/update/3', function () {
//     // updating user record...
//     return "User Updated";
// });


// Route::get('/profile', function () {
//     //
// })->name('show');

// Route::post('/profile', function () {
//     //
// })->name('update');

// Route::match(['get', 'post'], '/profile', function (Request $request) {
//     if ($request->isMethod('get')) {
//         // get
//     } else {
//         // post
//     }
// });

Route::get('/request', function (Request $request) {
    // dd($request->query('name', 'John'));
    // dd($request->all());
    dd($request->name);
});

Route::get('/work-experiences', [UserController::class, 'workExperiences'])
    ->name('work-experiences');

// Route::get('/register', function () {
//     return view('register');
// });

Route::view('/register', 'register')->name('show.register');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::view('/', 'welcome')->name('home');

Route::view('/login', 'login')->name('show.login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', function () {
    Auth::logout();
});
