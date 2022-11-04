<?php

namespace App\Http\Controllers;
require('sendmail.php');

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\pwdscripts\sendmail;

use App\Models\Product_Request;
use App\Models\Products;

class firstRegister extends Controller
{
    public function firstRegister(Request $request){
        
        // validar si existe el usuario
        $user = User::find($request->email);

        //if ya existe entonces no lo registro y le muestro un msj que revise el correo porque ya existe 
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

        
    // arma el correo electrónico .$user->password.
        //$email_consultor = $row_total["email"];
        $to = $user->email;

        $subject = 'Gracias por registrarte a TECS ACADEMY';
        $htmlBody = '<p style="font:Arial, sans-serif; color: #191919;">
              Estás a punto de comenzar a aprender, inicia sesión con las siguientes credenciales : <br/><br/>

              <b>ID Number</b>: '.$user->email.'<br/><br/>
              <b>Password</b>:  Password <br/><br/> 
              Haz clic en el siguiente enlace para iniciar el TECS INTRO.<br/><br/>
              <a href="http://localhost/tecsacademy/public/login">ILTOEXAMS TECS TO GO.</a><br/><br/>
              banner publicitario</p>
              Support Team - ILTO<br/>
              <img src="https://iltoexams.com/logo_ILTO.png" alt="iltoexams"></p>';


              //send email
              $dat = "{From: 'noreply@iltoexams.com', To: '$to', Cc:'tecs2go@iltoexams.com', Subject: '$subject', HtmlBody: '$htmlBody'}";//array('From' => 'noreply@iltoexams.com', 'To'=>'dokho_02@hotmail.com', 'Subject'=>'Hola Chris Fer', 'HtmlBody'=>'<strong>Hello</strong> dear Postmark user.');
              
             sendEmail($dat); 

    // envia el correo electrónico
        //devuelve la vista "stage" donde enviara al usuario a revizar el correo


        //Se llena la tabla del product request

        
    // auth y saca el ID del consultor

        $idConsultant= "1518"; // Defino codigo de usuario por default       

    // id_product y saca toda la información del Producto 

        /* $product = Products::find($request->id_product); */
            
    // guarda en la DB el product Request 
  

        $product_request = new Product_Request();  
        $product_request->idConsultant = $idConsultant;     
        $product_request->product = 1;
        $product_request->idUser =  $user->id;   
        $product_request->state = 0;    
        $product_request->save();

        //el usuario cambia a estado 1 porque ya se interesó por un producto
        $user ->state = 1;
        $user ->save();
        

        return redirect()->route('stage');

    }
}
