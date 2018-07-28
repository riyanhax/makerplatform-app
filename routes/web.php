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

Route::get('/', 'IndexController@home')->name('home');
Route::get('/projects', 'IndexController@projects');
/* IndexController@PersonalPage */


Route::get('upload',['as' => 'upload_form', 'uses' => 'UploadController@getForm']);
Route::post('upload',['as' => 'upload_file','uses' => 'UploadController@upload']);
