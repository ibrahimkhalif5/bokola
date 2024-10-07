<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $project=Project::latest()->take(6)->get();
    
        return view('frontend.projects',compact("project"));
        
    }
}
