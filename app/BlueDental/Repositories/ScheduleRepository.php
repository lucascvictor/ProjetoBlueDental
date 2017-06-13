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

	public function store($request)
	{
		$schedule = new Schedule;
        $schedule->initial = $request->initial;
        $schedule->initial_lunch = $request->initial_lunch;
        $schedule->final = $request->final;
        $schedule->final_lunch = $request->final_lunch;
        $schedule->save();

	}

	
	public function destroy($id)
	{
		Schedule::where('id', $id)->delete();
		
	}
}