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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}', 'HomeController@index')->name('home');
Route::get('/home/edit', 'HomeController@edit')->name('home.edit');
Route::patch('/home/update', 'HomeController@updateProfile')->name('home.update');
Route::get('/home/changeAvatar', 'HomeController@changeAvatar')->name('home.changeAvatar');
Route::patch('/home/uploadAvatar', 'HomeController@uploadAvatar')->name('home.uploadAvatar');

Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/{followed_id}/follow', 'UserController@follow')->name('user.follow');
Route::get('/user/{unfollowed_id}/unfollow', 'UserController@unfollow')->name('user.unfollow');
Route::get('/user/{id}/followers', 'UserController@followers')->name('user.followers');
Route::get('/user/{id}/following', 'UserController@following')->name('user.following');

Route::post('/blog/store', 'BlogController@store')->name('blog.store');
Route::get('/blog/{blog}/edit', 'BlogController@edit')->name('blog.edit');
Route::patch('/blog/{blog}/update', 'BlogController@update')->name('blog.update');
Route::delete('/blog/{blog}/delete', 'BlogController@destroy')->name('blog.delete');