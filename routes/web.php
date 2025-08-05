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

Route::get('/', 'PagesController@index');
Route::get('/case/{id}', 'PagesController@cases');
Route::get('/price', 'PagesController@price');
Route::get('/logout', 'AuthController@logout');
Route::get('/feedback', 'PagesController@feedback');
Route::get('/faq', 'PagesController@faq');

Route::group(['prefix' => '/api'], function () {
    Route::post('/promocodeUse', 'ApiController@promocodeUse');
    Route::post('/getStats', 'ApiController@getStats');
    Route::post('/reload', 'ApiController@reload');
    Route::post('/openBox', 'ApiController@openBox');
    Route::post('/payment/create', 'ApiController@createPayment');
    Route::get('/payment/digiseller', 'ApiController@digiseller');
    Route::post('/payment/freekassa', 'ApiController@freekassa');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/oplata', 'PagesController@oplata');
    Route::get('/account', 'PagesController@account');
    Route::get('/get/{id}', 'PagesController@get');
});

Route::group(['prefix' => '/auth'], function () {
    Route::get('/{provider}', 'AuthController@login');
    Route::get('/callback/{provider}', 'AuthController@callback');
});

Route::group(['prefix' => '/admin', 'middleware' => 'Access:admin'], function() {
    Route::get('/', 'AdminController@index');
    Route::get('/settings', 'AdminController@settings');
    Route::get('/saveSettings', 'AdminController@saveSettings');
    Route::get('/lastOpen', 'AdminController@lastOpen');
    Route::get('/lastWithdraw', 'AdminController@lastWithdraw');
    Route::get('/users', 'AdminController@users');
    Route::get('/user/{id}', 'AdminController@user');
    Route::get('/saveUser', 'AdminController@saveUser');
    Route::get('/cases', 'AdminController@cases');
    Route::get('/case/{id}', 'AdminController@casee');
    Route::get('/saveCase', 'AdminController@saveCase');
    Route::get('/addCase', 'AdminController@addCase');
    Route::get('/addCasePost', 'AdminController@addCasePost');
    Route::get('/addItem', 'AdminController@addItem');
    Route::get('/addItemPost', 'AdminController@addItemPost');
    Route::get('/item/{id}', 'AdminController@item');
    Route::get('/saveItem', 'AdminController@saveItem');
    Route::get('/addUser', 'AdminController@addUser');
    Route::get('/addUserPost', 'AdminController@addUserPost');
    Route::get('/items', 'AdminController@items');
    Route::get('/acceptWithdraw/{id}', 'AdminController@acceptWithdraw');
    Route::get('/declineWithdraw/{id}', 'AdminController@declineWithdraw');
    Route::get('/lastOrders', 'AdminController@lastOrders');
    Route::get('/promocode', 'AdminController@promocode');
    Route::get('/addCode', 'AdminController@addCode');
    Route::get('/addCodePost', 'AdminController@addCodePost');
});