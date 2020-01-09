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

Route::group(['prefix' => 'admin'], function (){
    Route::resource('cake', 'admin\CakeController');
    Route::resource('category', 'admin\CategoryController');
    Route::resource('user', 'admin\UserController');
    Route::resource('image', 'admin\ImageController');
});

Auth::routes();

Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
Route::get('cake-detail/{id}', 'PagesController@getCakeDetail')->name('cakeDetail');
Route::get('cake-category/{id}', 'PagesController@getCakeByCategory')->name('cakeCategory');
