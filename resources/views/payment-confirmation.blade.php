<?php

/*register method
*
*
*/

//database connection

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
	
	
	$firmaMd5 = md5($firma);
	
	//if the firm is valid
	if($firmaMd5 === $sign){
		//guardamos la transacción si es aprobada
		$SQL = "INSERT INTO `proctorv_user_payment`(`id_request`, `id_user`, `date_generate`, `payment_number`, `status`, `id_transaction`, `sell_reference`, `transaction_reference`, `bank`, `val`, `CURRENCY`, `entity`) 
			    VALUES ('".$id_request."', '".$id_taker."', NOW(), NULL,  '".$transactionState."', '".$transactionId."', '".$description."', '".$referenceCode."', '".$pseBank."', '".$TX_VALUE."', '".$currency."', '".$lapPaymentMethod."')";
			   
		//query
		if ($conn->query($SQL) === TRUE) {
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		
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
				$dat = "{From: 'noreply@iltoexams.com', To: 'tecs2go@iltoexams.com', Cc:'ogarcia@iltoexams.com', Subject: '$subject', HtmlBody: '$htmlBody'}";//array('From' => 'noreply@iltoexams.com', 'To'=>'dokho_02@hotmail.com', 'Subject'=>'Hola Chris Fer', 'HtmlBody'=>'<strong>Hello</strong> dear Postmark user.');
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