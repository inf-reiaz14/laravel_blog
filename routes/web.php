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

Route::get('/',[
    'as' => 'home',
    'uses' => 'PagesController@getIndex'
]);

Route::get('/post',[
    'as' => 'post',
    'uses' => 'PagesController@getPost'
]);


Auth::routes();

Route::get('/home', 'HomeController@index');
