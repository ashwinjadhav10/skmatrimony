<?php

function sendsms($number, $message_body, $return = '0') {

$sender = '611332'; // Need to change

$smsGatewayUrl = 'http://api.msg91.com';

$apikey = '176983AeR3VZ2nqmW59ed90e8'; // Need to change
	
$test_msg = "Hello Friends";
	
$textmessage = urlencode($test_msg);

$api_element = '/api/sendhttp.php';

$api_params =  $api_element.'?apikey='.$apikey.'&sender='.$sender.'&to='.$number.'&message='.$textmessage;
$smsgatewaydata = $smsGatewayUrl.$api_params;

$url = $smsgatewaydata;

$ch = curl_init();


curl_setopt($ch, CURLOPT_POST, false);

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $output = curl_exec($ch);

curl_close($ch);

if(!$output){ $output = file_get_contents($smsgatewaydata); }

if($return == '1'){ return $output; }else{ echo "Sent"; }

}
?>