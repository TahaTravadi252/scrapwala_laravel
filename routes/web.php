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
})->name('home');


Auth::routes();
/*before login pages*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'PageController@index')->name('home');
Route::get('/aboutUs', 'PageController@aboutUS')->name('aboutUs'); 
Route::get('/conatctUs', 'PageController@contactUS')->name('contactUs'); 
Route::post('/conatctUs', 'PageController@contactUSPost');
Route::get('/terms', 'PageController@terms')->name('terms'); 

Auth::routes();

/*register user show & delete */
Route::get('/home/admin_register_user', 'user_data@registeruser')->name('admin_register_user');
Route::get('/home/register_user/delete/{id}', 'user_data@user_delete')->name('user_delete');

/*user contact message show and delete*/
Route::get('/home/admin_message', 'AdminController@admin_message')->name('admin_message');
Route::get('/home/admin_register_user/delete/{id}', 'AdminController@message_delete')->name('message_delete');

/*product price show and delete */
Route::get('/home/admin_price', 'product_data@admin_product_price')->name('admin_product_price');
Route::get('/home/admin_price/delete/{id}', 'product_data@product_delete')->name('product_delete');
Route::get('/home/insert_product', 'product_data@admin_insert_product')->name('admin_insert_product');
Route::post('/home/insert_product', 'product_data@admin_insert_productPost');
Route::get('/home/edit_product/{id}', 'product_data@edit_product')->name('admin_edit_product');
Route::post('/home/edit_product/{id}', 'product_data@edit_save');

/*product order data show and delete*/
Route::get('/home/admin_order', 'order_data@admin_order')->name('admin_order');
Route::get('/home/admin_order/delete/{id}', 'order_data@Scrap_order_delete')->name('Scrap_order_delete');
Route::get('/home/admin_order1/{id}', 'order_data@Status_update')->name('admin_order_update');


Route::post('/home/admin_insert_product', 'product_data@admin_insert_productPost');

