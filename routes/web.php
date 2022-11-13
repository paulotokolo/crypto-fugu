<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUser;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/exchange', function () {
    return view('settings-account');
})->middleware('auth');

Route::get('/accounts', function () {
    return view('accounts');
})->middleware('auth');

Route::get('/settings', function () {
    return view('settings');
})->middleware('auth');

Route::get('/settings-account', function () {
    return view('settings-account');
})->middleware('auth');

Route::get('/history', function () {
    return view('history');
})->middleware('auth');

Route::post('create', [CreateUser::class, 'create']);

Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LogoutController::class, 'logout'])->middleware('auth');

Route::get('add-card', function () {
    return view('add-card');
})->middleware('auth');