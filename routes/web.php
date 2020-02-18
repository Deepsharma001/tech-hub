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


Auth::routes();

Route::get('/admin','HomeController@index');

Route::get('/blog_view','Add_blogController@index');
Route::get('/blog_show/{id}','Add_blogController@show');
Route::get('/blog_add','Add_blogController@create');
Route::post('/blog_add','Add_blogController@store');
Route::get('/blog_edit/{id}','Add_blogController@edit');
Route::post('/blog_edit/{id}','Add_blogController@update');
Route::get('/all_blog','Add_blogController@all');

 



Route::get('/','IndexController@index');
Route::get('/blog','BlogController@index');
Route::get('/about','AboutController@index');
Route::get('/service','ServiceController@index');
Route::get('/contact','ContactController@index');
Route::get('/project','ProjectController@index');
Route::get('contect/create','ContactController@save');
Route::post('contact/create','ContactController@create');
// Route::get('comment/create','Comment@save');
// Route::post('comment/create','CommentController@create');

Route::get('/blog_single/{id}','Blog_SingleController@index');
Route::get('/blog_single/{id}/comment','CommentController@create');
Route::post('/blog_single/{id}/comment','CommentController@create');





