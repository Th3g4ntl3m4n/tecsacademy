<?php
	if(str_replace('www.', '', $_SERVER['SERVER_NAME']) == 'iltoexams.com'){
            	    $conn = @mysqli_connect('localhost', 'iltoexam_newvers', 'Ilto.2015', 'iltoexam_newversion');      
         }else{
             	    $conn = @mysqli_connect('localhost', 'thetec_newvers', 'Ilto.2015', 'thetec_iltoexam_newversion');
         }
	
	if (!$conn) {
	    echo "Error: " . mysqli_connect_error();
		exit();
	}
	
	
	
	include(dirname(__FILE__).'/config.php');
	// emailing
	require("../../../sendmail.php");  
	
	$merchant_id = $_REQUEST['merchantId'];
	$referenceCode = $_REQUEST['referenceCode'];
	$id_taker = $_REQUEST['payerDocument'];
	$TX_VALUE = $_REQUEST['TX_VALUE'];
	$New_value = number_format($TX_VALUE, 1, '.', '');
	$currency = $_REQUEST['currency'];
	$transactionState = $_REQUEST['transactionState'];
	$firma = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
	$firmaMd5 = md5($firma);
	$firma = $_REQUEST['signature'];
	$reference_pol = $_REQUEST['reference_pol'];
	$cus = $_REQUEST['cus'];
	$description = $_REQUEST['description'];
	$pseBank = $_REQUEST['pseBank'];
	$lapPaymentMethod = $_REQUEST['lapPaymentMethod'];
	$transactionId = $_REQUEST['transactionId'];

	$data = explode("_", $referenceCode);
	$id_taker = $data[0];	
	$id_request = $data[1];
	/*
	$merchant_id = 848807;
	$referenceCode = "1102359739_2_04:10:53";
	$id_taker = 1102359739;
	$TX_VALUE = 40;
	$New_value = number_format($TX_VALUE, 1, '.', '');
	$currency = "COP";
	$transactionState = 4;
	$ApiKey ="dIHtIJW8fs64q414hiVrg25h66";
	$firma = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
	$firmaMd5 = md5($firma);
	$firma = $firmaMd5;
	$reference_pol = $_REQUEST['reference_pol'];
	$cus = $_REQUEST['cus'];
	$description = "TECS-INTRO";
	$pseBank = "Davivienda";
	$lapPaymentMethod = $_REQUEST['lapPaymentMethod'];
	$transactionId = "f024a45b-b436-480c-8617-692a4fc3e25f";

	$data = explode("_", $referenceCode);
	$id_taker = $data[0];	
	$id_request = $data[1];
	
	
	
*/	
	//guardamos la transacción si es aprobada
	$SQL = "INSERT INTO `proctorv_user_payment`(`id_request`, `id_user`, `date_generate`, `payment_number`, `status`, `id_transaction`, `sell_reference`, `transaction_reference`, `bank`, `val`, `CURRENCY`, `entity`) 
		    VALUES ('".$id_request."', '".$id_taker."', NOW(), NULL,  '".$transactionState."', '".$transactionId."', '".$description."', '".$referenceCode."', '".$pseBank."', '".$TX_VALUE."', '".$currency."', '".$lapPaymentMethod."')";
		   
	//query
	if ($conn->query($SQL) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
		//get the payment_id 
	$SQL = "SELECT id_proctorv_user_payment FROM `proctorv_user_payment` WHERE `id_request` = '".$id_request."' and `sell_reference` = '".$referenceCode."' ";
	$query = mysqli_query($conn, $SQL);
	$request =mysqli_fetch_assoc($request);
	


	switch ($transactionState) {
	    case 4:
	        $estadoTx = "Transacción aprobada";
	         $subject = 'NUEVO PAGO PAYU -'.$description;
			$htmlBody = '<p style="font:Arial, sans-serif; color: #191919;">
			Notificación de pago realizada a través de PayU: <br/><br/>
			<ul>
				<li><b>ID Taker:</b>'.$id_taker.'</li>
				<li><b>Descripción:</b>'.$description.'</li>
				<li><b>Estado de la transaccion:</b> '.$estadoTx.'</li>
				<li><b>ID de la transaccion:</b>'.$transactionId.'</li>
				<li><b>Referencia de la venta:</b>'.$reference_pol.'</li>
				<li><b>Referencia de la transaccion:</b>'.$referenceCode.'</li>
				<li><b>Valor total:</b>'.number_format($TX_VALUE).'</li>
				<li><b>Moneda:</b>'.$currency.'</li>
				<li><b>Entidad:</b>'.$lapPaymentMethod.'</li>
			</ul>										
													
			Por favor verifique la transferencia en la plataforma de PayU.</p><br>
			Support Team - ILTO<br/>
			<img src="https://iltoexams.com/logo_ILTO.png" alt="iltoexams"></p>';   
			
			
			//update consultant_history payment
            $SQL = "UPDATE `consultant_history` SET `payment_status` = '4', description = '".$referenceCode."',  id_proctorv_user_payment = '".$request["id_proctorv_user_payment"]."', updated_at = NOW() WHERE `consultant_history`.`id_product` = '".$id_request."' ;";
            if ($conn->query($SQL) === TRUE) {
            	    //
            } else {
            	echo "Error query: " . $sql . "<br>" . $conn->error;
            }
            
            if($referenceCode == "TECS-INTRO"){
            	$SQL = "UPDATE `tecs_academy` SET `tecs_intro` = '1' WHERE `tecs_academy`.`id_tecs_academy` = '".$id_request."' ;";
            }
            
            if($referenceCode == "TECS-MASTER"){
            	$SQL = "UPDATE `tecs_academy` SET `tecs_master` = '1' WHERE `tecs_academy`.`id_tecs_academy` = '".$id_request."' ;";
            }
            //update tecs-academy product 
            
            if ($conn->query($SQL) === TRUE) {
            	    //
            } else {
            	echo "Error query: " . $sql . "<br>" . $conn->error;
            }
			
			//send email
			$dat = "{From: 'noreply@iltoexams.com', To: 'tecs2go@iltoexams.com', Cc:'ogarcia@iltoexams.com', Subject: '$subject', HtmlBody: '$htmlBody'}";//array('From' => 'noreply@iltoexams.com', 'To'=>'dokho_02@hotmail.com', 'Subject'=>'Hola Chris Fer', 'HtmlBody'=>'<strong>Hello</strong> dear Postmark user.');
		//	sendEmail($dat);
	    break;
	    case 6:
	    	$estadoTx = "Transacción rechazada";
	        break;
	    case 7:
	        $estadoTx = "Transacción pendiente";
	         $subject = 'NUEVO PAGO PAYU -'.$description;
			$htmlBody = '<p style="font:Arial, sans-serif; color: #191919;">
			Notificación de pago realizada a través de PayU: <br/>
			La transaccion se encuentra pendiente, por favor revisa más tarde.
			<br/>
			<ul>
				<li><b>ID Taker:</b>'.$id_taker.'</li>
				<li><b>Estado de la transaccion:</b> '.$estadoTx.'</li>
				<li><b>ID de la transaccion:</b>'.$transactionId.'</li>
				<li><b>Referencia de la venta:</b>'.$reference_pol.'</li>
				<li><b>Referencia de la transaccion:</b>'.$referenceCode.'</li>
				<li><b>Valor total:</b>'.number_format($TX_VALUE).'</li>
				<li><b>Moneda:</b>'.$currency.'</li>
				<li><b>Descripción:</b>'.$description.'</li>
				<li><b>Entidad:</b>'.$lapPaymentMethod.'</li>
			</ul>										
													
			Por favor verifique la transferencia en la plataforma de PayU.</p><br>
			Support Team - ILTO<br/>
			<img src="https://iltoexams.com/logo_ILTO.png" alt="iltoexams"></p>';  
			
			//update photo in taker profile
            $SQL = "UPDATE `consultant_history` SET `payment_status` = '7', description = '".$referenceCode."',  id_proctorv_user_payment = '".$request["id_proctorv_user_payment"]."', updated_at = NOW() WHERE `consultant_history`.`id_product` = '".$id_request."' ;";
            if ($conn->query($SQL) === TRUE) {
            	    //
            } else {
            	echo "Error query: " . $sql . "<br>" . $conn->error;
            }
            
            if($referenceCode == "TECS-INTRO"){
            	$SQL = "UPDATE `tecs_academy` SET `tecs_intro` = '1' WHERE `tecs_academy`.`id_tecs_academy` = '".$id_request."' ;";
            }else{
            	$SQL = "UPDATE `tecs_academy` SET `tecs_master` = '1' WHERE `tecs_academy`.`id_tecs_academy` = '".$id_request."' ;";
            }
            //update tecs-academy product 
            
            if ($conn->query($SQL) === TRUE) {
            	    //
            } else {
            	echo "Error query: " . $sql . "<br>" . $conn->error;
            }
            
			//send email
			$dat = "{From: 'noreply@iltoexams.com', To: 'tecs2go@iltoexams.com', Cc:'ogarcia@iltoexams.com', Subject: '$subject', HtmlBody: '$htmlBody'}";//array('From' => 'noreply@iltoexams.com', 'To'=>'dokho_02@hotmail.com', 'Subject'=>'Hola Chris Fer', 'HtmlBody'=>'<strong>Hello</strong> dear Postmark user.');
		//	sendEmail($dat);
		
		   case 104:
	        $estadoTx = "Error";
	        break;
	    default:
	      	$estadoTx=$_REQUEST['mensaje'];
	}
	
	


	if (strtoupper($firma) == strtoupper($firmaMd5)) {
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="UTF-8">
		<title>Resumen de Pago</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/style.css" rel="stylesheet" type="text/css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		 
	</script>
	</head>
	<style>
				/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

select.input-lg {
    height: 46px !important;
}



.input-lg {
	width:60%;
	cursor:pointer !important;
}

#payment_number {
	margin-top:15px;
}


#payU-form {
	display:none;
}

