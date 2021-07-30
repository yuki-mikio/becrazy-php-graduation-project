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

Route::get('/add' , 'PostController@add');

Route::post('/add' , 'PostController@added');

Route::get('/list' , 'PostController@list');

Route::post('/list' , 'PostController@read');

Route::get('/read' , 'PostController@read');

Route::get('/edit' , 'PostController@edit');

Route::get('/editForm' , 'PostController@editForm');

Route::post('/edited' , 'PostController@edited');

Route::post('/delete' , 'PostController@delete');