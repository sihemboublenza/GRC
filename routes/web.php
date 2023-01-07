<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\OpportuniteController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/signup', function () {
    return view('signup');
});


Route::controller(AuthenticateController::class)->group(function () {

    Route::get('login', 'login')->name('login');

    Route::get('signup', 'register')->name('signup');

    Route::post('validate_signup', 'validate_signup')->name('authenticate.validate_signup');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_login', 'validate_login')->name('authenticate.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');
});


Route::get('/contact/list', function () {
    return view('/contact/list');
});
/*Route::get('/contact/profile', function () {
    return view('/contact/profile');
});*/

Route::get('/contact/profile', 'App\Http\Controllers\AuthenticateController@validate_login');

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

Route::resource('/produit', ProduitController::class);

Route::resource('/contact', ContactController::class);

Route::resource('/client', ClientController::class);

Route::resource('/rdv', RdvController::class);

Route::resource('/opportunite', OpportuniteController::class);

Route::resource('/user', UserController::class);
