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

Route::get('/users', 'UsersController@show')->name('users');
Route::get('/users/{id}', 'UsersController@userid')->name('userid');;

Route::get('/final', 'WinningController@index')->name('winning');
Route::get('/final/pro/{id}', 'WinningController@project');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/uploaddata', 'UploadController@Uploadindex')->name('uploaddata');

Route::get('export', 'ExcelController@export')->name('export');
Route::get('importExportView', 'ExcelController@importExportView')->name('importExportView');
Route::post('import', 'ExcelController@import')->name('import');

Route::get('/projectslist/{type}', 'NewProjectController@ProjectsList')->name('projectslist');
Route::get('/projectslist/projectpage/{id}', 'NewProjectController@projectpage')->name('projectpage');

Route::get('test', 'UsersController@test')->name('test');
