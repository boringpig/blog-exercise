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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post-list', 'PostController@index');
Route::get('/post-edit/{id}', 'PostController@edit');
Route::post('/post-update/{id}', 'PostController@update');
Route::post('/post-delete/{id}', 'PostController@delete');
Route::get('/post-create', 'PostController@create');
Route::post('/post-store', 'PostController@store');
