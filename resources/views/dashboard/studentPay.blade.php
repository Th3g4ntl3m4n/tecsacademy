<?php
 $url = 'https://checkout.payulatam.com/ppp-web-gateway-payu/'; // Producción
 //$url = 'https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/'; // Sandbox
 
 $ApiKey = 'dIHtIJW8fs64q414hiVrg25h66'; // Obtener este dato dela cuenta de Payu
 $merchantId = '848807'; // Obtener este dato dela cuenta de Payu
 $accountId = '856322'; // Obtener este dato dela cuenta de Payu
 //$description = 'payUtecs2go'; //Descripción del pedido
 $referenceCode = 'tecs2go001'; // Referencia Unica del pedido
 $amount = '12000'; //Es el monto total de la transacción. Puede contener dos dígitos decimales. Ej. 10000.00 ó 10000.
 $tax = '0'; // Es el valor del IVA de la transacción, si se envía el IVA nulo el sistema aplicará el 19% automáticamente. Puede contener dos dígitos decimales. Ej: 19000.00. En caso de no tener IVA debe enviarse en 0.
 $taxReturnBase = '0'; // Es el valor base sobre el cual se calcula el IVA. En caso de que no tenga IVA debe enviarse en 0.
 $currency = 'USD'; // Moneda
 $test = '0'; // Variable para poder utilizar tarjetas de crédito de pruebas, los valores pueden ser 1 ó 0.
 //$buyerEmail = 'test@test.com'; // Respuesta por Payu al comprador
 $responseUrl = 'https://iltoexams.com/ilto3/tecs-academy/view/payment-response.php'; // URL de respuesta,
 $confirmationUrl = 'https://iltoexams.com/ilto3/tecs-academy/view/payment-confirmation.php';

 $payU_flag = 0;
 $id_taker = 1;
 $id_request = 1;
 $id_prices = 160000;

?>
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
                                        <p class="fs-1">Es un curso basado en la experiencia de los evaluadores de la compañía ILTO ( International Language Testing Organization) la intención de este curso es brindar a los tomadores las herramientas necesarias para llegar mejor preparado a la prueba internacional TECS</p>



                                        <!-- inicio Boton pay u -->

                                        <div class="row" style="text-align:center;">
                            
                            <div class="col-xs-5 col-sm-5 col-md-5">
                                <div class="form-group">
                                    <?php
                                        if($payU_flag == 0 ){ // 0 es porque no hay pago, entonces muestra un botón para pagar
                                            $tecs2go_amount = 160000;
                                            $currency = $currency;
                                            $referenceCode = $id_taker."_".$id_request."_".date("h:i:s");
                                        
                                            $firma = "$ApiKey~$merchantId~$referenceCode~$tecs2go_amount~$currency";
                                            $firmaMd5 = md5($firma);
    
                                            ?>
                                            
                                            <div class="form-group"><br>
                                                    <img src="/ilto3/images/tecs-intro.png" alt="TECS-INTRO"><br><br>
                                                    <h3><b>TECS INTRO</b></h3>
                                                     <p style="text-align:justify;">Este curso está diseñado para familiarizarse con la prueba antes de tomarla y conocer su metodología, solucionar dudas, prepararse con los recursos adecuados, entender el formato de las  preguntas de cada una de las habilidades y lograr que su prueba sea todo un éxito.<br><br></p>
                                                     <h3 class="btn btn-danger" style="margin:auto;cursor:none;font-size: 14px !important;font-weight: 700;">Este NO es un curso de Inglés,<br>es un curso de preparación para el examen TECS.</h3><br><br><br>
                                                        
                                                        
                                                        <div id="payU-form">
                                                            <h4>!Si pagas en la mañana, puedes ingresar al curso al siguiente día!</h4>
                                                            <h3><small>Lunes, miércoles y viernes (Intermedio).<br>
                                                            Martes, jueves y sábados. (Básico).</small></h3>
                                                        <p><label><b>Opción 1:</b>  09:00 AM a 11:00 AM <br>
                                                                <b>Opción 2:</b>  08:00 PM a 10:00 PM.</label><br></p>
                                                            <input name="apikey" id="apikey" type="hidden"  value="<?php echo $ApiKey; ?>" >
                                                            <h3><span>$ 160.000 <?php $currency ?></span></h3> <!-- echo $prices["currency"] --> 
                                                        <!--    <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                                                            <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">-->
                                                                <form method="post" action="<?php echo $url; ?>">
                                                                 <input name="merchantId" id="merchantId" type="hidden"  value="<?php echo $merchantId; ?>" >
                                                                  <input name="accountId"  type="hidden"    value="<?php echo $accountId; ?>" >
                                                                  <input name="description" type="hidden"   value="TECS-INTRO" >
                                                                  <input name="referenceCode" id="referenceCode" type="hidden"  value="<?php echo $referenceCode; ?>" > <!-- -->
                                                                  <input name="amount" id="amount" type="hidden"        value="<?php echo $tecs2go_amount; ?>" >        <!-- -->
                                                                  <input name="tax"     type="hidden"       value="<?php echo $tax; ?>" >
                                                                  <input name="taxReturnBase" type="hidden" value="<?php echo $taxReturnBase; ?>" >
                                                                  <input name="currency" id="currency" type="hidden"        value="<?php echo $currency; ?>" >
                                                                  <input name="signature"  id="signature"  type="hidden"    value="<?php echo $firmaMd5; ?>" >
                                                                  <input name="test"    type="hidden"       value="<?php echo $test; ?>" >
                                                                  <input name="buyerEmail"  type="hidden"    value="<?php echo $email_request; ?>" > <!-- echo $tecs_intro_request["email"] ?> -->
                                                                  <input name="payerDocument" type="hidden" id="payerDocument"  value="<?php echo $id_request; ?>" > <!-- $tecs_intro_request["id_user"] ?> -->
                                                                  <input name="buyerFullName" type="hidden"  value="<?php echo  $user_name; ?>" > <!-- utf8_encode($tecs_intro_request["nombres"])." ".utf8_encode($tecs_intro_request["apellidos"]) -->
                                                                  <input name="mobilePhone" type="hidden"  value="<?php echo $user_phone; ?>" > <!-- $client["telefono"] -->
                                                                  <input name="telephone" type="hidden"  value="<?php echo $user_phone; ?>" > <!-- $client["telefono"] -->
                                                                  <input name="shippingAddress" type="hidden"  value="None" >
                                                                  <input name="shippingCity" type="hidden"  value="BOGOTA" >
                                                                  <input name="shippingCountry" type="hidden"  value="COL" >
                                                                  <input name="confirmationUrl" type="hidden" value="<?php echo $confirmationUrl; ?>" >
                                                                 <!-- Cambio --><input name="Submit"  class="btn btn-success" type="submit"  value="Pagar en Línea" > 
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




                                        <button type="submit" class="btn btn-primary"><a href="{{ route('tecsintro')}}">Suscribete</a></button>
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