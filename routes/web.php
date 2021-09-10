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

//User
Route::get('/dashboard/userlist/{id}/delete', 'App\Http\Controllers\AuthController@destroy')->name('userlist.delete')->middleware('auth');
Route::get('/dashboard/userlist', 'App\Http\Controllers\AuthController@userlist')->name('admin.userlist')->middleware('auth');

//Dashboard
Route::get('/dashboard/home', 'App\Http\Controllers\DashboardController@index')->name('user.home')->middleware('auth');
Route::get('/dashboard/dashboard_admin', 'App\Http\Controllers\DashboardController@dashboard_admin')->name('admin.dashboard')->middleware('auth');

//Form
Route::get('/dashboard/formassesment', 'App\Http\Controllers\DashboardController@formassesment')->name('user.assesment')->middleware('auth');
Route::post('/dashboard/formassesment', 'App\Http\Controllers\FormController@store')->name('form.create')->middleware('auth');
Route::get('/dashboard/formhistory', 'App\Http\Controllers\FormController@index')->name('form.view')->middleware('auth');
Route::get('/dashboard/details', 'App\Http\Controllers\TemperatureController@details')->name('user.viewdetailsassesment')->middleware('auth');
Route::get('/dashboard/formthanks', 'App\Http\Controllers\DashboardController@dashboard_formthanks')->name('dashboard_formthanks')->middleware('auth');

//Temperature
Route::get('/dashboard/temperature', 'App\Http\Controllers\TemperatureController@index')->name('temperature.view')->middleware('auth');
Route::post('/dashboard/temperature', 'App\Http\Controllers\TemperatureController@store')->name('temperature.create')->middleware('auth');
Route::get('/dashboard/temperature/{id}/delete', 'App\Http\Controllers\TemperatureController@destroy')->name('temperature.delete')->middleware('auth');
/**
 * 
 * Route::get('/dashboard/home', function () {
 * return view('/dashboard/home');
 * });
*/

