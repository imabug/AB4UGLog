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

Route::name('index')->get('/', 'HomeController@index');
Route::name('logbook.get')->post('logbook/get', 'LogBookController@get');
Route::resource('logbook', 'LogBookController');
Route::resource('qsolog', 'QsoLogController');
