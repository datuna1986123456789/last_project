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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/file', 'FileController@ShowUploadForm')->name('Upload.File');

Route::post('/home/file', 'FileController@StoreFile');

Route::get('/home/creat', 'CreatesController@home');

Route::get('/home/insert', 'CreatesController@add');

Route::get('/home/update/{id}', 'CreatesController@update');