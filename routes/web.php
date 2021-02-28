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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});


//課題3
Route::group(['prefix' => 'XXX'], function() {
    Route::get('', 'AAAController@bbb');
});


//課題4と　laravel　12　ユーザー認証の課題2と3
Route::group(['prefix' => 'admin'], function() {
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//laravel 12/13 課題 3と6
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
Route::get('news/create', 'Admin\NewsController@add');
Route::post('news/create', 'Admin\NewsController@create');
 Route::get('profile/create', 'Admin\ProfileController@add');
 Route::post('profile/create', 'Admin\ProfileController@create');
 Route::get('profile/edit', 'Admin\ProfileController@edit');
 Route::post('profile/edit', 'Admin\ProfileController@update');
});
