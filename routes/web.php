<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'RedirectController@index');

Auth::routes();

Route::get('/home', 'PageController@home')->name('home');
Route::get('/maklumat-pengguna', 'PageController@maklumatPengguna')->name('maklumatPengguna');
Route::get('/akaun', 'PageController@akaun')->name('akaun');
Route::get('/pembayar', 'PageController@pembayar')->name('pembayar');
Route::get('/pembayar/tambah', 'PageController@tambahPembayar')->name('pembayar.tambah');
Route::get('/profil', 'ProfilController@index')->name('profil');


Route::get('/pembayar/kemaskini', 'PembayarController@tambahPembayar')->name('pembayar.kemaskini');
