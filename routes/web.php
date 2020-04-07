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

Route::get('/trailers', 'start@trailers');

Route::get('/trailers/{id}', 'start@show')->name('show');

Route::get('/contact', 'start@contact');

Route::post('/contact/send', 'start@send');

Route::get('/', 'start@inicio');

Auth::routes();

Route::resource('/movieAdmin', 'MovieController');

Route::get('/home', 'HomeController@index')->name('home');

