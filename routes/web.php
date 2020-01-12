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


Route::get('/','HomeController@index');
Route::get('/blog','BlogController@index');
Route::get('/about','AboutController@index');
Route::get('/service','ServiceController@index');
Route::get('/contact','ContactController@index');
Route::get('/project','ProjectController@index');
Route::get('contect/create','ContactController@save');
Route::post('contact/create','ContactController@create');
Route::get('blog-single/{id}', 'Blog_SingleController@index')->name('blog-single');

