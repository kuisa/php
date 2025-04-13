<?php
error_reporting(0);
header('Content-Type: text/json;charset=UTF-8');
$data = $_GET["data"];
$data = openssl_decrypt(trim(base64_decode($data)),'AES-128-ECB',"twcdncreate22022",0);
if(empty($data)){
exit;
}
$data = json_decode($data);
$url = $data->url;
$host = $data->host;
$header = $data->header;
if(empty($header)){
$host = explode("/",$url)[2];
$header[] = "Host: {$host}";
}
$body = $data->body;
if(!empty($body)){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
}else{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
}
$data = curl_exec($ch);
curl_close($ch);
print_r($data);
exit;
?>