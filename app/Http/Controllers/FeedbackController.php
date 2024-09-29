<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){

        return view('frontend.contact');
        
    }
    public function store(Request $request) {
        $msg = new Feedback();
        
        $msg->fullname = $request->input('fullname');
        $msg->email = $request->input('email');
        $msg->subject = $request->input('subject');
        $msg->message = $request->input('message');
    
        $msg->save();
        $request->session()->flash('success', 'Message Received. Thank you!');


    
    return redirect('/contact_us');
    }
}
