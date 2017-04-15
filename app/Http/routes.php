<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'kanepe', 'middleware' => 'auth'], function(){
	Route::get('/', 'BlogController@index');

	Route::group(['prefix' => 'blogs'], function(){
		Route::get('new', 'BlogController@new');
		Route::post('new', 'BlogController@save');
		Route::get('{blogid?}', 'BlogController@index');
		Route::get('edit/{blog}', 'BlogController@edit');
		Route::get('delete/{blog}', 'BlogController@delete');
		Route::get('export', 'BlogController@export');
	});

	Route::group(['prefix' => 'comments'], function(){
		Route::get('new/{blog}', 'CommentController@new');
		Route::post('new', 'CommentController@save');
		Route::get('comment/{blog}', 'CommentController@index');
		Route::get('delete/{comment}', 'CommentController@delete');
	});
});

Route::get('/', 'BlogController@viewHome');
Route::get('/blog/{id}', 'BlogController@blogComment');
Route::get('/new/{blog}', 'BlogController@newComment');
Route::get('/export', 'BlogController@export');


