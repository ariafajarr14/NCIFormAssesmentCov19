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

Route::get('/formquest/formsatu', function () {
    return view('/formquest/formsatu');
});
Route::get('/formquest/formdua', function () {
    return view('/formquest/formdua');
});
Route::get('/formquest/formtiga', function () {
    return view('/formquest/formtiga');
});
Route::get('/formquest/formempat', function () {
    return view('/formquest/formempat');
});
Route::get('/formquest/formlima', function () {
    return view('/formquest/formlima');
});
Route::get('/formquest/formenam', function () {
    return view('/formquest/formenam');
});
Route::get('/formquest/formthanks', function () {
    return view('/formquest/formthanks');
});