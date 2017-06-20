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



Route::get('/','MainController@index');
Route::get('products','ProductController@sortByProductsDesc');
Route::get('price','ProductController@sortByPriceAsc');
Route::get('prices','ProductController@sortByPriceDesc');
Route::get('/product/{id}','ProductController@index');
Route::get('/category/{id}','CategoryController@index');
Route::get('/search','SearchController@index');




Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function () {

    Route::get('/','AdminController@index');

    //Category
    Route::get('/category','CategoryController@show');
    Route::post('/category','CategoryController@store');
    Route::delete('category/delete/{id}','CategoryController@destroy');
    Route::get('/category/{id}/edit','CategoryController@edit');
    Route::post('/category/{id}/edit','CategoryController@update');
    Route::patch('/category/{id}/edit','CategoryController@update');
    Route::get('/create','CategoryController@create');

    //Product
    Route::get('/product/create','ProductController@create');
    Route::post('/','ProductController@store');
    Route::delete('/product/delete/{id}','ProductController@destroy');
    Route::get('/product/{id}/edit','ProductController@edit');
    Route::post('/product/{id}/edit','ProductController@update');
    Route::patch('/product/{id}/edit','ProductController@update');



});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

