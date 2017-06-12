<?php

namespace App\BlueDental\Repositories;

use App\Http\Requests;

use App\BlueDental\Models\Notebook;

use DB;

class NotebookRepository
{

	protected $data;

	public function __construct()
	{
		$this->setData();
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData()
	{
		$this->data = date("d-m-Y H:i:s");
	}

	public function getAll()
	{
		return DB::table('notebook')
		->join('dentists', 'dentists.id', '=', 'notebook.dentist_id' )
		->join('clinics', 'clinics.id', '=', 'notebook.clinic_id' )
		->join('rotations', 'rotations.id', '=', 'notebook.rotation_id' )
		->join('schedules', 'schedules.id', '=', 'notebook.schedule_id' )
		->select('clinics.name as clinic', 'dentists.name as dentist', 'rotations.rotation as rotation', 'schedules.initial as initial', 'schedules.final as final', 'schedules.initial_lunch as initial_l', 'schedules.final_lunch as final_l')
		->orderBy('dentists.name', 'asc')
		->paginate(6);
	}


}