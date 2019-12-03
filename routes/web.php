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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
// 	$nama = 'Rozi';
//     return view('about', ['nama'=> $nama]);
// });
// Route::get('/home', 'ClientController@home');
// Route::get('/buatdata', 'ClientController@kedata');
Route::get('/', 'myprojectController@index');
Route::get('/about', 'myprojectController@about');
Route::get('/projects', 'adddataController@index');
Route::get('/adddata', 'adddataController@index');
Route::get('/adddata/create', 'adddataController@create');
Route::get('/details/{data}', 'adddataController@show');
