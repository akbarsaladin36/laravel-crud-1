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

Route::get('/', 'UserController@index')->name('home');
Route::get('/create-data', 'UserController@create')->name('create');
Route::post('/', 'UserController@store')->name('store');
Route::get('/detail/{id}', 'UserController@show')->name('show');
Route::get('/edit-data/{id}', 'UserController@edit')->name('edit');
Route::patch('/detail/{id}', 'UserController@update')->name('update');
Route::delete('/delete/{id}', 'UserController@destroy')->name('delete');