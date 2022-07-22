<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\student;
use App\Models\teacher;

class departmentController extends Controller
{
    function departmentName(){
        $dept = department::all();

        return view('home')->with('dept', $dept);
    }

    function deptInfo(Request $req){
        $d = department::where('department_id', '=', $req->department_id)->first();
        return view('deptDetail')->with('d', $d);
    }
    
}
