<?php

use App\Models\Product_Request;
use App\Models\User;
use App\Models\Products;
use App\Models\user_payment;
use App\pwdscripts\sendmail;

// Include varible file config.php

$url = 'https://checkout.payulatam.com/ppp-web-gateway-payu/'; // Producción
	//$url = 'https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/'; // Sandbox
	
	$ApiKey = 'dIHtIJW8fs64q414hiVrg25h66'; // Obtener este dato dela cuenta de Payu
	$merchantId = '848807'; // Obtener este dato dela cuenta de Payu
	$accountId = '856322'; // Obtener este dato dela cuenta de Payu
	//$description = 'payUtecs2go'; //Descripción del pedido
	$referenceCode = 'tecs2go001'; // Referencia Unica del pedido
	//$amount = '12000'; //Es el monto total de la transacción. Puede contener dos dígitos decimales. Ej. 10000.00 ó 10000.
	$tax = '0'; // Es el valor del IVA de la transacción, si se envía el IVA nulo el sistema aplicará el 19% automáticamente. Puede contener dos dígitos decimales. Ej: 19000.00. En caso de no tener IVA debe enviarse en 0.
	$taxReturnBase = '0'; // Es el valor base sobre el cual se calcula el IVA. En caso de que no tenga IVA debe enviarse en 0.
	//$currency = 'USD'; // Moneda
	$test = '0'; // Variable para poder utilizar tarjetas de crédito de pruebas, los valores pueden ser 1 ó 0.
	//$buyerEmail = 'test@test.com'; // Respuesta por Payu al comprador
	$responseUrl = 'https://iltoexams.com/ilto3/tecs-academy/view/payment-response.php'; // URL de respuesta,
	$confirmationUrl = 'https://iltoexams.com/ilto3/tecs-academy/view/payment-confirmation.php';


// auth y saca el ID del usuario logueado
    $userId= auth()->id();
    $user = User::find($userId);  

 
  // me traigo el producto que solicitó el usuario y que no ha pagado, para mostrarle un botón BIEN GRANDE DE PAGAR
  $product_request = Product_Request::where('idUser', '=', $user->id)->where('state', '=', 0)->get();  
  $product=Products::find($product_request[0]["product"]);
    
  

    ///llamar el product_request que tiene este usuario l
   // con el product request, ud obtiene el ID del producto
   // con el ID del producto, ud obtiene Toda la información del producto

       
    $referenceCode = 0;
    $amount = $product->price;
    $firmaMd5 = 0;
    $email_request = $user->email;
    $id_request = $userId;

    //Variables transaccion
    $payU_flag = 0;
    $id_taker = $userId;
    $id_request = $product_request[0]["id"];
    

    $payment = user_payment::where('id_user', '=', $userId )->where('id_request','=',$product_request[0]["id"])->get();   
    

?>

<!-- Stilos propios para pagina student.blade -->


<style>
        p{
            font-size: 14px;
            color: #fff;
        }
		.colorBody {
		    background-color: #303956;
            padding:5px;
		}

        /*Contenedor del countdown*/
