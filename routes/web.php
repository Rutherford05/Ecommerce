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
    return redirect('login');
});
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index','IndexController@show');
Route::get('/detailsProduits/{id}','DetailsProduitsController@filter');
Route::get('/living','LivingController@show');
Route::get('/detailsProduits/{id}','DetailsproduitsController@cool');
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
Route::resource('mes_articles', 'CategorieController');
Route::delete('/mes_articles/{id}/delete','CategorieController@destroy');
Route::put('/mes_articles/{id}/update','CategorieController@update');
Route::get('/search','CategorieController@search');
Route::resource('prod', 'ProduitController');
Route::delete('/prod/{id}/delete','ProduitController@destroy');
Route::put('/prod/{id}/update','ProduitController@update');
Route::get('/search','ProduitController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
});
Route::get('user', array('as' => 'user.index', 'uses' => 'UserController@index'));
Route::get('user/register', array('as' => 'user.register', 'uses' => 'UserController@register'));
Route::post('user/store', array('as' => 'user.store', 'uses' => 'UserController@store'));
Route::get('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::post('user/authenticate', array('as' => 'user.authenticate', 'uses' => 'UserController@authenticate'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logout'));
Route::get('user/account', array('as' => 'user.account', 'uses' => 'UserController@account'))->middleware('auth');

