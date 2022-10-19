<?php

namespace App\Http\Controllers;
require('sendmail.php');
require('config.php');


/*-------------- payU ----------------------
include(dirname(_FILE_).'/config.php');*/

use Illuminate\Http\Request;
use App\Models\Product_Request;
use App\Models\User;
use App\Models\Products;
use App\pwdscripts\sendmail;

class ProductRequestController extends Controller
{
    public function create()
    {

        echo "im in AjaxController create";//simplemente haremos que devuelva esto
        
    }

    public function clickOnSent(Request $request){               
          
       

    // auth y saca el ID del consultor

    $idConsultant= auth()->id();


    // id_user y saca toda la información del Usuario: nombre, correo
        $user = User::find($request->idUser);
       

    // id_product y saca toda la información del Producto 

        $product = Products::find($request->product);
        
        $state = "0";

        
    // guarda en la DB el product Request
   
  

        $product_request = new Product_Request();  
        $product_request->idConsultant = $idConsultant;     
        $product_request->product = $product->id;
        $product_request->idUser =  $user->id;   
        $product_request->state = $state;    
        $product_request->save();

        $user ->state = 1;
        $user ->save();



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


   // devuelve la vista de las ventas del consultor

        // con el id_consultant se trae todos los product_request que tiene este consultor

        //devuelve la vista con ese array de los products request del consultor
        return redirect()->route('showallusers');
}



        public function sells()
        {
            $idConsultant= auth()->id();
            $showallsells = Product_Request::where("state", '=', 0)->where('idConsultant', '=', $idConsultant)->get();
                   
            return view('dashboard.consultantSells')->with('idConsultant', $idConsultant)->with('showallsells',$showallsells);

        }

        /* Metodo de pago */


        public function payButton(Request $request)
        
        {   

                        
                // auth y saca el ID del usuario

                $userId= auth()->id();
                $user = User::find()
                dd($userId =auth());
                $userEmail= auth()->email();
                $userName= auth()->name();
                $userPhone= auth()->phone();


            $data = array();
              //variables para pasar por data
              $data['accountId'] = $userId;
              $data['$referenceCode'] = 0;
              $data['$tecs2go_amount'] = 0;
              $data['$firmaMd5'] = 0;
              $data['$email_request'] = $userEmail;
              $data['$id_request'] = $userId;
              $data['$user_name'] = $userName;
              $data['$user_phone'] =  $userPhone;
              $data['$currency'] = 'USD';

              dd($data);

              return view('dashboard.studentPay')->with('data', $data);

             


        }

}