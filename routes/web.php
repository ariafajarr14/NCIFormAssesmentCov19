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
Route::get('/', 'App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin')->name('post.login')->middleware('guest');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

//Register
Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('register')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\AuthController@postregister')->name('post.register')->middleware('guest');

//Dashboard
Route::get('/dashboard/home', 'App\Http\Controllers\DashboardController@index')->middleware('auth');
Route::get('/dashboard/formhistory', 'App\Http\Controllers\DashboardController@formhistory')->middleware('auth');
Route::get('/dashboard/formassesment', 'App\Http\Controllers\DashboardController@formassesment')->middleware('auth');
Route::get('/dashboard/temperature', 'App\Http\Controllers\DashboardController@temperature')->middleware('auth');
Route::get('/dashboard/dashboard_admin', 'App\Http\Controllers\DashboardController@temperature')->middleware('auth');


/**
 * 
 * Route::get('/dashboard/home', function () {
 * return view('/dashboard/home');
 * });
*/

