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
Route::get('/', 'myprojectController@index');
Route::get('/about', 'myprojectController@about');
// Route::get('/projects', 'adddataController@index');
// Route::get('/adddata', 'adddataController@index');
// Route::get('/adddata/create', 'adddataController@create');
// Route::get('/details/{data}', 'adddataController@show');
// Route::post('/addData', 'adddataController@store');
// Route::delete('/details/{data}', 'adddataController@destroy');
// Route::get('/details/{data}/edit', 'adddataController@edit');
// Route::patch('/details/{data}', 'adddataController@update');
Route::resource('details', 'adddataController');
Route::resource('projects', 'adddataController');
Route::resource('adddata', 'adddataController');
Route::resource('addData', 'adddataController');
Route::get('admin', 'adminController@index')->name('admin');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('service/priceslist', 'adminController@pricelist')->name('pricelist');
Route::Auth();