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

Route::group(['middleware' => ['auth','checkRole:admin']], function(){
    //User
    Route::get('/dashboard/userlist/{id}/delete', 'App\Http\Controllers\AuthController@destroy')->name('userlist.delete');
    Route::get('/dashboard/userlist', 'App\Http\Controllers\AuthController@userlist')->name('admin.userlist');
    //Dashboard
    Route::get('/dashboard/home', 'App\Http\Controllers\DashboardController@index')->name('user.home');
    Route::get('/dashboard/dashboard_admin', 'App\Http\Controllers\DashboardController@dashboard_admin')->name('admin.dashboard');
    //Form
    Route::get('/dashboard/formhistory', 'App\Http\Controllers\FormController@index')->name('form.view');
    Route::get('/dashboard/formhistory/{id}/delete', 'App\Http\Controllers\FormController@destroy')->name('form.delete');

    //Temperature
    Route::get('/dashboard/temperature', 'App\Http\Controllers\TemperatureController@index')->name('temperature.view');
    Route::get('/dashboard/temperature/{id}/delete', 'App\Http\Controllers\TemperatureController@destroy')->name('temperature.delete');
});

Route::group(['middleware' => ['auth','checkRole:employee']], function(){
    //Dashboard
    Route::get('/dashboard/home', 'App\Http\Controllers\DashboardController@index')->name('user.home');
    //Form
    Route::get('/dashboard/formassesment', 'App\Http\Controllers\DashboardController@formassesment')->name('user.assesment');
    Route::post('/dashboard/formassesment', 'App\Http\Controllers\FormController@store')->name('form.create');
    Route::get('/dashboard/details', 'App\Http\Controllers\TemperatureController@details')->name('user.viewdetailsassesment');
    Route::get('/dashboard/formthanks', 'App\Http\Controllers\DashboardController@dashboard_formthanks')->name('dashboard_formthanks');
    //Temperature
    Route::post('/dashboard/temperature', 'App\Http\Controllers\TemperatureController@store')->name('temperature.create');
    Route::get('/dashboard/detailssuhu', 'App\Http\Controllers\TemperatureController@detailssuhu')->name('user.viewdetailsuhu');

});

/**
 * 
 * Route::get('/dashboard/home', function () {
 * return view('/dashboard/home');
 * });
*/
