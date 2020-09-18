<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'RedirectController@index');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    // this page can be access if Maklumat Pengguna is not exist
    Route::get('/maklumat-pengguna', 'PageController@maklumatPengguna')->name('maklumatPengguna');

    // this page can be access ONLY IF agent Maklumat Pengguna exist
    Route::group(['middleware' => ['checkMaklumat']], function () {
        Route::get('/home', 'PageController@home')->name('home');
        Route::get('/akaun', 'PageController@akaun')->name('akaun');
        Route::get('/pembayar', 'PageController@pembayar')->name('pembayar');
        Route::get('/pembayar/tambah', 'PageController@tambahPembayar')->name('pembayar.tambah');
        Route::get('/pembayar/{uuid}', 'PageController@maklumatPembayar')->name('pembayar.maklumat');
        Route::get('/profil', 'ProfilController@index')->name('profil');
    });
});


// ======= KALKULATOR =========
Route::get('/kalkulator', 'KalkulatorController@index')->name('kalkulator');