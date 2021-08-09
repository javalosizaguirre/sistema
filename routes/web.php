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
Route::get('/', 'UserController@list');
Route::get('/form', 'UserController@userForm');
Route::post('/save', 'UserController@save')->name('save');
Route::delete('/delete/{id}', 'UserController@delete')->name('delete');
Route::get('/editform/{id}', 'UserController@editform')->name('editform');
Route::patch('/edit/{id}','UserController@edit')->name('edit');
