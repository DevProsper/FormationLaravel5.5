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

Route::group(['prefix' => 'laravel-image'], function () {
    Route::get('/', 'Crud5Controller@index');
    Route::match(['get', 'post'], 'create', 'Crud5Controller@create');
    Route::match(['get', 'put'], 'update/{id}', 'Crud5Controller@update');
    Route::delete('delete/{id}', 'Crud5Controller@delete');
});
