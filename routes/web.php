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

Route::get('/home', 'HomeController@index')->name('home');



//categories Route

Route::get('/categories/add' , 'AddCategorycontroller@Add');

Route::post('/categories/store' , 'AddCategorycontroller@Store');

//products Route

Route::get('/products/add' , 'AddProductcontroller@Add');

Route::post('/products/store' , 'AddProductcontroller@Store');