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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\Frontend\HomeController@index');

Route::get('/test', 'App\Http\Controllers\Frontend\TestController@index');*/

Route::get('/', function () {
    return view('index');
});
Route::get('/homepage', 'HomepageController@index');
Route::get('/articolo/{id}', 'HomepageController@getArticoloById');
Route::get('/articoli/add', 'HomepageController@add')->middleware(['auth'])->name('homepage');
Route::get('/homepage2', 'Homepage2Controller@index');
Route::post('/articoli/add', 'HomepageController@create');

/* Route::get('/prodotti', 'ProdottiController@index')->middleware(['auth'])->name('prodotti');
Route::get('/prodotti-categorie', 'ProdottiController@getProdottiByCategorie');
Route::get('/prodotti/add', 'ProdottiController@add'); -----------
Route::post('/prodotti/add', 'ProdottiController@create');  ----------------
Route::get('/prodotto/{id}', 'ProdottiController@getProdottoById');
Route::get('/utenti', 'UtentiController@index');   -------------
Route::get('/utente/{id}', 'UtentiController@getUtenteById');--------------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';



