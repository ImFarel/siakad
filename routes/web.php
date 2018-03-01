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

Auth::routes();
Route::get('/403', 'HomeController@unauthorized')->name('403');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group( [ 'prefix' => 'dashboard', 'middleware' => 'auth' ] , function() {
  //mahasiswa
  Route::get('/students','MahasiswaController@index')->name('mahasiswa.index');
  Route::get('/students/register','MahasiswaController@create')->name('mahasiswa.create');
  Route::post('/students/register/process','MahasiswaController@store')->name('mahasiswa.store');
  Route::get('/students/read/{id}','MahasiswaController@read')->name('mahasiswa.read');
  Route::get('/students/edit/{id}','MahasiswaController@edit')->name('mahasiswa.edit');
  Route::put('/students/update/{id}','MahasiswaController@update')->name('mahasiswa.update');
  Route::delete('/students/delete/{id}','MahasiswaController@destroy')->name('mahasiswa.delete');

  //dosen
  Route::get('/lecturers','DosenController@index')->name('dosen.index');
  Route::get('/lecturers/add','DosenController@create')->name('dosen.create');
  Route::post('/lecturers/add/process','DosenController@store')->name('dosen.store');
  Route::get('/lecturers/read/{id}','DosenController@read')->name('dosen.read');
  Route::get('/lecturers/edit/{id}','DosenController@edit')->name('dosen.edit');
  Route::put('/lecturers/update/{id}','DosenController@update')->name('dosen.update');
  Route::delete('/lecturers/delete/{id}','DosenController@destroy')->name('dosen.delete');

  //Users
  Route::get('/users', 'UserController@index')->name('users.index');
  Route::get('/users/add', 'UserController@add')->name('users.add');
  Route::get('/users/view/{id}', 'UserController@view')->name('users.view');
  Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
  Route::post('/users/addprocess', 'UserController@addprocess')->name('users.addprocess');
  Route::put('/users/editprocess/{id}', 'UserController@editprocess')->name('users.editprocess');
  Route::get('/users/delete/{id}', 'UserController@delete')->name('users.delete');

  // Role and Permission
  Route::get('/roles', 'RoleController@index')->name('roles.index');
  Route::get('/roles/add', 'RoleController@add')->name('roles.add');
  Route::get('/roles/edit/{id}', 'RoleController@edit')->name('roles.edit');
  Route::get('/roles/delete/{id}', 'RoleController@delete')->name('roles.delete');
  Route::post('/roles/addprocess', 'RoleController@addprocess')->name('roles.addprocess');
  Route::put('/roles/editprocess/{id}', 'RoleController@editprocess')->name('roles.editprocess');

  Route::get('/permissions/{id}', 'RoleController@permission')->name('roles.permission');
  Route::put('/permissions/editpermission/{id}', 'RoleController@editpermission')->name('roles.editpermission');
});
