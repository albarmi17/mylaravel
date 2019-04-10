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
/*localhost:8000/show/1*/
Route::get('/show/{id}', function ($id) {
echo "Nilai Parameter Adalah ".$id;
});
/*http://localhost:8000/show/albar*/
Route::get('/show/{id?}', function ($id=1) {
echo "Nilai Parameter Adalah ".$id;
});

/*localhost:8000/edit/albar
albar adalah contoh nama */
Route::get('/edit/{nama}', function ($nama) {
echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');

/*localhost:8000/index*/
Route::get('/index', function () {
echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

/*localhost:8000/create*/
Route::get('/create', function () {
echo "Route diakses menggunakan nama";
})->name('create');

/*localhost:8000/produkk*/
Route::get('/produk', 'produkController@index');
Route::resource('/produk', 'produkController');

/*localhost:8000/produk/show*/
Route::get('/produk/show', 'produkController@show');

/*localhost:8000/halaman*/
Route::get('/halaman',function(){
$title = 'Harry Pooter';
$konten = 'harry potter and the deathly hallows: part 2';
return view('konten.halaman',compact('title','konten'));
});

/*localhost:8000/pelanggan*/
Route::get('/pelanggan', 'pelangganController@index');




