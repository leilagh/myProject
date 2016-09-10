<?php

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

Route::group(['middleware' => 'auth'], function () {
    Route::controllers([
        'debug' => 'DebugController',
        'role' => 'RoleController'
    ]);

});


// Blog panel
Route::get('blog/admin/index', [
    'as' => 'blog.admin.index',
    'uses' => 'BlogController@index'
]);

Route::get('blog/admin/userlist', [
    'as' => 'blog.admin.userlist',
    'uses' => 'RoleController@userlist'
]);
Route::get('blog/admin/editrole/{id}', [
    'as' => 'blog.admin.userlist',
    'uses' => 'RoleController@getEditrole'
]);
Route::post('blog/admin/editrole/{id}', [
    'as' => 'blog.admin.userlist',
    'uses' => 'RoleController@postEditrole'
]);

Route::get('blog/admin/users', [
    'as' => 'blog.admin.users',
    'uses' => 'RoleController@users'
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
Route::get('blog/admin/role', [
    'as' => 'blog.admin.role',
    'uses' => 'RoleController@getRole'
]);
Route::post('blog/admin/role', [
    'as' => 'blog.admin.role',
    'uses' => 'RoleController@postRole'
]);