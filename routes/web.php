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
    return view('layout');
});
Route::get('/log-in', function () {
    return view('log-in');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/privancy', function () {
    return view('privacy');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/client/profile', function () {
    return view('/client/profile');
});



