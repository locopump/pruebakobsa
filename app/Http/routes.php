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


Route::get('/', function(){ return View::make('welcome'); });

Route::get('workers','WorkerController@index');
Route::get('workers/{id}','WorkerController@getWorker');
Route::post('workers','WorkerController@store');
Route::put('workers/{id}','WorkerController@update');
Route::delete('workers/{id}','WorkerController@destroy');
// Route::post('/newWorker','WorkerController@newWorker');
