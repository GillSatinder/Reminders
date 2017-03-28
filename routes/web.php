<?php



Route::resource('register','RegisterController');



Route::get('logout','RegisterController@logout');

Route::resource('api/cApp','CommentController');


Route::get('home','HomeController@index');




Route::post('loginUser','LoginController@store');

Route::get('login','LoginController@index');



Route::get('getComments','CommentController@getComments');


Route::get('index',function()
{
    return view('index');
});