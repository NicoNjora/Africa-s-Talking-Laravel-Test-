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
    return view('about');
});

Route::get('voice', function () {
    return view('voice');
});

Route::get('ussd', function () {
    return view('ussd');
});

Route::get('airtime', function () {
    return view('airtime');
});

Route::get('money', function () {
    return view('money');
});

Route::get('/sms','TestController@messageView');
Route::post('/sms', 'TestController@sendMessage');