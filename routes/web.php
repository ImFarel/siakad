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

// Route::get('/', function () { return view('welcome'); })->name('back');

Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

Auth::routes();
Route::group( [ 'prefix' => 'dashboard', 'middleware' => 'auth' ] , function() {
  //Users
  Route::get('/users', 'UserController@index')->name('users.index');
  Route::get('/users/add', 'UserController@add')->name('users.add');
  Route::get('/users/view/{id}', 'UserController@view')->name('users.view');
  Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
  Route::post('/users/addprocess', 'UserController@addprocess')->name('users.addprocess');
  Route::put('/users/editprocess/{id}', 'UserController@editprocess')->name('users.editprocess');
  Route::get('/users/delete/{id}', 'UserController@delete')->name('users.delete');

  Route::resource('/roles','RoleController');
});

Route::get('/welcome', 'HomeController@index')->name('welcome');
