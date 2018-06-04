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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function() {
        return 'ini Halaman Admin';
    });
    Route::get('/admin1', function() {
        return 'Ini halaman admin1';    
    });
    Route::get('/admin2', function() {
        return 'Ini halaman Admin2';
    });
});

Route::group(['prefix' => 'manager'], function() {
    Route::get('/', function() {
        return 'Ini halaman manager';
    });
    Route::get('/manager_keuangan', function() {
        return 'Ini halaman Manager Keuangan';
    });
    Route::get('/manager_manager', function() {
        return 'Ini Halaman Manager Manager';
    });
});

Route::group(['prefix' => 'karyawan'], function() {
    Route::get('/', function() {
        return 'Ini Halaman Karyawan';
    });
    Route::get('/karyawan1', function() {
        return 'Ini halaman Karyawan';
    });
    Route::get('/karyawan2', function() {
        return 'Ini Halaman Karyawan';
    });
});

Route::get('cek', function(){
    return view('layouts.admin');
});

Route::resource('merk', 'MerkController');
Route::resource('tipe', 'TipeController');