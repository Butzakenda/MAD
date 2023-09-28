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

// Multimedia
Route::get('index/multimedia', 'MultimediaController@index')->name('multimedia.index');
Route::get('create/multimedia', 'MultimediaController@create')->name('multimedia.create');
Route::get('see/multimedia', 'MultimediaController@see')->name('multimedia.see');
Route::get('edit/multimedia', 'MultimediaController@editmultimedia')->name('multimedia.edit');

// Appointments
Route::get('list/appointments', 'AppointmentsController@list')->name('appointment.list');
Route::get('edit/appointments', 'AppointmentsController@editappointment')->name('appointment.edit');

//Coach
Route::get('index/coach', 'CoachController@index')->name('coach.index');
Route::post('create/coach', 'CoachController@create')->name('coach.create');
Route::get('list/coach', 'CoachController@showListCoach')->name('coach.list');
Route::get('schedule/coach', 'CoachController@schedule')->name('coach.schedule');
//Administrator
Route::get('index/admin', 'AdministratorController@index')->name('admin.index');
Route::post('create/admin', 'AdministratorController@create')->name('admin.create');

// Recommendations
Route::get('list/recommendations', 'RecommendationsController@list')->name('recommendation.list');
Route::get('see/recommendations', 'RecommendationsController@see')->name('recommendation.see');

// News
Route::get('list/news', 'NewsController@list')->name('new.list');
Route::get('create/news', 'NewsController@create')->name('new.create');




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

