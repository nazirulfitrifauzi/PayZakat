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
        Route::get('/pembayar', 'PageController@pembayarsenarai')->name('pembayar.senarai');
        Route::get('/pembayar/tambah', 'PageController@pembayartambah')->name('pembayar.tambah');
        Route::get('/pembayar/muat-naik-pukal', 'PageController@pembayarpukal')->name('pembayar.pukal');
        Route::get('/asnaf/muat-naik-pukal', 'PageController@asnafpukal')->name('asnaf.pukal');
        Route::get('/pembayar/{uuid}', 'PageController@pembayarmaklumat')->name('pembayar.maklumat');
        Route::get('/asnaf', 'PageController@asnafSenarai')->name('asnaf.senarai');
        Route::get('/asnaf/tambah', 'PageController@asnafTambah')->name('asnaf.tambah');
        Route::get('/asnaf/{uuid}', 'PageController@asnafMaklumat')->name('asnaf.maklumat');
        Route::get('/profil', 'ProfilController@index')->name('profil');
        Route::get('/bayar', 'BayarController@index')->name('bayar');
        Route::get('/bayar/resit', 'BayarController@resit')->name('bayar.resit');
    });

    // ADMIN
    Route::get('/admin/senarai-pengguna', 'PageController@adminSenaraiPengguna')->name('admin.userList');
    Route::get('/admin/senarai-pengguna-excel', 'ExportController@adminSenaraiPenggunaExcel')->name('admin.userListExcel');
    Route::get('/admin/senarai-pengguna-pdf', 'ExportController@adminSenaraiPenggunaPdf')->name('admin.userListPdf');

    Route::get('/admin/senarai-menunggu', 'PageController@adminSenaraiMenunggu')->name('admin.pendingAgent');
    Route::get('/admin/senarai-ejen', 'PageController@adminSenaraiEjen')->name('admin.agentList');
    Route::get('/admin/senarai-ditolak', 'PageController@adminSenaraiDitolak')->name('admin.rejectedAgent');
    Route::get('/admin/senarai-pembayar-zakat', 'PageController@adminSenaraiPembayarZakat')->name('admin.pembayarZakat');
    Route::get('/admin/senarai-penerima-zakat', 'PageController@adminSenaraiPenerimaZakat')->name('admin.penerimaZakat');
    Route::get('/admin/nisab', 'PageController@adminNisab')->name('admin.nisab');
});


// ======= KALKULATOR =========
Route::get('/kalkulator', 'KalkulatorController@index')->name('kalkulator');
