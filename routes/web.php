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
Route::get('/index','IndexController@show');
Route::get('/living','LivingController@cool');
Route::get('/accessoires','LivingController@drd');
Route::get('/decorative','LivingController@deco');
Route::get('/mauris','LivingController@mau');
Route::get('/fusce','LivingController@fus');
Route::get('/libero','LivingController@lib');
Route::get('/lounge','LivingController@lou');
Route::get('/portable','LivingController@por');
Route::get('/elephant','LivingController@ele');
Route::get('/molded','LivingController@mol');
Route::get('/bathroom','LivingController@bath');
//Route::resource('mes_articles', 'CategorieController');
//Route::delete('/mes_articles/{id}/delete','CategorieController@destroy');
//Route::put('/mes_articles/{id}/update','CategorieController@update');
//Route::get('/search','CategorieController@search');
Route::resource('mes_articles', 'ProduitController');
Route::delete('/mes_articles/{id}/delete','ProduitController@destroy');
Route::put('/mes_articles/{id}/update','ProduitController@update');
Route::get('/search','ProduitController@search');
