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

	
Route::get('/halaman/{page}', function ($page) {
    return "Kamu sedang mengakses halaman ".$page;
});

Route::get('/index', function () {
	echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});
Route::get('/create', function () {
	echo "Route diakses menggunakan nama";
})->name('create');


Route::get('/edit/{nama}', function ($nama) {
	echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');

//menambah route di app/http/controller/produkController.php
Route::get('/produk', 'produkController@index');