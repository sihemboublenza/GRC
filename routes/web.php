<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/terms', function () {
    return view('terms');
});


Route::controller(SampleController::class)->group(function(){

    Route::get('login', 'login')->name('login');

    Route::get('signup', 'register')->name('signup');

    Route::post('validate_signup', 'validate_signup')->name('sample.validate_signup');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');
});


Route::get('/client/profile', function () {
    return view('/client/profile');
});

Route::get('/layout.modals', function () {
    return view('layout.modals');
});
Route::get('/layout.form_basic', function () {
    return view('layout.form_basic');
});

Route::get('/layout.form_avancé', function () {
    return view('layout.form_avancé');
});

Route::get('/layout.prospect', function () {
    return view('layout.prospect');
});

Route::get('/layout.colors', function () {
    return view('layout.colors');
});

Route::get('/layout.login', function () {
    return view('layout.login');
});

Route::get('/layout.page_blanc', function () {
    return view('layout.page_blanc');
});


Route::get('/layout.charts', function () {
    return view('layout.charts');
});

Route::get('/layout.opportunité', function () {
    return view('layout.opportunité');
});

Route::get('/layout.produit', function () {
    return view('layout.produit');
});