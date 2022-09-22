<?php

namespace App\Http\Controllers;

use App\Models\Chantier;
use App\Models\Employee;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creation de toutes les employees
        $managers=Manager::all();
       /*  $titre='Liste des Managers'; */
        return view('managers.create',compact('managers'));
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
        $employees=Employee::all();
        $managers=Manager::all();
        return view('managers.create',compact('managers','employees','chantiers'));

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
       
        Manager::create($request->all());
        return redirect('managers/create');
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
        /* $managers=Manager::find($id);
        return view('managers.show',compact('managers')); */
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
        $managers=Manager::find($id);
        return view('managers.edit',compact('managers','employees','chantiers'));
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
        $managers=Manager::find($id);
        $managers->update($request->all());
        return redirect()->route('managers.create')->with('notice','modify succefully');
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
        $managers=Manager::find($id);
        $managers->delete();
        return redirect()->route('managers.create');
    }
}
