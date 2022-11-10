<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\user_payment;
use App\Models\Feedback;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /*
    Funcion para todos los estudiantes activos (user type=1 , payment:4), botos para generar comentario.
    */

    public function ShowAllStudents()
    {

               
        $shoStudents = user_payment::where("status", '=', 4)->get();
        return view('dashboard.teacherStudentsView')->with('shoStudents', $shoStudents);

    }

    public function sendFeedback(Request $request){
        // El request que definimos como parametro no se debe definir de nuevo porque ya lo traemos en la funcion

        // Traigo de la vista el id_payment 
        $data = $request->data;

        $feedback = new Feedback();  
        $feedback->comentario = $request ->comentario;
        $feedback->flag = 1;
        $feedback->save();

        $result = "FeedBack Enviado";  

        return response()->json($result);


    
    }
    

}
