<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'RedirectController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pembayar', 'PembayarController@index')->name('pembayar');
Route::get('/profil', 'ProfilController@index')->name('profil');

// ======= PERIBADI =========
Route::get('/pengguna/peribadi', 'PenggunaController@peribadi')->name('pengguna.peribadi');
Route::get('/pengguna/alamat', 'PenggunaController@alamat')->name('pengguna.alamat');
Route::get('/pengguna/keluarga', 'PenggunaController@keluarga')->name('pengguna.keluarga');
Route::get('/pengguna/keluarga/tambah', 'PenggunaController@tambahkeluarga')->name('pengguna.keluarga.tambah');
Route::get('/pengguna/kebajikan', 'PenggunaController@kebajikan')->name('pengguna.kebajikan');
