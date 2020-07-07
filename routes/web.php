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

Route::get('/', 'StocksController@index');
// Route::get('/stocks/{post}', 'StocksController@show')->where('post', '[0-9]+')
Route::get('/stocks/create', 'StocksController@create');
Route::post('/stocks', 'StocksController@store');
Route::get('/stocks/{stock}/edit', 'StocksController@edit');
Route::patch('/stocks/{stock}', 'StocksController@update');
Route::delete('/stocks/{stock}', 'StocksController@destroy');