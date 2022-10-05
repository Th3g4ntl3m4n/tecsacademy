<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class firstRegister extends Controller
{
    public function firstRegister(Request $request){

        $type = 1;
             
        $request->validate([    
            'name' => 'required',        
            'phone' => 'required',
            'contry' => 'required',
            'email' => 'required',
            
            
        ]);    
        $user = new User();  
        $user->name = $request ->name;     
        $user->phone = $request ->phone;
        $user->contry = $request ->contry;
        $user->email = $request ->email;
        $user->type = $type;
        $user->save();

        return redirect()->route('home');

    }
}
