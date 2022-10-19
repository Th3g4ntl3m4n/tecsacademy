<?php 
/*	//$url = 'https://checkout.payulatam.com/ppp-web-gateway-payu/'; // Producción
	$url = 'https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/'; // Sandbox
	
	$ApiKey = '4Vj8eK4rloUd272L48hsrarnUA'; // Obtener este dato dela cuenta de Payu
	$merchantId = '508029'; // Obtener este dato dela cuenta de Payu
	$accountId = '512321'; // Obtener este dato dela cuenta de Payu
	//$description = 'payUtecs2go'; //Descripción del pedido
	$referenceCode = 'tecs2go001'; // Referencia Unica del pedido
	$amount = '10000'; //Es el monto total de la transacción. Puede contener dos dígitos decimales. Ej. 10000.00 ó 10000.
	$tax = '0'; // Es el valor del IVA de la transacción, si se envía el IVA nulo el sistema aplicará el 19% automáticamente. Puede contener dos dígitos decimales. Ej: 19000.00. En caso de no tener IVA debe enviarse en 0.
	$taxReturnBase = '0'; // Es el valor base sobre el cual se calcula el IVA. En caso de que no tenga IVA debe enviarse en 0.
	$currency = 'COP'; // Moneda
	$test = '1'; // Variable para poder utilizar tarjetas de crédito de pruebas, los valores pueden ser 1 ó 0.
	//$buyerEmail = 'test@test.com'; // Respuesta por Payu al comprador
	$responseUrl = 'https://iltoexams.com/ilto3/proctorv/view/tecs2go-payment-response.php'; // URL de respuesta,
	$confirmationUrl = 'https://iltoexams.com/ilto3/proctorv/view/payment-confirmation.php'; // URL de confirmación
	//$confirmacionEmail = 'test@test.com'; // Confirmación email

	*/
	
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

 ?>