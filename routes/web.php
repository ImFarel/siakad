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

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group( [ 'prefix' => 'dashboard', 'middleware' => 'auth' ] , function() {
  //mahasiswa






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
