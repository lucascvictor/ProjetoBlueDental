<?php

namespace App\BlueDental\Repositories;

use App\Http\Requests;

use App\BlueDental\Models\Dentist;

use DB;

class DentistRepository
{

	public function getAll()
	{
		return Dentist::all();
	}

	public function store($request)
	{
		$dentist = new Dentist;
        $dentist->name = $request->name;
        $dentist->crosp = $request->crosp;
        $dentist->save();

	}

	public function destroy($id)
	{
		Dentist::where('id', $id)->delete();
		
	}

	public function getDentist($id)
	{
		return Dentist::find($id);
	}

}