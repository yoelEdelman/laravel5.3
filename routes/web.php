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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'WelcomeController@index')->name('home');

Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+')->name('article');

Route::get('users', 'UsersController@create');

Route::post('users', 'UsersController@store');

Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@store');

Route::get('photo', 'PhotoController@create');

Route::post('photo', 'PhotoController@store');

Route::get('email', 'EmailController@create');

Route::post('email', 'EmailController@store')->name('store.email');

Route::resource('user', 'UserController');
