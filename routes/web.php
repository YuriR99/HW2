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





Route::get('/login', "LoginController@login")->name("login");
Route::get('/logout', "LoginController@logout")->name("logout");
Route::post('/login', "LoginController@checkLogin")->name("login1");

Route::get('/register', "RegisterController@index")->name("register");
Route::post('/register', "RegisterController@create")->name("register1");

Route::get('/Query', "QueryController@Hotel");
Route::get('/Query1', "QueryController@Stanze");
Route::get('/Query2', "QueryController@Prenotazioni");
Route::get('/Query3', "QueryController@Piu_Inf");
Route::get('/Query4', "QueryController@Utente");
Route::get('/API', "QueryController@CercaH");
Route::get('/Query5', "QueryController@AggPref");
Route::get('/Query6', "QueryController@VediP");
Route::get('/Query7', "QueryController@RichiediAccettazione");
Route::get('/Query8', "QueryController@VisualizzaAccettazioni");
Route::get('/Query9', "QueryController@EliminaPref");
Route::get('/Query10', "QueryController@VotiHotels");
Route::get('/Query11', "QueryController@Votiutenti");
Route::get('/Query12', "QueryController@InviaVoto");
Route::get('/Query13', "QueryController@IdHotel");

Route::get('/home', "HomeController@index")->name('home');
Route::get('/profilo', "ProfileController@index")->name('profilo');
Route::get('/prenotazioni',"PrenotazioniController@index")->name('prenotazioni');
Route::get('/cercaHotel', "CercaHotelController@index")->name('CercaH');
Route::get('/recensioni',"RecensioniController@index")->name('recensioni');

