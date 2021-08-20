<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', 'Auth\LoginController@adminLogin')->name('adminLogin');


// ROUTE FOR ADMIN ONLY
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin', 'active', 'check.session'])->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('profile', 'AdminController@profile')->name('profile');
    Route::put('updateProfile', 'AdminController@updateProfile')->name('updateProfile');

    /* Master Data */

    // Kelurahan
    Route::resource('kelurahan', 'KelurahanController');

    // Articles
    Route::resource('article', 'ArticleController');

    // Locations
    Route::resource('location', 'LocationController');

    // History Dropper
    Route::resource('history/request', 'WasteController');
    Route::post('history/{id}', 'WasteController@reject')->name('history.reject');

    Route::resource('history/accepted', 'WasteAcceptedController');
    Route::resource('history/rejected', 'WasteRejectedController');

    // Merchandise
    Route::resource('merchandise', 'MerchandiseController');
    Route::post('merchandise/change', 'MerchandiseController@change')->name('merchandise.change');

    // Statictics
    Route::resource('statistics/homepage', 'HomepageController');
    Route::resource('statistics/bycategory', 'CollectionByCategoryController');
    Route::resource('statistics/year', 'CollectionPerYearController');

    // Event
    Route::resource('event', 'EventController');
    Route::post('event/change', 'EventController@change')->name('event.change');

    // Users
    Route::resource('users', 'UserController');

    /* Reference Data */

    // Kecamatan
    Route::resource('kecamatan', 'KecamatanController');

    // Agama
    Route::resource('agama', 'AgamaController');

    // Warga Negara
    Route::resource('warga-negara', 'WargaNegaraController');

    // Pendidikan
    Route::resource('pendidikan', 'PendidikanController');

    // Status Perkawinan
    Route::resource('status-perkawinan', 'StatusPerkawinanController');

    // Legalitas Perkawinan
    Route::resource('legalitas-perkawinan', 'LegalitasPerkawinanController');

    // Pekerjaan
    Route::resource('pekerjaan', 'PekerjaanController');

    // Suku Bangsa
    Route::resource('suku-bangsa', 'SukuBangsaController');

    // Negara
    Route::resource('negara', 'NegaraController');

    // Tinggal Sementara WNA
    Route::resource('tinggal-sementara', 'TinggalSementaraWNAController');

    // Kunjungan WNA
    Route::resource('kunjungan', 'KunjunganWNAController');
});
