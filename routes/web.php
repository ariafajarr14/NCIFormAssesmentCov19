<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/layout/master', function () {
    return view('/layout/master');
});

//Login
Route::get('/', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::get('/register', function () {
    return view('register');
});

//Dashboard
Route::get('/dashboard/home', 'App\Http\Controllers\DashboardController@index')->middleware('auth');
Route::get('/dashboard/formhistory', 'App\Http\Controllers\DashboardController@formhistory')->middleware('auth');
Route::get('/dashboard/formassesment', 'App\Http\Controllers\DashboardController@formassesment')->middleware('auth');
Route::get('/dashboard/temperature', 'App\Http\Controllers\DashboardController@temperature')->middleware('auth');


Route::get('/dashboard/dashboard_admin', function () {
     return view('/dashboard/dashboard_admin');
     });
/**
 * 
 * Route::get('/dashboard/home', function () {
 * return view('/dashboard/home');
 * });
*/

