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
Route::group(array('prefix' => 'api'), function() {
    Route::get('/', function () {
        return response()->json(['message' => 'Gateway API [AMBIENTE]', 'status' => 'Connected']);;
    });
});

Route::group(['prefix' => 'api/pagarme'], function () {
    Route::post('transaction/{id}/postback', 'PagarmeController@Postback');
    Route::post('transaction', 'PagarmeController@Transaction');
    Route::post('subscriptions', 'PagarmeController@Subscription');
    Route::post('subscriptions/cancel', 'PagarmeController@Subscription_Cancel');
    Route::post('subscriptions/update', 'PagarmeController@Subscription_Update');
});

Route::group(['prefix' => 'api/stripe'], function () {
    Route::post('transaction/{id}/postback', 'PagarmeController@Postback');
    Route::post('transaction', 'PagarmeController@Transaction');
    Route::post('subscriptions', 'PagarmeController@Subscription');
    Route::post('subscriptions/cancel', 'PagarmeController@Subscription_Cancel');
    Route::post('subscriptions/update', 'PagarmeController@Subscription_Update');
});

Route::get('/', function () {
    return redirect('api');
});