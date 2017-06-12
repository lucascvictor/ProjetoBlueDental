<?php


	Route::get('/', 'NotebookController@index');

	Route::group(['prefix' => 'notebook'], function() {

		Route::get ('', ['uses' => 'NotebookController@index']);

		Route::get ('{id}', ['uses' =>'NotebookController@show']);

		Route::post ('', ['uses' => 'NotebookController@store']);

		Route::put ('{id}', ['uses' => 'NotebookController@update']);

		Route::delete ('{id}', ['uses' => 'NotebookController@destroy']);

	});


