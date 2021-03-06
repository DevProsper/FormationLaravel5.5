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

Route::get('/', function () {
    return view('welcome');
});

Route::get('my-posts', 'PostController@myPosts');
Route::resource('posts','PostController');

Route::get('file','FileController@create');
Route::post('file','FileController@store');

Route::get('/send/email', 'HomeController@mailMailTrap');


Route::get('/search', 'SearchController@index');
Route::get('/getSearch', 'SearchController@getSearch');

