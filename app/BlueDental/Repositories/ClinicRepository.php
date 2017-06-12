<?php

namespace App\BlueDental\Repositories;

use App\Http\Requests;

use App\BlueDental\Models\Clinic;

use DB;

class ClinicRepository
{

	public function getAll()
	{
		return Clinic::all();
	}

	public function store($request)
	{
		$clinic = new Clinic;
        $clinic->name = $request->name;
        $clinic->adress = $request->adress;
        $clinic->save();

	}

}