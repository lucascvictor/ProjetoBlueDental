<?php


	Route::get('/', 'NotebookController@index');

	Route::group(['prefix' => 'notebook'], function() {

		Route::get ('', ['uses' => 'NotebookController@index']);

		Route::get ('add', ['uses' => 'NotebookController@create']);

		Route::get ('{id}', ['uses' =>'NotebookController@show']);

		Route::post ('', ['uses' => 'NotebookController@store']);

		Route::put ('{id}', ['uses' => 'NotebookController@update']);

		Route::delete ('{id}', ['uses' => 'NotebookController@destroy']);

	});


	Route::group(['prefix' => 'rotations'], function() {

		Route::get ('', ['uses' => 'RotationController@index']);

		Route::get ('add', ['uses' => 'RotationController@create']);

		Route::get ('{id}', ['uses' =>'RotationController@show']);

		Route::post ('', ['uses' => 'RotationController@store'])->name('rotation.store');

		Route::put ('{id}', ['uses' => 'RotationController@update']);

		Route::delete ('{id}', ['uses' => 'RotationController@destroy']);

	});


	Route::group(['prefix' => 'schedules'], function() {

		Route::get ('', ['uses' => 'ScheduleController@index']);

		Route::get ('add', ['uses' => 'ScheduleController@create']);

		Route::get ('{id}', ['uses' =>'ScheduleController@show']);

		Route::post ('', ['uses' => 'ScheduleController@store'])->name('schedule.store');

		Route::put ('{id}', ['uses' => 'ScheduleController@update']);

		Route::delete ('{id}', ['uses' => 'ScheduleController@destroy']);

	});

	Route::group(['prefix' => 'clinics'], function() {

		Route::get ('', ['uses' => 'ClinicController@index']);

		Route::get ('add', ['uses' => 'ClinicController@create']);

		Route::get ('{id}', ['uses' =>'ClinicController@show']);

		Route::post ('', ['uses' => 'ClinicController@store'])->name('clinic.store');

		Route::put ('{id}', ['uses' => 'ClinicController@update']);

		Route::delete ('{id}', ['uses' => 'ClinicController@destroy']);

	});

	Route::group(['prefix' => 'dentists'], function() {

		Route::get ('', ['uses' => 'DentistController@index']);

		Route::get ('add', ['uses' => 'DentistController@create']);

		Route::get ('{id}', ['uses' =>'DentistController@show']);

		Route::post ('', ['uses' => 'DentistController@store'])->name('dentist.store');

		Route::put ('{id}', ['uses' => 'DentistController@update']);
		
		Route::delete ('{id}', ['uses' => 'DentistController@destroy']);

	});

