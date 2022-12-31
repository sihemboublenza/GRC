<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProspectController;
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

Route::resource('/prospect', ProspectController::class);

Route::get('/admin.client', [
    CommercialController::class,
    "client"
]);

Route::get('/admin.opportunité', [
    CommercialController::class,
    "opportunite"
]);


Route::get('/admin.login', function () {
    return view('admin.login');
});


Route::get('{id}/edit', [ClientController::class , 'edit']);

Route::get('/admin.produit', function () {
    return view('admin.produit');
});


Route::get('/admin.edit', function () {
    return view('admin.edit');
});