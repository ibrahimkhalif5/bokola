<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    public function index(){

        $tender = Tender::orderBy('created_at', 'desc')->paginate(10);
   
        return view('frontend.tenders',compact("tender"));
    }
}
