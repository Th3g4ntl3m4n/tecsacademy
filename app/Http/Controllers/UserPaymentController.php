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

    /*
    public function teacher()
    {
        
        $teacher_list = user_payment::where("status", '=', 4)->get();
        $user = User::find("name");
               
        return view('dashboard.teacherStudentsView')->with('teacher_list', $teacher_list)->with('User', $user);

    }
    */

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


    /*
    * CONFIRMAR PAGO PENDIENTE
    *
    */

    public function ClickonConfirmation(Request $request) {

         //$_REQUEST todo lo que sea con esta variable es Ajax
        
        $payment_id= $request->id_payment;     
                        
        //debo traerme el objeto que voy a actualizar, no es crear un nuevo objeto
        $payment  = user_payment::find($payment_id);
        $payment ->status = 4;      
       
        $payment->save();

        $result = "Payment Aprobbed!";  

      return response()->json($result);
    }

    
    /*
    *
     Funcion para denegar pago pedniente
    *
    */

    public function cliconDenegate(Request $request){
        // El request que definimos como parametro no se debe definir de nuevo porque ya lo traemos en la funcion

        // Traigo de la vista el id_payment 
        $payment_id = $request->id_payment;

        $payment = user_payment::find($payment_id);
        $payment ->status = 6; 
        
        $payment->save();
        $result = "Payment refused!";  

        return response()->json($result);


    
    }




}
