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

	Route::get('/', 'PagesController@getIndex');


	Route::get('/about', 'PagesController@getabout');


	Route::get('/contact', 'PagesController@getContact');
	Route::post('/contact', 'PagesController@postContact');
	Route::get('blog/{id}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
		->where('{id}' , '[\w\d\-\_]+');
	Route::get('blog', array('uses' => 'BlogController@getIndex' , 'as' => 'blog.index'));
	Route::resource('posts', 'PostController');


	// Authentication
	Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
	Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
	Route::get('/home', ['as' => 'home', 'uses' => 'UsersController@home']);
	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::resource('users', 'UsersController');



// Registration Routes
Route::get('auth/register', 'AuthController@getRegister');
Route::post('auth/register', 'AuthController@postRegister');

	// Commentaires
	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);



	// images


	Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);






