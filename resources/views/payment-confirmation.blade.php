<?php

use App\pwdscripts\sendmail;
use App\Models\User;
use App\Models\Products;


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


/*register method
*
*
*/

//database connection

/*

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

	*/
	
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
	
	
	$firmaMd5 = md5($firma);
	
	//if the firm is valid
	if($firmaMd5 === $sign){
	// crea una instancia de un pago nuevo el cual va a guardar

	// 2. Iguala todo lo que trae en el request a los atributos del objeto que va a guardar

	// 3. imprime dependiendo el estado de la transacción
		
		//get the payment_id 
		$SQL = "SELECT id_proctorv_user_payment FROM `proctorv_user_payment` WHERE `id_request` = '".$id_request."' and `sell_reference` = 'TECS2GO' ";
		$query = mysqli_query($conn, $SQL);
		$request =mysqli_fetch_assoc($request);
		
	
		switch ($transactionState) {
		    case 4:
		        $estadoTx = "Transacción aprobada";
				
				//update photo in taker profile
	            $SQL = "UPDATE `consultant_history` SET `payment_status` = '4', id_proctorv_user_payment = '".$request["id_proctorv_user_payment"]."', updated_at = NOW() WHERE `consultant_history`.`id_product` = '".$id_request."' ;";
	            if ($conn->query($SQL) === TRUE) {
	            	    //
	            } else {
	            	echo "Error query: " . $sql . "<br>" . $conn->error;
	            }
				
		    break;
		    case 6:
		    	$estadoTx = "Transacción rechazada";
		        break;
		    case 7:
		        $estadoTx = "Transacción pendiente";
		        
				
				//update photo in taker profile
	            $SQL = "UPDATE `consultant_history` SET `payment_status` = '7', id_proctorv_user_payment = '".$request["id_proctorv_user_payment"]."', updated_at = NOW() WHERE `consultant_history`.`id_product` = '".$id_request."' ;";
	            if ($conn->query($SQL) === TRUE) {
	            	    //
	            } else {
	            	echo "Error query: " . $sql . "<br>" . $conn->error;
	            }
				
				//send email
				//$dat = "{From: 'noreply@iltoexams.com', To: 'tecs2go@iltoexams.com', Cc:'ogarcia@iltoexams.com', Subject: '$subject', HtmlBody: '$htmlBody'}";//array('From' => 'noreply@iltoexams.com', 'To'=>'dokho_02@hotmail.com', 'Subject'=>'Hola Chris Fer', 'HtmlBody'=>'<strong>Hello</strong> dear Postmark user.');
				//sendEmail($dat);
			    break;
		    case 104:
		        $estadoTx = "Error";
		        break;
		    default:
		     	$estadoTx=$_REQUEST['mensaje'];
		}	
			
		
	}
	
	

?>