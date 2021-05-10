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


Route::get('/', 'App\Http\Controllers\basile\LivreController@indexLivre');

// routes livres
Route::get('/liste_livre', 'App\Http\Controllers\basile\LivreController@index');
Route::get('/ajout_livre', 'App\Http\Controllers\basile\LivreController@create');
Route::get('/details-livre/{id}', 'App\Http\Controllers\basile\LivreController@show');
Route::post('/save_livre', 'App\Http\Controllers\basile\LivreController@store');
Route::get('/update-livre/{id}', 'App\Http\Controllers\basile\LivreController@edit');
Route::post('/update_livre/{id}', 'App\Http\Controllers\basile\LivreController@update');
Route::get('/delete-livre/{id}', 'App\Http\Controllers\basile\LivreController@destroy');

// routes clients
Route::get('/liste_client', 'App\Http\Controllers\basile\ClientController@index');
Route::get('/ajout_client', 'App\Http\Controllers\basile\ClientController@create');
Route::get('/details-client/{id}', 'App\Http\Controllers\basile\ClientController@show');
Route::post('/save_client', 'App\Http\Controllers\basile\ClientController@store');
Route::get('/update-client/{id}', 'App\Http\Controllers\basile\ClientController@edit');
Route::post('/update_client/{id}', 'App\Http\Controllers\basile\ClientController@update');
Route::get('/delete-client/{id}', 'App\Http\Controllers\basile\ClientController@destroy');

// routes categories
Route::get('/liste_categorie', 'App\Http\Controllers\basile\CategoryController@index');
Route::get('/ajout_categorie', 'App\Http\Controllers\basile\CategoryController@create');
Route::get('/count', 'App\Http\Controllers\basile\CategoryController@count');
Route::get('/details-categorie/{id}', 'App\Http\Controllers\basile\CategoryController@show');
Route::post('/save_categorie', 'App\Http\Controllers\basile\CategoryController@store');
Route::get('/update-categorie/{id}', 'App\Http\Controllers\basile\CategoryController@edit');
Route::post('/update_categorie/{id}', 'App\Http\Controllers\basile\CategoryController@update');
Route::get('/delete-categorie/{id}', 'App\Http\Controllers\basile\CategoryController@destroy');

// routes prets
Route::get('/liste_pret', 'App\Http\Controllers\basile\PretController@index');
Route::get('/ajout_pret', 'App\Http\Controllers\basile\PretController@create');
Route::get('/details/{id}', 'App\Http\Controllers\basile\PretController@show');
Route::post('/save_pret', 'App\Http\Controllers\basile\PretController@store');
Route::get('/update/{id}', 'App\Http\Controllers\basile\PretController@edit');
Route::post('/update_pret/{id}', 'App\Http\Controllers\basile\PretController@update');
Route::get('/delete-pret/{id}', 'App\Http\Controllers\basile\PretController@destroy');

