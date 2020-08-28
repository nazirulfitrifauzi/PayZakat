<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'RedirectController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pembayar', 'PembayarController@index')->name('pembayar');
Route::get('/pembayar/tambah', 'PembayarController@tambahPembayar')->name('pembayar.tambah');
Route::get('/pembayar/kemaskini', 'PembayarController@tambahPembayar')->name('pembayar.kemaskini');
Route::get('/profil', 'ProfilController@index')->name('profil');

// ======= PERIBADI =========
Route::get('/pengguna/peribadi', 'PenggunaController@peribadi')->name('pengguna.peribadi');
Route::get('/pengguna/alamat', 'PenggunaController@alamat')->name('pengguna.alamat');
Route::get('/pengguna/kebajikan', 'PenggunaController@kebajikan')->name('pengguna.kebajikan');
