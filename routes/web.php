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

//Route::get('/', function () {
//    return view('main');
//});


Route::get('/', ['as'=>'home', 'uses'=>'IndexController@show']);

Route::get('articles', ['as'=>'articles', 'uses'=>'ArticlesController@show']);

Route::get('category/{id}', ['as'=>'category', 'uses'=>'CategoriesController@show']);

Route::get('delivery', ['as'=>'delivery', 'uses'=>function () {return view('delivery');}]);

// форма заказа
Route::get('shopping-cart', ['as'=>'cart', 'uses'=>'ShoppingCartController@showCart']);

//корзина заказов
Route::get('order', ['as'=>'order', 'uses'=>'OrderController@show']);

// заказ с занесением в базу данных и уведомлением по почте
Route::post('order-post', ['as'=>'order-post', 'uses'=>'OrderController@proceed']);

//заказ с уведомлением по почте, без внесения в базу данных
Route::post('order-post-light', ['as'=>'order-post-light', 'uses'=>'OrderController@proceedLight']);



Auth::routes();

Route::get('/home', 'HomeController@index');
