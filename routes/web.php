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
    return view('index');
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
Route::get('/layout.index', function () {
    return view('layout.index');
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





