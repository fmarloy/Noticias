<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Noticias@indexNotice');

Route::get('/notice', function () {
    return view('addNotice');
});

Route::post('addNotice', 'Noticias@addNotice');
Route::post('updateNotice', 'Noticias@updateNotice');

Route::get('/list', 'Noticias@listNotice');

Route::get('/index', 'Noticias@indexNotice');

Route::get('show/{id}', [
 	'as' => 'show-notice',
 	'uses'=>'Noticias@showNotice'
 	]);

Route::get('update/{id}', [
 	'as' => 'update-notice',
 	'uses'=>'Noticias@update'
 	]);

Route::get('delete/{id}', [
 	'as' => 'delete-notice',
 	'uses'=>'Noticias@destroy'
 	]);

Route::get('updateNotice', 'Noticias@updateNotice');