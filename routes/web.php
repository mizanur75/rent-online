<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Route
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

//Rent Giver Route
Route::group(['as'=>'rentgiver.', 'prefix'=>'rentgiver', 'namespace'=>'RentGiver', 'middleware'=>['auth','rentgiver']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

//Rent Taker Route
Route::group(['as'=>'renttaker.', 'prefix'=>'renttaker', 'namespace'=>'RentTaker', 'middleware'=>['auth','renttaker']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});