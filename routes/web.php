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

Route::any('/', 'HomeController@index');

Route::get('/test_post', 'HomeController@test_post');

Route::any('/api_update_user', 'HomeController@api_update_user');