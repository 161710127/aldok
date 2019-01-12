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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware'=>['auth','role:admin']],function () {

    Route::resource('table_barang', 'TableBarangController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('gambar', 'GambarController');
    Route::resource('kategoriartikels', 'KategoriartikelsController');
    Route::resource('artikel', 'ArtikelController');
});

Route::get('/', 'FrontendController@index');
Route::get('tentang', 'FrontendController@tentang');
Route::get('service', 'FrontendController@service');
Route::get('produk', 'FrontendController@produk');
Route::get('kontak', 'FrontendController@kontak');
Route::get('galeri', 'FrontendController@galeri');
Route::get('artikel', 'FrontendController@artikel');
Route::get('single/{produk}', 'FrontendController@single');
