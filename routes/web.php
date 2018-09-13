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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Get Data
Route::get('datatable/getposts/{status?}', ['as'=>'datatable/getposts','uses'=>'HomeController@getPosts']);

// delete user
Route::get('home/destroy/{id}', ['as'=>'home.destroy','uses'=>'HomeController@destroy']);


//Route::get('sendbasicemail','MailController@basic_email');

