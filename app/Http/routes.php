<?php




Route::get('/', function (){
    return view('welcome');
});

Route::resource('/home', 'HomeController');
Route::get('home', 'HomeController@index');