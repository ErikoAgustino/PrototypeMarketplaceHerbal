<?php

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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return redirect(route('login'));
});
Route::get('/starter', function () {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});


Route::get('/obat', 'ObatController@index')->name("obatList");
Route::post('/obat/store', 'ObatController@store')->name("obatSave");
Route::get('/obat/create', 'ObatController@create')->name('obatForm');
Route::post('/obat/edit/{obat}', 'ObatController@edit')->name('obatEdit');
Route::get('/obat/edit/{obat}', 'ObatController@update')->name('obatUpdate');
Route::get('/obat/delete/{obat}', 'ObatController@destroy')->name('obatDelete');

Route::get('/obatBelanja', "obatBelanjaController@index")->name('obatBelanjaList');
Route::get('/obatBelanja/store/{obatBelanja}', "obatBelanjaController@store")->name('obatBelanja');

Route::get('/statusBelanja', "StatusBelanjaController@index")->name('statusBelanjaList');

Route::get('/statusPenjualan', "StatusPenjualanController@index")->name('statusPenjualanList');
Route::get('/statusPenjualan/update/{penjualan}', "StatusPenjualanController@update")->name('updateStatusPenjualan');
