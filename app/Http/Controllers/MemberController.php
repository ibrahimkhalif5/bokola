<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    public function index(){

        $member=Member::where('member_type', 'board')->get();
   
        return view('frontend.members',compact("member"));
    }

    public function management(){

        $member=Member::where('member_type', 'management')->get();
   
        return view('frontend.management',compact("member"));
    }
}
