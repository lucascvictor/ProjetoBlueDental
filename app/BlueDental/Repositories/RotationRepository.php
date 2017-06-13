<?php

namespace App\BlueDental\Repositories;

use App\Http\Requests;

use App\BlueDental\Models\Rotation;

use DB;

class RotationRepository
{

	public function getAll()
	{
		return Rotation::all();
	}

	public function store($request)
	{
		$escala = $request->seg . " " . $request->ter . " " . $request->qua . " " . $request->qui . " " . $request->sex . " " . $request->sab . " " . $request->dom;
		$rotation = new Rotation;
        $rotation->rotation = $escala;
        $rotation->save();
	}

	public function destroy($id)
	{
		Rotation::where('id', $id)->delete();
		
	}
}