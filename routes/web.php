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

Route::get('/','InicioController@list');

Auth::routes();

Route::get('/inicio', 'HomeController@list');
Route::get('/Article/create', 'ArticleController@create');
Route::get('/Article/delete', 'ArticleController@delete');
