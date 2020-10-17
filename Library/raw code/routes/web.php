<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::resource('user','UserController');
// Route::get('all/user','UserController@alluser')->name('all.user');

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('show', 'UserController@index')->name('user.show');
Route::get('users', 'UserController@getUser');
Route::post('users', 'UserController@postUser');
// // Route::post('users/update', 'UserController@postUpdate');
// // Route::post('users/delete', 'UserController@postDelete');
Route::POST('editUser','UserController@editPost');
Route::POST('deleteUser','UserController@deletePost');
