<?php


	Route::get('/', 'HomeController@index');

	Route::group(['prefix' => 'notebook'], function() {

		Route::get ('', ['uses' => 'NotebookController@index']);

		Route::get ('add', ['uses' => 'NotebookController@create']);

		Route::get ('{id}', ['uses' =>'NotebookController@edit'])->name('notebook.edit');

		Route::post ('', ['uses' => 'NotebookController@store'])->name('notebook.store');

		Route::put ('{id}', ['uses' => 'NotebookController@update'])->name('notebook.update');

		Route::delete ('{id}', ['uses' => 'NotebookController@destroy'])->name('notebook.destroy');

	});


	Route::group(['prefix' => 'rotations'], function() {

		Route::get ('', ['uses' => 'RotationController@index']);

		Route::get ('add', ['uses' => 'RotationController@create']);

		Route::get ('{id}', ['uses' =>'RotationController@edit'])->name('rotation.edit');

		Route::post ('', ['uses' => 'RotationController@store'])->name('rotation.store');

		Route::put ('{id}', ['uses' => 'RotationController@update'])->name('rotation.update');

		Route::delete ('{id}', ['uses' => 'RotationController@destroy'])->name('rotation.destroy');

	});


	Route::group(['prefix' => 'schedules'], function() {

		Route::get ('', ['uses' => 'ScheduleController@index']);

		Route::get ('add', ['uses' => 'ScheduleController@create']);

		Route::get ('{id}', ['uses' =>'ScheduleController@edit'])->name('schedule.edit');

		Route::post ('', ['uses' => 'ScheduleController@store'])->name('schedule.store');

		Route::put ('{id}', ['uses' => 'ScheduleController@update'])->name('schedule.update');

		Route::delete ('{id}', ['uses' => 'ScheduleController@destroy'])->name('schedule.destroy');

	});

	Route::group(['prefix' => 'clinics'], function() {

		Route::get ('', ['uses' => 'ClinicController@index']);

		Route::get ('add', ['uses' => 'ClinicController@create']);

		Route::get ('{id}', ['uses' =>'ClinicController@edit'])->name('clinic.edit');

		Route::post ('', ['uses' => 'ClinicController@store'])->name('clinic.store');

		Route::put ('{id}', ['uses' => 'ClinicController@update'])->name('clinic.update');

		Route::delete ('{id}', ['uses' => 'ClinicController@destroy'])->name('clinic.destroy');

	});

	Route::group(['prefix' => 'dentists'], function() {

		Route::get ('', ['uses' => 'DentistController@index']);

		Route::get ('add', ['uses' => 'DentistController@create']);

		Route::get ('{id}', ['uses' =>'DentistController@edit'])->name('dentist.edit');

		Route::post ('', ['uses' => 'DentistController@store'])->name('dentist.store');

		Route::put ('{id}', ['uses' => 'DentistController@update'])->name('dentist.update');
		
		Route::delete ('{id}', ['uses' => 'DentistController@destroy'])->name('dentist.destroy');

	});

