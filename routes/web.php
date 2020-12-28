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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SuratController@index');
Route::get('/data-kirim', 'SuratController@list_data_kirim')->name('data_kirim');
Route::get('/data-jabatan/{id}', 'SuratController@list_jabatan')->name('data_jabatan');
Route::get('/data-pegawai/{id}', 'SuratController@list_pegawai')->name('data_pegawai');
Route::post('/data-kirim/store', 'SuratController@store');
Route::post('/data-kirim/destroy/{id}', 'SuratController@destroy');
