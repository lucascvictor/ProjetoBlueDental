<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BlueDental\Repositories\DentistRepository;

class HomeController extends Controller
{

	public function index()
	{
		return view('home');
	}

}