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

Route::get('/home', function(){
    return View::make('pages.home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts','PostController@index')->name('post.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/{id}','PostController@show')->name('post.show');

Route::post('posts','PostController@store')->name('post.store');

Route::get('post/create','PostController@create')->name('posts.create');

Route::delete('posts/{id}','PostController@destroy')->name('posts.destroy');

Route::get('/posts/users/{id}','PostController@userPosts')->name('post.users');




