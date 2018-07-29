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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/projects', 'IndexController@projects')->name('projects');
Route::get('/contests', 'IndexController@contests')->name('contests');
Route::get('/files', 'IndexController@files')->name('files');
Route::get('/profile', 'IndexController@profile')->name('profile')->middleware('auth');
Route::get('/add-project', 'IndexController@addProject')->name('addproject')->middleware('auth');
Route::post('/add-project', 'IndexController@SaveProject')->name('saveProject');
Route::get('/project/{id}', 'IndexController@Project');
Route::delete('delete/{project}', 'IndexController@DeleteProject')->name('projectDelete');


Route::get('/upload', ['as' => 'upload_form', 'uses' => 'UploadController@getForm']);
Route::post('/upload', ['as' => 'upload_file', 'uses' => 'UploadController@upload']);
