<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_payment;
use App\Models\User;

class UserPaymentController extends Controller
{
    
    public function counter()
    {
        
        $user_payment = user_payment::where("status", '=', 7)->get();
        $user = User::find("name");
               
        return view('dashboard.counterView')->with('user_payment', $user_payment)->with('User', $user);

    }

    //Funcion para mostrar los estudiantes en la vista teacherStudentsView que el pago (status) sea iguala 4, instanciamos el modelo del user_payment

    public function teacher()
    {
        
        $teacher_list = user_payment::where("status", '=', 4)->get();
        $user = User::find("name");
               
        return view('dashboard.teacherStudentsView')->with('teacher_list', $teacher_list)->with('User', $user);

    }

     //Funcion para mostrar los pagos aprobados en la vista counterAprobed el pago (status) sea iguala 4, instanciamos el modelo del user_payment

     public function counterAprobed()
     {
         
         $counter_aprobed = user_payment::where("status", '=', 4)->get();
         $user = User::find("name");
                
         return view('dashboard.counterAprobed')->with('counter_aprobed', $counter_aprobed)->with('User', $user);
 
     }

       //Funcion para mostrar todos los pagos aprobados en la vista counterAllPays el pago (status) sea iguala 4, instanciamos el modelo del user_payment

       public function counterAllPays()
       {           
           $counter_allpays = user_payment::all();
           $user = User::find("name");                  
           return view('dashboard.counterAllPays')->with('counter_allpays', $counter_allpays)->with('User', $user);
   
       }


    public function ClickonConfirmation() {

        $user_payment = new user_payment();
        $user_payment ->status = 4;
        $user_payment ->save();
    }

}
