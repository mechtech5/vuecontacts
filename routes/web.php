<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact/{name}', function(){
	return redirect('/');
})->where('name', '[A-Za-z]+');

Route::resource('contact', 'ContactController');
Route::post('getData', 'ContactController@getData');
