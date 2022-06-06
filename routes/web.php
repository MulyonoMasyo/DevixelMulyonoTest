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

Route::get('/product','ProductController@index');
Route::get('/create-product','ProductController@create');
Route::post('/create-product-tambah','ProductController@createProduct');
Route::get('/update-product/{id}','ProductController@updateProduct');
Route::post('/update/{id}','ProductController@update');
Route::get('/delete-product/{id}','ProductController@delete');
Route::get('/show-product/{id}', 'ProductController@showProduct');
