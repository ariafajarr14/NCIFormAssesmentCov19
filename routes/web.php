<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard/home', function () {
    return view('/dashboard/home');
});

Route::get('/dashboard/formhistory', function () {
    return view('/dashboard/formhistory');
});

Route::get('/dashboard/formassesment', function () {
    return view('/dashboard/formassesment');
});

Route::get('/dashboard/formassesment', function () {
    return view('/dashboard/formassesment');
});

Route::get('/dashboard/temperature', function () {
    return view('/dashboard/temperature');
});

Route::get('/layout/master', function () {
    return view('/layout/master');
});