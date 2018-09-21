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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('facebook', function () {
    return view('facebook');
});
Route::get('admin/users','HomeController@usersIndex');
Route::post('place_order_client','MenuController@saveOrder')->name('place_order_client');


Route::get('get_users','HomeController@getUsers')->name('get_users');
Route::resource('menus','MenuController');
Route::resource('orders','OrderController');
Route::get('order_list','OrderController@showOrders')->name('order_list');
Route::get('orders/delete/{id}','OrderController@destroy');

Route::post('/menus/update/{id}','MenuController@update');
Route::get('menu_items','MenuController@showMenus')->name('menu_items');
Route::post('save_item','MenuController@store')->name('add_menu_item');
Route::get('menu/delete/{id}','MenuController@destroy');
Route::get('user/delete/{id}','HomeController@destroy');

Route::get('get_item/{item}','MenuController@getItem');

Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
Route::get('/privacy_policy','HomeController@getPrivacyPolicy');
Route::get('/terms_of_service','HomeController@getTermsOfService');
Route::get('/home/{id}', 'HomeController@index');
Route::get('/home_client', 'HomeController@indexClient')->name('home_client');
Route::get('/home_reload', 'HomeController@indexLogin')->name('home_reload');
