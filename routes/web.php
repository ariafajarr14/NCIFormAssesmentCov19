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
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('post.logout');

//Register
Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('register')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\AuthController@postregister')->name('post.register')->middleware('guest');

//Dashboard
Route::get('/dashboard/home', 'App\Http\Controllers\DashboardController@index')->name('user.home')->middleware('auth');
Route::get('/dashboard/formassesment', 'App\Http\Controllers\DashboardController@formassesment')->name('user.assesment')->middleware('auth');
Route::get('/dashboard/formhistory', 'App\Http\Controllers\FormController@index')->name('form.view')->middleware('auth');
Route::get('/dashboard/temperature', 'App\Http\Controllers\DashboardController@temperature')->name('admin.temperature')->middleware('auth');
Route::get('/dashboard/dashboard_admin', 'App\Http\Controllers\DashboardController@dashboard_admin')->name('admin.dashboard')->middleware('auth');
Route::get('/dashboard/userlist', 'App\Http\Controllers\DashboardController@userlist')->name('admin.userlist')->middleware('auth');


//Form

Route::post('/dashboard/formassesment', 'App\Http\Controllers\FormController@store')->name('form.create')->middleware('auth');


/**
 * 
 * Route::get('/dashboard/home', function () {
 * return view('/dashboard/home');
 * });
*/

