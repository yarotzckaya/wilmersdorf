<?php

use Carbon\Carbon;
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
    setlocale(LC_TIME, '');
    return view('welcome');
})->name('welcome');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/post/{id}', 'PostController@index')->name('post');

route::get('contacts', function () {
    return view('user.contacts');
});

Route::get('categories', 'CategoryController@index')->name('categories');
Route::get('/category/{id}', 'CategoryController@show');

Route::get('about', function() {
    return view('user.about');
})->name('about');

Route::get('contacts', function() {
    return view('user.contacts');
})->name('contacts');

Route::resource('comment', 'CommentController');
