<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(){

        $doc=Document::get();
   
        return view('frontend.downloads',compact("doc"));
        
    }
}
