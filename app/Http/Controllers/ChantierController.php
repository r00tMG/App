<?php

namespace App\Http\Controllers;

use App\Models\Chantier;
use Illuminate\Http\Request;

class ChantierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      
        return view('chantiers.create',compact('chantiers'));
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
        return view('chantiers.create',compact('chantiers'));
        
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
        Chantier::create($request->all());
        /* $image = $request->photo;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images',$name);
        $image_save = new Chantier;
        $image_save->name=$name;
        $image_save->save(); */
      return redirect('chantiers/create');

        
        
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
        $chantiers=Chantier::find($id);
        return view('chantiers.show',compact('chantiers'));

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
        $chantiers=Chantier::find($id);
        return view('chantiers.edit',compact('chantiers'));
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
        $chantiers=Chantier::find($id);
        $chantiers->update($request->all());
        return redirect()->route('chantiers.create')->with('notice','modify succefully');

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
        $chantiers=Chantier::find($id);
        $chantiers->delete();
        return redirect()->route('chantiers.create');
    }
}
