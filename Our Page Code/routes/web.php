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

Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/country','PagesController@country');

//Route::get('/comm','PagesController@store');

Route::get('/university1','PagesController@university1');

//show data to users
Route::get('/university','PagesController@returnDatabase');
Route::get('/country','PagesController@show');

//End show data
Route::get('/scholarships','PagesController@scholarships');


//Route::resource('/about','CommentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


