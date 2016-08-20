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

Route::get('/', function () {
    return view('welcome');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Blog panel
Route::get('blog/admin/index', [
    'as' => 'blog.admin.index',
    'uses' => 'BlogController@index'
]);
Route::get('blog/admin/keyword', [
    'as' => 'blog.admin.keyword',
    'uses' => 'BlogController@getKeyword'
]);
Route::post('blog/admin/keyword', [
    'as' => 'blog.admin.keyword',
    'uses' => 'BlogController@postKeyword'
]);
Route::get('blog/admin/category', [
    'as' => 'blog.admin.category',
    'uses' => 'BlogController@getCategory'
]);
Route::post('blog/admin/category', [
    'as' => 'blog.admin.category',
    'uses' => 'BlogController@postCategory'
]);
Route::get('blog/admin/picture', [
    'as' => 'blog.admin.picture',
    'uses' => 'BlogController@getPicture'
]);
Route::post('blog/admin/picture', [
    'as' => 'blog.admin.picture',
    'uses' => 'BlogController@postPicture'
]);