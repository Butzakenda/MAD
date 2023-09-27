<?php

use Illuminate\Support\Facades\Route;

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
    return view('/admin/formnew');
});

//Coach
Route::get('index/coach', 'CoachController@index')->name('coach.index');
Route::get('index/coach', 'CoachController@index')->name('coach.index');

// multimedia
Route::get('index/multimedia', 'MultimediaController@index')->name('multimedia.index');


Route::post('create/coach', 'CoachController@create')->name('coach.create');

Auth::routes();
Route::middleware(['web'])->group(function () {
    // Aquí van las rutas de autenticación
    //Register
        Route::post('registro', 'App\Http\Controllers\Auth\RegisterController@create')->name('register');
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

