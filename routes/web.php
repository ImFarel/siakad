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
  /*
  | M M M M     M M M M    M M M M M M M M    M M M M M M        M M       M M M    M M M              M M M M M M M M M M
  | M M  M M   M M  M M    M M       M M M    M M       M M      M M       M M M    M M M              M M M M M M M M M M
  | M M   M M M M   M M    M M       M M M    M M       M M      M M       M M M    M M M              M M M
  | M M    M M M    M M    M M       M M M    M M       M M M    M M       M M M    M M M              M M M M M M M M M M
  | M M             M M    M M       M M M    M M       M M M    M M       M M M    M M M M M M M M    M M M
  | M M             M M    M M M M M M M M    M M M M M M M M    M M M M M M M M    M M M M M M M M    M M M M M M M M M M
  |
  | M M M M     M M M M    M MM       MM M    M M M M M M M M
  | M M  M M   M M  M M    M MM       MM M    M M M M M M M M
  | M M   M M M M   M M    M MM MM MM MM M    M M M
  | M M    M M M    M M    M MM MM MM MM M    M M M M M M M M
  | M M             M M    M MM       MM M            M M M M
  | M M             M M    M MM       MM M    M M M M M M M M
  |
  */
  Route::get('/students','MahasiswaController@index')->name('mahasiswa.index');
  Route::get('/students/register','MahasiswaController@create')->name('mahasiswa.create');
  Route::post('/students/register/process','MahasiswaController@store')->name('mahasiswa.store');
  Route::get('/students/edit/{id}','MahasiswaController@edit')->name('mahasiswa.edit');
  Route::put('/students/update/{id}','MahasiswaController@update')->name('mahasiswa.update');

  Route::get('/students/attendances','AbsenMahasiswaController@index')->name('mahasiswa.absen.index');
  Route::get('/students/attendances/create','AbsenMahasiswaController@create')->name('mahasiswa.absen.create');
  Route::post('/students/attendances/process','AbsenMahasiswaController@store')->name('mahasiswa.absen.store');
  Route::get('/students/attendances/edit/{id}','AbsenMahasiswaController@edit')->name('mahasiswa.absen.edit');
  Route::put('/students/attendances/update/{id}','AbsenMahasiswaController@update')->name('mahasiswa.absen.update');

  //dosen
  Route::get('/lecturers','DosenController@index')->name('dosen.index');
  Route::get('/lecturers/add','DosenController@create')->name('dosen.create');
  Route::post('/lecturers/add/process','DosenController@store')->name('dosen.store');
  Route::get('/lecturers/edit/{id}','DosenController@edit')->name('dosen.edit');
  Route::put('/lecturers/update/{id}','DosenController@update')->name('dosen.update');

  //program studi
  Route::get('/programs','ProgstuController@index')->name('progstu.index');
  Route::get('/programs/add','ProgstuController@create')->name('progstu.create');
  Route::post('/programs/add/process','ProgstuController@store')->name('progstu.store');
  Route::get('/programs/edit/{id}','ProgstuController@edit')->name('progstu.edit');
  Route::put('/programs/update/{id}','ProgstuController@update')->name('progstu.update');

  //matkul
  Route::get('/matkuls','MatkulController@index')->name('matkul.index');
  Route::get('/matkuls/add','MatkulController@create')->name('matkul.create');
  Route::post('/matkuls/add/process','MatkulController@store')->name('matkul.store');
  Route::get('/matkuls/edit/{id}','MatkulController@edit')->name('matkul.edit');
  Route::put('/matkuls/update/{id}','MatkulController@update')->name('matkul.update');

  //tahun Ajaran Settings
  Route::get('/years','TahunAjaranController@index')->name('tahun.index');
  Route::get('/years/add','TahunAjaranController@create')->name('tahun.create');
  Route::post('/years/add/process','TahunAjaranController@store')->name('tahun.store');
  Route::get('/years/edit/{id}','TahunAjaranController@edit')->name('tahun.edit');
  Route::put('/years/update/{id}','TahunAjaranController@update')->name('tahun.update');

  //Ka Er Es (Kartu Rencana Studi)
  Route::get('/krs','KartuRencanaStudiController@index')->name('krs.index');
  Route::get('/krs/addhead','KartuRencanaStudiController@create_head')->name('krs.create_head');
  Route::post('/krs/addhead/process','KartuRencanaStudiController@store_head')->name('krs.store_head');
  Route::get('/krs/adddetail/{id}','KartuRencanaStudiController@create_detail')->name('krs.create_detail');
  Route::post('/krs/adddetail/process/{id}','KartuRencanaStudiController@store_detail')->name('krs.store_detail');
  Route::get('/krs/read/{id}','KartuRencanaStudiController@read')->name('krs.read');
  Route::get('/krs/edit/{id}','KartuRencanaStudiController@edit')->name('krs.edit');
  Route::put('/krs/update/{id}','KartuRencanaStudiController@update')->name('krs.update');
  Route::delete('/krs/delete/{id}','KartuRencanaStudiController@delete')->name('krs.delete');
  Route::get('/krs/edit/delete/{id}','KartuRencanaStudiController@deletedetail')->name('krs.deletedetail');

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
