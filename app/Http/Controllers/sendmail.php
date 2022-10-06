
<?php
/**
 * 
 * curl "https://api.postmarkapp.com/email" \
  -X POST \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -H "X-Postmark-Server-Token: 93cc172f-fc14-4c2f-8c4c-6dd0a647ac68" \
  -d "{From: 'noreply@iltoexams.com', To: 'noreply@iltoexams.com', Subject: 'Hello from Postmark', HtmlBody: '<strong>Hello</strong> dear Postmark user.'}"
 * */
 
//$dat = "{From: 'noreply@iltoexams.com', To: 'dokho_02@hotmail.com', Cc: 'ing.christian.velandia@gmail.com', Subject: 'Hello from Postmark', HtmlBody: '<strong>Hello</strong> dear Postmark user.'}";//array('From' => 'noreply@iltoexams.com', 'To'=>'dokho_02@hotmail.com', 'Subject'=>'Hola Chris Fer', 'HtmlBody'=>'<strong>Hello</strong> dear Postmark user.');

function sendEmail($data){


$postmarkApiKey = '93cc172f-fc14-4c2f-8c4c-6dd0a647ac68';

//NOTE: The top level key in the array is important, as some apis will insist that it is 'file'.
//$data = "{From: 'noreply@iltoexams.com', To: 'dokho_02@hotmail.com', Cc: 'ing.christian.velandia@gmail.com', Subject: 'Hello from Postmark', HtmlBody: '<strong>Hello</strong> dear Postmark user.'}";//array('From' => 'noreply@iltoexams.com', 'To'=>'dokho_02@hotmail.com', 'Subject'=>'Hola Chris Fer', 'HtmlBody'=>'<strong>Hello</strong> dear Postmark user.');

$Api = "https://api.postmarkapp.com/email";

$ch = curl_init();
$options = array(CURLOPT_URL => $Api,
             CURLOPT_HTTPHEADER => array('Accept: application/json', 'Content-Type: application/json', 'X-Postmark-Server-Token: '.$postmarkApiKey),
             CURLOPT_RETURNTRANSFER => true,
             CURLINFO_HEADER_OUT => false, //Request header
             CURLOPT_HEADER => false, //Return header
             CURLOPT_SSL_VERIFYPEER => false, //Don't veryify server certificate
             CURLOPT_POST => true,
             CURLOPT_POSTFIELDS => $data
            );

curl_setopt_array($ch, $options);
$result = curl_exec($ch);
$header_info = curl_getinfo($ch,CURLINFO_HEADER_OUT);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($result, 0, $header_size);
$body = substr($result, $header_size);
curl_close($ch);
/*
var_dump($result);
var_dump($header_info);
var_dump($header);
var_dump($body);*/
}

?>