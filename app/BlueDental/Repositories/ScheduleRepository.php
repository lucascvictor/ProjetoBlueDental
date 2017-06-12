<?php

namespace App\BlueDental\Repositories;

use App\Http\Requests;

use App\BlueDental\Models\Schedule;

use DB;

class ScheduleRepository
{

	public function getAll()
	{
		return Schedule::all();
	}
}