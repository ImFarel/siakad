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

Route::get('/', function () { return view('welcome'); })->name('back');

Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
Route::group( [ 'prefix' => 'dashboard' ] , function() {

  //mahasiswa
  Route::get('/mahasiswa','MahasiswaController@index')->name('mahasiswa.index');
  Route::post('/mahasiswa/create','MahasiswaController@create')->name('mahasiswa.create');
  Route::get('/mahasiswa/store','MahasiswaController@store')->name('mahasiswa.store');
  Route::get('/mahasiswa/edit/{id}','MahasiswaController@edit')->name('mahasiswa.edit');
  Route::get('/mahasiswa/update/{id}','MahasiswaController@update')->name('mahasiswa.update');
  Route::get('/mahasiswa/destroy/{id}','MahasiswaController@destroy')->name('mahasiswa.destroy');

});



Auth::routes();
Route::get('/welcome', 'HomeController@index')->name('welcome');
