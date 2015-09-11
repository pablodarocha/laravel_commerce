<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index');

//Route::get('exemplo', 'WelcomeController@example');

// fazer a validacao para todas as rotas que tiverem id como parametro
Route::pattern('id', '[0-9]+');
//iria fazer um patter para o nome receber apenas letras, mas o nome de um produto pode conter numeros

Route::group(['prefix' => 'admin'], function() {
	Route::get('categories', [
		'as'    => 'categoriesAdmin',
		'uses'  => 'AdminCategoriesController@index'
	]);
	Route::get('products', [
		'as'    => 'productsAdmin',
		'uses'  => 'AdminProductsController@index'
	]);
	Route::get('categories/{id?}', [
			'as'    => 'categories',
			'uses'  => 'CategoriesController@index'
	]);
	Route::get('products/{id?}', [
		'as'    => 'products',
		'uses'  => 'ProductsController@index'
	]);
});