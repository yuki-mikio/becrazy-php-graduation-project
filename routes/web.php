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


Route::get('/add' , 'PostController@add');

Route::post('/add' , 'PostController@added');

Route::get('/list' , 'PostController@list')->name('list');

Route::get('/check' , 'PostController@check');

Route::get('/edit' , 'PostController@edit');

Route::get('/editForm' , 'PostController@editForm');

Route::post('/edited' , 'PostController@edited');

Route::post('/delete' , 'PostController@delete');

Route::get('/taxonomy' , 'PostController@taxonomy');

Route::post('/taxonomy' , 'PostController@taxonomyAdd');

Route::get('/taxonomylist' , 'PostController@taxonomylist');

Route::get('/taxonomyEdit' , 'PostController@taxonomyEdit');

Route::post('/taxonomyEdit' , 'PostController@taxonomyEdited');

Route::post('/taxonomydel' , 'PostController@del');

Route::get('/catalist' , 'PostController@catalist');

Route::get('/userlist' , 'UserController@userlist')->name('userlist');


Route::get('/' , 'ReadController@top');

Route::get('/read/{slug}' , 'ReadController@read');

Route::get('/category/{slug}' , 'ReadController@category');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ログイン・ログアウト
Route::get('login', 'Auth\PostLoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\PostLoginController@login');
Route::post('logout', 'Auth\PostLoginController@logout')->name('logout');

// 新規登録
Route::get('register', 'Auth\PostRegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\PostRegisterController@register');

Route::get('changepass' , 'Auth\ChangePassController@edit')->name('changepass');

Route::post('changepass' , 'Auth\ChangePassController@update')->name('update');
