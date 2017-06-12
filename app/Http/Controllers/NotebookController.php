<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BlueDental\Repositories\NotebookRepository;
use App\BlueDental\Repositories\DentistRepository;
use App\BlueDental\Repositories\ClinicRepository;
use App\BlueDental\Repositories\RotationRepository;
use App\BlueDental\Repositories\ScheduleRepository;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebook = new NotebookRepository();
        
        return view('notebook.index')->with('notebooks', $notebook->getAll());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notebook = new NotebookRepository();
        $dentist = new DentistRepository();
        $clinic = new ClinicRepository();
        $rotation = new RotationRepository();
        $schedule = new ScheduleRepository();
        return view('notebook.create')->with('notebooks', $notebook->getAll())->with('dentists', $dentist->getAll())->with('clinics', $clinic->getAll())->with('rotations', $rotation->getAll())->with('schedules', $schedule->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notebook = new NotebookRepository();
        $notebook->store($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
