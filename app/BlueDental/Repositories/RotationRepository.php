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

}