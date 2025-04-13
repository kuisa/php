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
$type = substr($url,0,5);
$types = array("http:"=>"80","https"=>"443");
$host = $data->host;
if(empty($host)){
$host = explode("/",$url)[2];
}
$header = $data->header;
if(empty($header)){
$headers = array("Host: {$host}");
$header = $headers;
}
$ip = $data->ip;
$body = $data->body;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
if(!empty($body)){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
}
if(!empty($ip)){
curl_setopt($ch, CURLOPT_RESOLVE,array("-{$host}:{$types[$type]}","{$host}:{$types[$type]}:{$ip}"));
}
curl_setopt($ch, CURLOPT_ENCODING,'gzip');
$data = curl_exec($ch);
curl_close($ch);
print_r($data);
exit;
?>