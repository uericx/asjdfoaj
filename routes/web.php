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

/*Route::get('/', function () {
    //return view('index');
    var_dump('current time is' . date("Y m d H:i:s"));

    $date = new DateTime;
    var_dump($date);
});*/

Route::get('/', 'WorkController@index');

Route::post('/work', 'WorkController@store');
Route::get('/order', 'OrderController@index');

