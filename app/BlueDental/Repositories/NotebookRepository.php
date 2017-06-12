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


}