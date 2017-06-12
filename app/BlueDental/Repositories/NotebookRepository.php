<?php

namespace App\BlueDental\Repositories;

use App\Http\Requests;

use App\BlueDental\Models\Notebook;

use DB;

use DateTime;

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
		$this->data = new DateTime(date("d-m-Y H:i:s"));
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

	public function store($request)
	{
		$result = $this->verify($request);

		if ($result == false) {
			$notebook = new Notebook;
			$notebook->clinic_id = $request->clinic;
	        $notebook->dentist_id = $request->dentist;
	        $notebook->schedule_id = $request->schedule;
	        $notebook->rotation_id = $request->rotation;
	        $notebook->created_at = $this->getData();
	        $notebook->updated_at = $this->getData();
	        $notebook->save();
		}
		

	}

	public function verify($request)
	{
		$retorno = DB::table('notebook')->select('*')->where([['clinic_id', '=', $request->clinic],['dentist_id', '=', $request->dentist],['rotation_id', '=', $request->rotation],['schedule_id', '=', $request->schedule]])->get();
		return isset($retorno[0]->id);
	}

	public function destroy($id)
	{
		Notebook::where('id', $id)->delete();
	
	}


}