<?php
Route::get('/', function () { return view('front/index');});

Auth::routes();

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');



Route::any('{url}', 'HomeController@index');

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