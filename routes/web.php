<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FileController@showAllDocuments');

Auth::routes();

Route::get('profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('files/create', 'FileController@create');
Route::post('files/create', 'FileController@store');
Route::post('files', 'FilesController@store');
Route::delete('files/delete/{id}', 'FileController@delete');
Route::get('files/{file}', 'FileController@show');
