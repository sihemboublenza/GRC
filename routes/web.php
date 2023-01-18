<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\OpportuniteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Opp_prodController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/products', [ProduitController::class, 'list']);

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/terms', function () {
    return view('terms');
});



Route::controller(AuthenticateController::class)->group(function () {

    Route::get('login', 'login')->name('login');

    Route::get('signup', 'register')->name('signup');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_login', 'validate_login')->name('authenticate.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');
});

Route::controller(ProspectController::class)->group(function () {

Route::post('contacted', 'contacted')->name('prospect.contacted');

});



/*Route::get('/contact/profile', function () {
    return view('/contact/profile');
});*/

Route::get('/contacts/profile', 'App\Http\Controllers\AuthenticateController@validate_login')->name('contact.profile');
Route::get('contacts/{id}/editprofile', 'App\Http\Controllers\ContactController@editProfile')->name('contact.edit');
Route::put('contacts/{id}', 'App\Http\Controllers\ContactController@updateProfile')->name('contact.update');
Route::get('/contacts/contacts', 'App\Http\Controllers\ContactController@viewContacts');
Route::get('/client/{id}/mastercontact', 'App\Http\Controllers\ClientController@mastercontact')->name('client.mastercontact');
Route::get('/client/{id}/masteropportunite', 'App\Http\Controllers\ClientController@masteropportunite')->name('client.masteropportunite');
Route::get('/opportunite/{id}/masterproduit', 'App\Http\Controllers\OpportuniteController@masterproduit')->name('opportunite.masterproduit');
Route::get('/opportunite/{id}/masterproduit/create', 'App\Http\Controllers\Opp_prodController@create')->name('opportunie.produits.create');
Route::get('/prospect/{id}/transforme', 'App\Http\Controllers\ProspectController@transforme')->name('prospect.transforme');
Route::get('/contacts/opportunites', 'App\Http\Controllers\ContactController@viewOpportunites');
Route::get('/contacts/facture/{nom_opp}', 'App\Http\Controllers\ContactController@viewFacture')->name('contact.viewFacture');


Route::resource('/prospect', ProspectController::class);

Route::resource('/contact', ContactController::class);

Route::resource('/client', ClientController::class);

Route::resource('/rdv', RdvController::class);

Route::resource('/opportunite', OpportuniteController::class);

Route::resource('/produit', ProduitController::class);

Route::resource('/opportunite/produits', Opp_prodController::class);

Route::resource('/user', UserController::class);

Route::get('/laravel_google_chart', 'GoogleGraphController@index');