<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    /* public function serchView()
    {
        return view();
    } */
    public function search(Request $request)
    {
        $get_name=$request->search_name;
        $employees = Employee::where('nom','LIKE','%'.'$get_name'.'%')->get();
        return view('employees.create',compact('employees'));
    }
}
