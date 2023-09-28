<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Coach
Route::get('index/coach', 'CoachController@index')->name('coach.index');
Route::post('create/coach', 'CoachController@create')->name('coach.create');
Route::get('list/coach', 'CoachController@showListCoach')->name('coach.list');


// multimedia
Route::get('index/multimedia', 'MultimediaController@index')->name('multimedia.index');



Auth::routes();
Route::middleware(['web'])->group(function () {
    // Aquí van las rutas de autenticación
    //Register
        Route::post('registro', 'App\Http\Controllers\Auth\RegisterController@create')->name('register');
        Route::get('registro/show', 'App\Http\Controllers\Auth\RegisterController@showRegisterForm')->name('register.show');
    //--------
    //Login
        Route::post('/login', 'Auth\LoginController@login');
        Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    //--------
    //logout
        Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    //--------
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

