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

Auth::routes([
  'register' => true, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/newproject', 'NewProjectController@newproject')->name('newproject');;
Route::post('/newproject', 'NewProjectController@create');

Route::get('/projects', 'NewProjectController@index')->name('projects');
Route::post('aprove', 'NewProjectController@aprove');

Route::get('/ratings', 'NewProjectController@ratings')->name('ratings');
Route::post('rate', 'NewProjectController@rate');

Route::get('/upload/{id}', 'UploadController@index');
Route::post('/upload', 'UploadController@upload');

Route::get('/download/{id}', 'UploadController@download');

Route::get('/reporting', 'ReportingController@export')->name('reporting');
