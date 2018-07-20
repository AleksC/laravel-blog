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

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create')->name('create-post');

Route::get('/posts/{id}', 'PostController@show')->name('single-post');

Route::post('/', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store')->name('create-comment');

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::get('/users/{id}', 'UserController@show');

Route::get('/posts/tags/{tag}', 'TagController@show');
