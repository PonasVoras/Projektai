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

Route::resource('home', 'TodoController');
Route::get('/signin', 'PagesController@signin');
Route::get('/signup', 'PagesController@signup');
Route::get('/menu', 'PagesController@menu');
Route::patch('/todo/{todo}', 'TodoCompleteController@update');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
