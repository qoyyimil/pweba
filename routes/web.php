<?php

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

// buat ngeprint pake (::)
// Route::get("publish", target) --> get itu functionnya
// '/' itu halaman utama
// kalo bikin variabel pake $
// kalo mau jalanin di linknya ketik /publish nya. contoh 'http://127.0.0.1:8000/jumlah'

Route::get('/', function () {
    return view('welcome');
});

Route::get('jumlah', function () {
    $hasil = 2 + 3;
    return "Hasil Penjumlahan = " . (string)$hasil;
});

Route::get('halo', function () {
    return "Selamat Datang di Situs Web";
});

// pwebA
Route::get('hello.blade.php', function () {
    return view('hello');
});

Route::get('javascript.blade.php', function () {
    return view('javascript');
});

Route::get('link.blade.php', function () {
    return view('link');
});

Route::get('responsive.blade.php', function () {
    return view('responsive');
});

Route::get('style.blade.php', function () {
    return view('style');
});

Route::get('form.blade.php', function () {
    return view('form');
});

// pwebA tugas
Route::get('linktree.blade.php', function () {
    return view('linktree');
});

Route::get('layout.blade.php', function () {
    return view('layout');
});

Route::get('carousel.blade.php', function () {
    return view('carousel');
});

Route::get('coba-controller', 'App\Http\Controllers\CobaController@index'); //gapake 'function' lagi soalnya di cobacontroller udah ada functionnya
                                                                            //yang dimasukin ke bagian function adalah namespace yang ada di file CobaController.php

Route::get('view-controller', 'App\Http\Controllers\CobaController@viewController');

Route::get('view-jam/{jam}', 'App\Http\Controllers\CobaController@showjam');

Route::get('formulir', 'App\Http\Controllers\CobaController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\CobaController@proses');

Route::get('/blog', 'App\Http\Controllers\CobaController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\CobaController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\CobaController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@viewPegawai');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
