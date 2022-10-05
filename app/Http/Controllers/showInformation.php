<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class showInformation extends Controller
{

    //Show all users that state be 0, to send firts email
    public function ShowAllUsers(){
        $showallusers = User::where("state", '=', 0)->get();       
        return view('dashboard.showallusers')->with('showallusers', $showallusers);
    }
}
