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

//Fronend
Route::get('/trang-chu','ProductController@getView')->name('trang-chu');
Route::get('/chitiet/{id}','ProductController@chitiet')->name('chi-tiet');

Route::post('/comment/{id}', 'ProductController@comment')->name('comment');
Route::post('/add-cart/{id}', 'CartController@addCart')->name('add-cart');
Route::get('/add-cart/{id}', 'CartController@addCart')->name('add-cart2');
Route::get('/list-cart', 'CartController@viewCart')->name('list-cart');
Route::get('/delete_cart/{id}','CartController@deleteCart')->name('delete-cart');

Route::get('sanpham/{id}','ProductController@sanpham')->name('sanpham');
Route::post('search-sp', 'ProductController@getSearchSp')->name('search-sp');
Route::post('search-sp/{id}', 'ProductController@getSearchSp2')->name('search-sp-2');


Route::get('check-out', 'CartController@getCheckout')->name('getCheckout');
Route::post('check-out', 'CartController@postCheckout')->name('postCheckout');



//Backend

Route::middleware('auth')->group(function(){
    Route::get('/admin', 'HomeController@home')->name('admin');
    Route::group(['prefix' => 'admin'], function () {

        //Theloai
        Route::get('list-theloai','TheloaiController@index')->name('list-theloai');

        Route::get('add-theloai','TheloaiController@getCreate')->name('getAdd-theloai');
        Route::post('add-theloai','TheloaiController@postCreate')->name('postAdd-theloai');

        Route::get('edit-theloai/{id}','TheloaiController@getEdit')->name('getEdit-theloai');
        Route::post('edit-theloai/{id}','TheloaiController@postEdit')->name('postEdit-theloai');

        Route::get('delete-theloai/{id}','TheloaiController@postDelete')->name('postDelete-theloai');

        //Category
        Route::get('list-category','CategoryController@index')->name('list-danhmuc');

        Route::get('add-category','CategoryController@getCreate')->name('getAdd-danhmuc');
        Route::post('add-category','CategoryController@postCreate')->name('postAdd-danhmuc');

        Route::get('edit-category/{id}','CategoryController@getEdit')->name('getEdit-danhmuc');
        Route::post('edit-category/{id}','CategoryController@postEdit')->name('postEdit-danhmuc');

        Route::get('delete-category/{id}','CategoryController@postDelete')->name('postDelete-danhmuc');

        //Products
        Route::get('list-product','ProductController@index')->name('list-product');

        Route::get('add-product','ProductController@getCreate')->name('getAdd-product');
        Route::post('add-product','ProductController@postCreate')->name('postAdd-product');

        Route::get('edit-product/{id}','ProductController@getEdit')->name('getEdit-product');
        Route::post('edit-product/{id}','ProductController@postEdit')->name('postEdit-product');

        Route::get('delete-product/{id}','ProductController@postDelete')->name('postDelete-product');

        Route::get('search','ProductController@getSearch')->name('getSearch');

        //user
        Route::get('list-user','UserController@index')->name('list-user');

        //bill

        Route::get('list-bill','BillController@getList')->name('list-bill');
        Route::get('delete-bill/{id}', 'BillController@postDelete')->name('postDelete-bill');


    });
});
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
