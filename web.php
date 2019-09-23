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
    //return view('welcome');
    echo "Selamat Datang Widya";
});

Route::get('/satu', function () {
    //return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    //return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    //return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    //return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    //return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight";
});

Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine";
});

Route::get('/sepuluh', function () {
    //return view('welcome');
    echo "ten";
});

//2. manggil view
Route::get('/sepuluh', function(){
  return view('telo');
  //lokasi view
});

//3. manggil controller
Route::get('/usang', 'project1@index');
/* file controller namaya usangController
  nama url usang
  index nama functionnya
*/
Route::get('/jeruk', 'usangController@godog');
Route::get('/terong', 'kentang@sandal');

Route::get('/nemplate', function() {
  return view('template');
  //lokasi view
});
//tambahkan ini pada routemu
Route::resource('/kontak', 'Kontak');
Route::get('/', function(){
  return view('index');
});

Route::get('/CleaningService', 'Cleaner@tables');

Route::get('login','Login@index');
Route::post('/login/cek','Login@cek');
Route::get('/logout','Login@logout');
Route::get('/','Dashboard@index');

Route::resource('/kabupaten','Kabupaten');

Route::resource('/penjualan','Penjualan');
Route::resource('/barang','Barang');
Route::resource('/pembelian','Pembelian');
