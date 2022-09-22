<?php

namespace App\Http\Controllers;

use App\Models\Phase;
use App\Models\Chantier;
use App\Models\Employee;
use Illuminate\Http\Request;

class PhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $phases=Phase::all();
        return view('phases.create',compact('phases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $chantiers=Chantier::all();
        $phases=Phase::all();
        return view('phases.create',compact('phases','chantiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Phase::create($request->all());
        return redirect('phases/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $employees=Employee::all();
        $chantiers=Chantier::all();
        $phases=Phase::find($id);
        return view('phases.edit',compact('phases','chantiers'));
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
        $phases=Phase::find($id);
        $phases->update($request->all());
        return redirect()->route('phases.create');

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
        $phases=Phase::find($id);
        $phases->delete();
        return redirect()->route('phases.create');
    }
}
