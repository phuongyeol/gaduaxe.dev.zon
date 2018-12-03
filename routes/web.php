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

// ---------------------------------------------------------------------------------------------------//
	//Hiển thị danh sách sản phẩm: Nhập link: ../products: Gọi đến hàm index trong ProductController
		Route::get('products', 'ProductController@index');

	