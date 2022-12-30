<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\CommercialController;

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


Route::controller(AuthenticateController::class)->group(function () {

    Route::get('login', 'login')->name('login');

    Route::get('signup', 'register')->name('signup');

    Route::post('validate_signup', 'validate_signup')->name('authenticate.validate_signup');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_login', 'validate_login')->name('authenticate.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');
});


Route::get('/client/profile', function () {
    return view('/client/profile');
});

Route::get('/admin.modals', function () {
    return view('admin.modals');
});
Route::get('/admin.form_basic', function () {
    return view('admin.form_basic');
});

Route::get('/admin.form_avancé', function () {
    return view('admin.form_avancé');
});
Route::get('/admin.edit', function () {
    return view('admin.edit');
});

Route::get('/test', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/admin.prospect', [
    CommercialController::class,
    "prospect"
]);

Route::get('/admin.client', [
    CommercialController::class,
    "client"
]);

Route::get('/admin.opportunité', [
    CommercialController::class,
    "opportunite"
]);

Route::get('/admin.colors', function () {
    return view('admin.colors');
});

Route::get('/admin.login', function () {
    return view('admin.login');
});

Route::get('/admin.page_blanc', function () {
    return view('admin.page_blanc');
});


Route::get('/admin.charts', function () {
    return view('admin.charts');
});
Route::get('{id_client}/edit', [ClientConntroller::class , 'edit']);

Route::get('/admin.produit', function () {
    return view('admin.produit');
});


Route::get('/admin.edit', function () {
    return view('admin.edit');
});