.demo{
    display: flex;
    align-items: center;
    width: 125px;
    height: 125px;
    margin: auto;
}
/*Elementos de primera linea*/
.demo p{
    text-align: center;
    color: aliceblue;
    font-weight: bold;
    background: linear-gradient(to top, #005c97, #363795); 
    margin: 3px;
    font-size: 18px;
    padding: 12px;
    border-radius: 12px;
    width: 100%;
    cursor: pointer;
}
/*Elementos de segunda linea*/
.demo p span{
    font-weight: normal;
    font-size: 12px;
}
/*Clases para cada elemento*/
/*Clase para elementos de primera linea*/
.demo .d,
.demo .h,
.demo .m,
.demo .s{}
/*Clase para elementos de segunda linea*/
.demo .d span,
.demo .h span,
.demo .m span,
.demo .s span{}


/*SUSCRIBETE A SCRIPT CODE*/
/*SUSCRIBETE A SCRIPT CODE*/
.suscribete{
    position: relative;
    height: 10%;
}
.suscribete a{
    text-align: center;
    margin: auto;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    height: 35px;
    width: 300px;
    color: aliceblue;
    font-size: 22px;
    border-radius: 8px;
    padding: 4px;    
    background: linear-gradient(45deg,red 40%,#5411d3,#9711d3);
    
    
}

</style>

@if(count($payment)>0)
@switch($payment[0]["status"])
        @case(4):
            <div class="container">
                <div class="row">
                    <div class="col-6">

                    <!-- Tarjeta izquierda -->
                        <div class="colorBody" style="padding:30px">
                            <h3 Style="color:#fff; ">Preparate para aprender</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>                          
                            
                            <div class="row">                                
                                    <div class="col-md-4 position-relative">
                                        <!-- Contador -->
                                        <!--Pequeño titulo-->
                                            <h3 Style="color:#fff; font-size:20px">Tu clase empezará en :</h3>
                                            <!--Contenedor del countdown-->
                                            <div id="demo" class="demo"></div> 
                                            <!--Contenedor visible al finalizar el countdown-->
                                            <div id="info" class="info"></div>
                                    </div>                                
                                <div class="col position-relative bottom-0 start-50 translate-middle-x" style="left: 80px;">
                                    <img src="{{ asset('images/tecsacademy/Estudiante2.png')}}" style="width:250px; height:350px;" alt="">
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            
                        </div>
                        
                    </div>
                    <!-- End Tarjeta izquierda -->

                    <!--  Tarjeta Derecha -->

                    <div class="col-6">
                        <img src="{{ asset('images/tecsacademy/TecsIntro.jpg')}}" style="width:500px;">
                    </div>

                    <!-- End Tarjeta Derecha -->
                </div>
            </div>
            <div class="container">
            <br>
            <br>
    <h3>Contactanos</h3>
            
                    <div class="row">
                        <div class="col-6">
                            <a href="https://api.whatsapp.com/send?phone=+573154989811&text=%3C%3C%20Hola!,%20Quisiera%20solicitar%20soporte%20tecnico%20para%20mi%20programa%20TECS%20INTRO%20%3E%3E">
                                <img src="{{ asset('images/tecsacademy/callUs.jpg')}}" class="" style="width: 350px; heigth: 350px; border-radius: 10% 30% 50% 70%;" alt="Advisor">                                 
                            </a>                            
                        </div>                        
                        <div class="col-6">
                            <a href="https://api.whatsapp.com/send?phone=+573154989811&text=%3C%3C%20Hola!,%20Quisiera%20solicitar%20soporte%20tecnico%20para%20mi%20programa%20TECS%20INTRO%20%3E%3E">
                        <img src="{{ asset('images/tecsacademy/teacher.jpg')}}" class="justify-content-center" style="width: 350px; heigth: 350px; border-radius: 10% 30% 50% 70%;" alt="Teacher">
                            
                            </a>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center ">Advisor</h3>
                        </div>                        
                        <div class="col-6">
                            <h3 class="text-center ">Teacher</h3>               
                        </div>
                        
                    </div>
            
</div>

<br>
<br>

        @break
        @case(6):
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="colorBody">
                            <h3 Style="color:#fff;">¡Tú pago está siendo verificado!</h3>
                            <p>Un agente de Tecs Academy verificará tu pago muy pronto, te notificaremos por correo.</p>
                            <br>
                            <br>
                            
                        </div>
                        <div class="" id="cuenta"></div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/tecsacademy/TecsIntro.jpg')}}" style="width:500px;">
                    </div>
                </div>
            </div>
            <div class="container">
    <h3>Contactanos</h3>
            
                    <div class="row">
                        <div class="col-6">
                            <a href="https://api.whatsapp.com/send?phone=+573154989811&text=%3C%3C%20Hola!,%20Quisiera%20solicitar%20soporte%20tecnico%20para%20mi%20programa%20TECS%20INTRO%20%3E%3E">
                                <img src="{{ asset('images/tecsacademy/callUs.jpg')}}" class="" style="width: 350px; heigth: 350px; border-radius: 10% 30% 50% 70%;" alt="Advisor">                                 
                            </a>                            
                        </div>                        
                        <div class="col-6">
                            <a href="https://api.whatsapp.com/send?phone=+573154989811&text=%3C%3C%20Hola!,%20Quisiera%20solicitar%20soporte%20tecnico%20para%20mi%20programa%20TECS%20INTRO%20%3E%3E">
                        <img src="{{ asset('images/tecsacademy/teacher.jpg')}}" class="justify-content-center" style="width: 350px; heigth: 350px; border-radius: 10% 30% 50% 70%;" alt="Teacher">
                            
                            </a>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center ">Advisor</h3>
                        </div>   
                        
                    </div>
            
</div>

<br>
<br>

        @break
        @case(7):
            <div class="container">

            <h1>Hello {{ auth()->user()->name}}</h1>
            <h2>¿Conoces nuestro curso TECS INTRO?</h2>

            <div class="container text-center">
                        <div class="row">
                                        <div class="col">
                                        <a href="{{ route('tecsintro')}}">
                                        <img src="{{ asset('images/tecsacademy/TecsIntro.jpg')}}"  width ="350px"  alt="...">
                                        </a>
                                        </div>
                                        <div class="col">
                                                <br>
                                        <!-- <p class="fs-1">Es un curso basado en la experiencia de los evaluadores de la compañía ILTO ( International Language Testing Organization) la intención de este curso es brindar a los tomadores las herramientas necesarias para llegar mejor preparado a la prueba internacional TECS</p>-->


<div class="container">
<!-- inicio Boton pay u -->

<!--']
        <div class="row" style="text-align:center;">
                            
                            <div class="col-xs-5 col-sm-5 col-md-5">
                                <div class="form-group">
-->
                                    <?php
                                        if($payU_flag == 0 ){
                                           
                                            $currency = $product->currency;
                                            $referenceCode = $id_taker."_".$id_request."_".strtotime(date("h:i:s"));
                                        
                                            $firma = "$ApiKey~$merchantId~$referenceCode~$amount~$currency";
                                            $firmaMd5 = md5($firma);
    
                                            ?>
                                            
                                            <div class="form-group"><br>
                                                    <!-- <img src="/ilto3/images/tecs-intro.png" alt="TECS-INTRO"><br><br> -->
                                                    <h3><b>TECS INTRO</b></h3>
                                                     <p style="text-align:justify;">Es un curso basado en la experiencia de los evaluadores de la compañía ILTO ( International Language Testing Organization) la intención de este curso es brindar a los tomadores las herramientas necesarias para llegar mejor preparado a la prueba internacional TECS<br><br></p>
                                                     <a href="{{ route('termsAndConditions')}}">Terminos y condiciones</a>
                                                        
                                                        <div id="payU-form">
                                                          
                                                            <input name="apikey" id="apikey" type="hidden"  value="<?php echo $ApiKey; ?>" >
                                                            <h3><span>${{ number_format($product->price) }} <?php $currency ?></span></h3> <!-- echo $prices["currency"] --> 
                                                        <!--    <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                                                            <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">-->
                                                                <form method="post" action="<?php echo $url; ?>">
                                                                 <input name="merchantId" id="merchantId" type="hidden"  value="<?php echo $merchantId; ?>" >
                                                                  <input name="accountId"  type="hidden"    value="<?php echo $accountId; ?>" >
                                                                  <input name="description" type="hidden"   value="{{ $product->nameProduct }}" >
                                                                  <input name="referenceCode" id="referenceCode" type="hidden"  value="<?php echo $referenceCode; ?>" > <!-- -->
                                                                  <input name="amount" id="amount" type="hidden"        value="<?php echo $amount; ?>" >        <!-- -->
                                                                  <input name="tax"     type="hidden"       value="<?php echo $tax; ?>" >
                                                                  <input name="taxReturnBase" type="hidden" value="<?php echo $taxReturnBase; ?>" >
                                                                  <input name="currency" id="currency" type="hidden"        value="<?php echo $currency; ?>" >
                                                                  <input name="signature"  id="signature"  type="hidden"    value="<?php echo $firmaMd5; ?>" >
                                                                  <input name="test"    type="hidden"       value="<?php echo $test; ?>" >
                                                                  <input name="buyerEmail"  type="hidden"    value="<?php echo $user->email; ?>" > <!-- echo $tecs_intro_request["email"] ?> -->
                                                                  <input name="payerDocument" type="hidden" id="payerDocument"  value="<?php echo $user->id; ?>" > <!-- $tecs_intro_request["id_user"] ?> -->
                                                                  <input name="buyerFullName" type="hidden"  value="<?php echo  $user->name; ?>" > <!-- utf8_encode($tecs_intro_request["nombres"])." ".utf8_encode($tecs_intro_request["apellidos"]) -->
                                                                  <input name="mobilePhone" type="hidden"  value="<?php echo $user->phone; ?>" > <!-- $client["telefono"] -->
                                                                  <input name="telephone" type="hidden"  value="<?php echo $user->phone; ?>" > <!-- $client["telefono"] -->
                                                                  <input name="shippingAddress" type="hidden"  value="None" >
                                                                  <input name="shippingCity" type="hidden"  value="BOGOTA" >
                                                                  <input name="shippingCountry" type="hidden"  value="COL" >
                                                                  <input name="confirmationUrl" type="hidden" value="<?php echo $confirmationUrl; ?>" >
                                                                 <!-- Cambio --><input name="Submit"  class="btn btn-primary" type="submit"  value="Pagar en Línea" > 
                                                            </form>
                                                        </div>
                                                
                                            </div>
                                            <?php
                                        }else{
                                            if($payU_flag == 1){


                                                ?>
                                                <div class="info_container" >
                                                    <img src="/ilto3/images/tecs-intro.png" alt="TECS-INTRO"><br><br>
                                                    <h3><b>TECS INTRO</b></h3>
                                                     <p style="text-align:justify;">Este curso está diseñado para familiarizarse con la prueba antes de tomarla y conocer su metodología, solucionar dudas, prepararse con los recursos adecuados, entender el formato de las  preguntas de cada una de las habilidades y lograr que su prueba sea todo un éxito.<br><br></p>
                                                     <h3 class="btn btn-danger" style="margin:auto;cursor:none;font-size: 14px !important;font-weight: 700;">Este NO es un curso de Inglés,<br>es un curso de preparación para el examen TECS.</h3><br><br><br>
                                                     <div style="text-align:left;">
                                                <?php
                                                    if($row_payment['status'] == 4){
                                                        echo '<h3><small>Lunes, miércoles y viernes (Intermedio).<br>
                                                            Martes, jueves y sábados. (Básico).</small></h3>
                                                        <p><label><b>Opción 1:</b>  09:00 AM a 11:00 AM <br>';
                                                        
                                                
                                                        $status = "TRANSACCIÓN APROBADA";
                                                        //get selected date for TECS INTRO 
                                                        //checking if there is a tecs2go payment
                                                        $SQL = "SELECT * FROM `tecs_academy_dates` WHERE `id_tecs_academy` = '".$id_tecs_academy."' AND type= 0";
                                                        $dates = mysqli_query($conn, $SQL);
                                                        $row_date=mysqli_fetch_assoc($dates);
                                                        
                                                        //show selected date or show button to select the date
                                                        if(!isset($row_date["id_tecs_academy_date"])){
                                                            
                                                                /*$btn_dates_pick = '<br><a href="/ilto3/tecs-academy/view/tecs-intro-date.php?id='.base64_encode($id_request).'"  class="btn btn-success" id="date_select">Seleccionar Fechas</a>  <img src="/ilto3/proctorv/img/nuevo.png" title="Ir a Selección de Fechas" width="32"><br><br>';       */

                                                                echo $dates_available;
                                                                //echo $btn_dates_pick;
                                                                echo $aditional_info;
                                                        }else{
                                                            $btn_dates_pick = '<h3>Por favor envia el comprobante de pago a alguno de los siguientes numeros de WhatsApp para continuar con tu proceso de registro.</h3>
                                                            <h3><small>Lunes, miércoles y viernes (Intermedio).<br>
                                                            Martes, jueves y sábados. (Básico).</small></h3> '; 
                                                            $full_date = explode(" ",$row_date["date_selected"]);
                                                            if($full_date[1] == '09:00:00'){
                                                                echo '<p><b>Horario seleccionado: </b> De 09:00 AM a 11:00 AM</p>';
                                                            }
                                                            if($full_date[1] == '20:00:00'){
                                                                echo '<p><b>Horario seleccionado: </b> De 08:00 PM a 10:00 PM</p>';
                                                            }
                                                            echo '<br>';
                                                        }
                                                    
                                                        
                                                        
                                                        ?>
                                                        
                                                        <h3>Pago registrado via PAYU</h3>
                                                        <ul>
                                                    <li><b>Estado de la transaccion:</b> 
                                                    <?php
                                                    }
                                                    if($row_payment['status'] == 7){
                                                        $status = "TRANSACCIÓN PENDIENTE";
                                                        $aditional_info= '<small>Por favor envia el comprobante de pago a alguno de los siguientes numeros de WhatsApp para continuar con tu proceso de registro.</small> '; 
                                                        $alert = "<span style='color:#d9534f'>Cuando realice el pago, por favor comuníquese con ILTO Colombia para habilitar la selección de fechas:<br>
                                                                    WhatsApp: + 310 364 4355 (No recibe llamadas)<br>
                                                                    Oficina: 307 3343 (Bogotá, Colombia).</span>";
                                                        $btn_dates_pick = "";
                                                    }
                                                    echo $status;
                                                    ?>
                                                    </li>
                                                    <li><b>ID de la transaccion:</b> <?php echo $row_payment['id_transaction']; ?></li>
                                                    <li><b>Fecha de la transaccion:</b> <?php echo $row_payment['date_generate']; ?></li>
                                                    <li><b>Referencia de la venta:</b> <?php echo $row_payment['bank']; ?></li>
                                                    <li><b>Referencia de la transaccion:</b> <?php echo $row_payment['sell_reference']; ?></li>
                                                    <li><b>Valor: </b> $400.000 <?php echo $row_payment['CURRENCY']; ?></li>
                                                </ul>
                                                 
                                                <?php
                                                
                                                echo $alert;
                                                ?>
                                                </div>
                                                </div>
                                                <?php
                                            }
                                                
                                        }
                                    ?>
                                    
                                </div>
                                
                                
                            </div>
                            <!-- end boton payU -->

                            </div>


                                       <!--  <button type="submit" class="btn btn-primary"><a href="{{ route('payButton')}}">Suscribete</a></button> -->
                                        </div>
                                        </div>
                                        <br>

                                        <!-- Tal vez te interece -->     
                                        <br>
                                        <h3>Tal vez te pueda interezar</h3>

                                        <div class="row">
                                       
                                                <div class="col">
                                                1 of 3
                                                </div>
                                                <div class="col">
                                                2 of 3
                                                </div>
                                                <div class="col">
                                                3 of 3
                                                </div>
                                        
                                        </div>
                        </div>
</div>
<br>
<br>

        
        @break
            
@endswitch

<!-- Muetra primeravista en dashboad del estudiante dependiendo de su metodo de pago -->


<br>
<br>

@else
<div class="container">

<h1>Hello {{ auth()->user()->name}}</h1>
<h2>¿Conoces nuestro curso TECS INTRO?</h2>

<div class="container text-center">
            <div class="row">
                            <div class="col">
                            <a href="{{ route('tecsintro')}}">
                            <img src="{{ asset('images/tecsacademy/TecsIntro.jpg')}}"  width ="350px"  alt="...">
                            </a>
                            </div>
                            <div class="col">
                                    <br>
                            <!-- <p class="fs-1">Es un curso basado en la experiencia de los evaluadores de la compañía ILTO ( International Language Testing Organization) la intención de este curso es brindar a los tomadores las herramientas necesarias para llegar mejor preparado a la prueba internacional TECS</p>-->


<div class="container">
<!-- inicio Boton pay u -->

<!--']
<div class="row" style="text-align:center;">
                
                <div class="col-xs-5 col-sm-5 col-md-5">
                    <div class="form-group">
-->
                        <?php
                            if($payU_flag == 0 ){
                               
                                $currency = $product->currency;
                                $referenceCode = $id_taker."_".$id_request."_".strtotime(date("h:i:s"));
                            
                                $firma = "$ApiKey~$merchantId~$referenceCode~$amount~$currency";
                                $firmaMd5 = md5($firma);

                                ?>
                                
                                <div class="form-group"><br>
                                        <!-- <img src="/ilto3/images/tecs-intro.png" alt="TECS-INTRO"><br><br> -->
                                        <h3><b>TECS INTRO</b></h3>
                                         <p style="text-align:justify;">Es un curso basado en la experiencia de los evaluadores de la compañía ILTO ( International Language Testing Organization) la intención de este curso es brindar a los tomadores las herramientas necesarias para llegar mejor preparado a la prueba internacional TECS<br><br></p>
                                         <a href="{{ route('termsAndConditions')}}">Terminos y condiciones</a>
                                            
                                            <div id="payU-form">
                                              
                                                <input name="apikey" id="apikey" type="hidden"  value="<?php echo $ApiKey; ?>" >
                                                <h3><span>${{ number_format($product->price) }} <?php $currency ?></span></h3> <!-- echo $prices["currency"] --> 
                                            <!--    <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                                                <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">-->
                                                    <form method="post" action="<?php echo $url; ?>">
                                                     <input name="merchantId" id="merchantId" type="hidden"  value="<?php echo $merchantId; ?>" >
                                                      <input name="accountId"  type="hidden"    value="<?php echo $accountId; ?>" >
                                                      <input name="description" type="hidden"   value="{{ $product->nameProduct }}" >
                                                      <input name="referenceCode" id="referenceCode" type="hidden"  value="<?php echo $referenceCode; ?>" > <!-- -->
                                                      <input name="amount" id="amount" type="hidden"        value="<?php echo $amount; ?>" >        <!-- -->
                                                      <input name="tax"     type="hidden"       value="<?php echo $tax; ?>" >
                                                      <input name="taxReturnBase" type="hidden" value="<?php echo $taxReturnBase; ?>" >
                                                      <input name="currency" id="currency" type="hidden"        value="<?php echo $currency; ?>" >
                                                      <input name="signature"  id="signature"  type="hidden"    value="<?php echo $firmaMd5; ?>" >
                                                      <input name="test"    type="hidden"       value="<?php echo $test; ?>" >
                                                      <input name="buyerEmail"  type="hidden"    value="<?php echo $user->email; ?>" > <!-- echo $tecs_intro_request["email"] ?> -->
                                                      <input name="payerDocument" type="hidden" id="payerDocument"  value="<?php echo $user->id; ?>" > <!-- $tecs_intro_request["id_user"] ?> -->
                                                      <input name="buyerFullName" type="hidden"  value="<?php echo  $user->name; ?>" > <!-- utf8_encode($tecs_intro_request["nombres"])." ".utf8_encode($tecs_intro_request["apellidos"]) -->
                                                      <input name="mobilePhone" type="hidden"  value="<?php echo $user->phone; ?>" > <!-- $client["telefono"] -->
                                                      <input name="telephone" type="hidden"  value="<?php echo $user->phone; ?>" > <!-- $client["telefono"] -->
                                                      <input name="shippingAddress" type="hidden"  value="None" >
                                                      <input name="shippingCity" type="hidden"  value="BOGOTA" >
                                                      <input name="shippingCountry" type="hidden"  value="COL" >
                                                      <input name="confirmationUrl" type="hidden" value="<?php echo $confirmationUrl; ?>" >
                                                     <!-- Cambio --><input name="Submit"  class="btn btn-primary" type="submit"  value="Pagar en Línea" > 
                                                </form>
                                            </div>
                                    
                                </div>
                                <?php
                            }else{
                                if($payU_flag == 1){


                                    ?>
                                    <div class="info_container" >
                                        <img src="/ilto3/images/tecs-intro.png" alt="TECS-INTRO"><br><br>
                                        <h3><b>TECS INTRO</b></h3>
                                         <p style="text-align:justify;">Este curso está diseñado para familiarizarse con la prueba antes de tomarla y conocer su metodología, solucionar dudas, prepararse con los recursos adecuados, entender el formato de las  preguntas de cada una de las habilidades y lograr que su prueba sea todo un éxito.<br><br></p>
                                         <h3 class="btn btn-danger" style="margin:auto;cursor:none;font-size: 14px !important;font-weight: 700;">Este NO es un curso de Inglés,<br>es un curso de preparación para el examen TECS.</h3><br><br><br>
                                         <div style="text-align:left;">
                                    <?php
                                        if($row_payment['status'] == 4){
                                            echo '<h3><small>Lunes, miércoles y viernes (Intermedio).<br>
                                                Martes, jueves y sábados. (Básico).</small></h3>
                                            <p><label><b>Opción 1:</b>  09:00 AM a 11:00 AM <br>';
                                            
                                    
                                            $status = "TRANSACCIÓN APROBADA";
                                            //get selected date for TECS INTRO 
                                            //checking if there is a tecs2go payment
                                            $SQL = "SELECT * FROM `tecs_academy_dates` WHERE `id_tecs_academy` = '".$id_tecs_academy."' AND type= 0";
                                            $dates = mysqli_query($conn, $SQL);
                                            $row_date=mysqli_fetch_assoc($dates);
                                            
                                            //show selected date or show button to select the date
                                            if(!isset($row_date["id_tecs_academy_date"])){
                                                
                                                    /*$btn_dates_pick = '<br><a href="/ilto3/tecs-academy/view/tecs-intro-date.php?id='.base64_encode($id_request).'"  class="btn btn-success" id="date_select">Seleccionar Fechas</a>  <img src="/ilto3/proctorv/img/nuevo.png" title="Ir a Selección de Fechas" width="32"><br><br>';       */

                                                    echo $dates_available;
                                                    //echo $btn_dates_pick;
                                                    echo $aditional_info;
                                            }else{
                                                $btn_dates_pick = '<h3>Por favor envia el comprobante de pago a alguno de los siguientes numeros de WhatsApp para continuar con tu proceso de registro.</h3>
                                                <h3><small>Lunes, miércoles y viernes (Intermedio).<br>
                                                Martes, jueves y sábados. (Básico).</small></h3> '; 
                                                $full_date = explode(" ",$row_date["date_selected"]);
                                                if($full_date[1] == '09:00:00'){
                                                    echo '<p><b>Horario seleccionado: </b> De 09:00 AM a 11:00 AM</p>';
                                                }
                                                if($full_date[1] == '20:00:00'){
                                                    echo '<p><b>Horario seleccionado: </b> De 08:00 PM a 10:00 PM</p>';
                                                }
                                                echo '<br>';
                                            }
                                        
                                            
                                            
                                            ?>
                                            
                                            <h3>Pago registrado via PAYU</h3>
                                            <ul>
                                        <li><b>Estado de la transaccion:</b> 
                                        <?php
                                        }
                                        if($row_payment['status'] == 7){
                                            $status = "TRANSACCIÓN PENDIENTE";
                                            $aditional_info= '<small>Por favor envia el comprobante de pago a alguno de los siguientes numeros de WhatsApp para continuar con tu proceso de registro.</small> '; 
                                            $alert = "<span style='color:#d9534f'>Cuando realice el pago, por favor comuníquese con ILTO Colombia para habilitar la selección de fechas:<br>
                                                        WhatsApp: + 310 364 4355 (No recibe llamadas)<br>
                                                        Oficina: 307 3343 (Bogotá, Colombia).</span>";
                                            $btn_dates_pick = "";
                                        }
                                        echo $status;
                                        ?>
                                        </li>
                                        <li><b>ID de la transaccion:</b> <?php echo $row_payment['id_transaction']; ?></li>
                                        <li><b>Fecha de la transaccion:</b> <?php echo $row_payment['date_generate']; ?></li>
                                        <li><b>Referencia de la venta:</b> <?php echo $row_payment['bank']; ?></li>
                                        <li><b>Referencia de la transaccion:</b> <?php echo $row_payment['sell_reference']; ?></li>
                                        <li><b>Valor: </b> $400.000 <?php echo $row_payment['CURRENCY']; ?></li>
                                    </ul>
                                     
                                    <?php
                                    
                                    echo $alert;
                                    ?>
                                    </div>
                                    </div>
                                    <?php
                                }
                                    
                            }
                        ?>
                        
                    </div>
                    
                    
                </div>
                <!-- end boton payU -->

                </div>


                           <!--  <button type="submit" class="btn btn-primary"><a href="{{ route('payButton')}}">Suscribete</a></button> -->
                            </div>
                            </div>
                            <br>

                            <!-- Tal vez te interece -->     
                            <br>
                            <h3>Tal vez te pueda interezar</h3>

                            <div class="row">
                           
                                    <div class="col">
                                    1 of 3
                                    </div>
                                    <div class="col">
                                    2 of 3
                                    </div>
                                    <div class="col">
                                    3 of 3
                                    </div>
                            
                            </div>
            </div>
</div>
<br>
<br>
@endif



<script>

                            // Establecer la fecha en la que estamos contando hacia atrás
var countDownDate = new Date("December 18, 2021 22:28:20").getTime();

// Actualizar la cuenta regresiva cada 1 segundo
var x = setInterval(function() {

// Obtener la fecha y la hora de hoy
  var now = new Date().getTime();
    
// Encuentre la distancia entre ahora y la fecha de la cuenta regresiva
  var distance = countDownDate - now;
    
// Cálculos de tiempo para días, horas, minutos y segundos.
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
// Muestra el countdown"
  document.getElementById("demo").innerHTML = 
      "<p class='d'>" +days + "<br><span>Días</span></p>" + 
     "<p class='h'>" +hours + "<br><span>Horas</span></p>" + 
      "<p class='m'>" +minutes + "<br><span>Minutos</span></p>" + 
     "<p class='s'>" + seconds + "<br><span>Segundos</span></p>";
// Si la cuenta regresiva ha terminado, escribe un texto
  if (distance < 0) {
    clearInterval(x);
//La clase info genera el contenido al finalizar el countdown
//Configure los stylos con CSS o JS
    var a=document.getElementsByClassName("info");
      a[0].style.height="20vh";
//Utilice el innerHTML para introducir elementos
      a[0].innerHTML =   

    "<div class='suscribete'>" + 
    "<a href='https://www.youtube.com/channel/UCBuPzVcwT8gxV4-aCpp4BDA' target='_blank'>Ingresa al aula virtual</a>" +
          "</div>";
//El elemento con el id demo se oculta
      document.getElementById("demo").style.display = "none";
//Un pequeño script para borrar el elemento h3 de cabecera :)
      const nodeList = document.querySelectorAll("h3");
      nodeList[0].style.display = "none";

  }
}, 0);

</script>