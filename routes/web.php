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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'RedirectController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pembayar', 'PembayarController@index')->name('pembayar');
Route::get('/peribadi', 'PeribadiController@index')->name('peribadi');
Route::get('/profil', 'ProfilController@index')->name('profil');
