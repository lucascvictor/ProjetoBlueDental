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

	public function destroy($id)
	{
		Clinic::where('id', $id)->delete();
		
	}

	public function getClinic($id)
	{
		return Clinic::find($id);
	}


}