<?php
error_reporting(0);
header('Content-Type: text/json;charset=UTF-8');
$data = $_GET["data"];
$data = base64_decode($data);
$data = trim($data);
$data = openssl_decrypt($data,'AES-128-ECB',"twcdncreate22022",0);
$url = explode("&",$data)[0];
$header = json_decode(explode("&",$data)[1]);
$body = explode("&",$data)[2];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$data = curl_exec($ch);
curl_close($ch);
print_r($data);
?>