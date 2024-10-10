<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function home(){

        
        $gal = Gallery::latest()->take(10)->get();
        $event = Event::latest()->take(8)->get();
        
   
        return view('frontend.home',compact("gal","event"));
    }

    public function gallery(){

        
        $gal = Gallery::latest()->take(15)->get();
   
        return view('frontend.gallery',compact("gal"));
    }

    public function aboutus(){

     
        return view('frontend.background');
    }

   
}
