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

Route::get('/','IndexController@index')->middleware('close_site');
Route::post('/send/email','IndexController@sendEmail')->name('send.email')->middleware('close_site');
Route::get('/coming-soon','ComingSoonController@coming_soon')->middleware('open_site');