#university_payment {
	display:none;
}
	</style>
	<body>
	
		<div class="loginbox-social" style="text-align:center;">
                    <div class="social-buttons">
                        <img src="/ilto3/images/logo_ILTO.png" alt="ILTO EXAMS">
                    </div>
                </div>
		<div class="container">
			<div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6" style="text-align:left;">
              
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                </div>
            </div>
			<div id="exTab1" class="container">	
				<div class="tab-content clearfix">
					<div class="tab-pane active" id="1a">
						<div class="row">
							<div class="col-xs-4 col-md-4">
							</div>
							<div class="col-xs-4 col-md-4">
							</div>
							<div class="col-xs-4 col-md-4">
							</div>
						</div>
							<input type="hidden" name="id_request" value="<?php echo $_GET["id"] ?>"/>
							<input type="hidden" name="id_taker" value="<?php echo $proctorv_request["id_user"] ?>"/>
				    	<div class="row" style="text-align:center;">
				    			<h2 style="text-align:center;">Sección de pagos </h2><br>	
							
						</div>
						
						<?php 
						//if the user has already complete this step just SHOW A MESSAGE
						/*if($flag_complete == 1){
						?>
							<div class="row" style="text-align:center;">
								<h4><img src="/ilto3/images/iconos/verified.png" title="Completed!" width="32">
	                        	<span class="green_text">REALIZADO</span></h4>
							</div>
						<?php
						}else{*/
						?>	
						</div>	
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
										<h2>Resumen Transacción</h2>
										<ul>
											<li><b>Estado de la transaccion:</b> <?php echo $estadoTx; ?></li>
											<li><b>ID de la transaccion:</b> <?php echo $transactionId; ?></li>
											<li><b>Referencia de la venta:</b> <?php echo $reference_pol; ?></li>
											<li><b>Referencia de la transaccion:</b> <?php echo $referenceCode; ?></li>
									
									<?php
										if($pseBank != null) {
									?>
									
											<li><b>Cus:</b> <?php echo $cus; ?></li>
											<li><b>Banco:</b> <?php echo $pseBank; ?></li>
									
									<?php
										}
									?>
									
											<li><b>Valor total:</b> $<?php echo number_format($TX_VALUE); ?></li>
											<li><b>Moneda:</b> <?php echo $currency; ?></li>
											<li><b>Descripción:</b> <?php echo ($description); ?></li>
											<li><b>Entidad:</b> <?php echo ($lapPaymentMethod); ?></li>
										</ul>
										<p>Ahora puedes hacer clic en continuar para seleccionar una fecha disponible para comenzar con tu curso <?php echo $description ?>:</p>
										<a class="btn btn-success" href="https://iltoexams.com/ilto3/tecs-academy/view/dashboard.php?id=<?php echo base64_encode($id_taker); ?> ">CONTINUAR</a>
									
									<?php
										}else{
									?>
									
										<h1>Error validando firma digital.</h1>
									
									<?php
										}
									?>
									
								</div>
							</div>
							
							
						</div>
							
							<?php
						//	}
							?>
<hr class="colorgraph">
					</div>
						
					</div><!-- /.tab-pane1 -->
				</div>
			</div>
		</div>
			
	
	</body>
	
<html>

