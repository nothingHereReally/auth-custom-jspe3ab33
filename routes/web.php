<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',
    [AuthController::class, 'showRegistrationform']
    )->name('register');
Route::post('/register',
    [AuthController::class, 'register']
    );

Route::get('/login',
    [AuthController::class, 'showLoginform']
    )->name('login');
Route::post('/login',
    [AuthController::class, 'login']
    );

Route::get('/logout',
    [AuthController::class, 'logout']
    );
Route::post('/logout',
    [AuthController::class, 'logout']
    )->name('logout');

Route::middleware('auth')->group(function(){
    Route::view('/home', 'homepage');
});
