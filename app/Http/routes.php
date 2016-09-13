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
     //   'debug' => 'DebugController',
        'keyword' => 'KeywordController',
        'admin' => 'AdminController',
        'role' => 'RoleController'
    ]);

});

Route::controllers([
    'debug' => 'DebugController',
]);

// Blog panel
/*Route::get('blog/admin/index', [
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
]);*/

