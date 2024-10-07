<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function finance(){

        $dept = Department::where('department', 'finance')->get();
   
        return view('frontend.departments.finance',compact("dept"));
    }

    public function environment(){

        $dept = Department::where('department', 'sanitation')->get();
   
        return view('frontend.departments.sanitation',compact("dept"));
    }
    public function enforcement(){

        $dept = Department::where('department', 'enforcement')->get();
   
        return view('frontend.departments.enforcement',compact("dept"));
    }
    public function urban(){

        $dept = Department::where('department', 'urban')->get();
   
        return view('frontend.departments.urban',compact("dept"));
    }
    public function fire(){

        $dept = Department::where('department', 'fire')->get();
   
        return view('frontend.departments.fire',compact("dept"));
    }
}
