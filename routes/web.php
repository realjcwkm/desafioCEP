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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/local', 'LocalController');

Route::get('/local', 'LocalController@index');
Route::get('/local/create', 'LocalController@create');
Route::post('/local', 'LocalController@store');
Route::get('/local/{id}', 'LocalController@show');
Route::get('/local/{id}/edit', 'LocalController@edit');
Route::put('/local/{id}', 'LocalController@update');
// Route::delete('/local/{id}', 'LocalController@destroy');
Route::get('/local/delete/{id}', 'LocalController@destroy')->name('local.destroy');