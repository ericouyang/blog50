<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'BlogController@index');

// routes for the blog
Route::get('/post/new', array(
  'as' => 'newPost',
  'uses' => 'BlogController@newPost'
));

Route::post('/post/new', array(
  'as' => 'createPost',
  'uses' => 'BlogController@createPost'
));

Route::get('/post/{id}', array(
  'as' => 'viewPost',
  'uses' => 'BlogController@viewPost'
));

Route::post('/post/{id}/comment', array(
  'as' => 'createComment',
  'uses' => 'BlogController@createComment'
));
