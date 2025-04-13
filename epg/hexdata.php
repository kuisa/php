<?php
error_reporting(0);
header('Content-Type: text/json;charset=UTF-8');
$data = $_GET["data"];

//url | header(json_encoded) | body | resolveip | timeout | type

$data = hex2bin($data);
if(empty($data)){
exit;
}
$data = explode("|",$data);
$url = $data[0];
$header = $data[1];
if(!empty($header)){
$header = json_decode($header);
}
$body = $data[2];
if($body == "null"){
$post = "0";
}else{
$post = "1";
}
$ip = $data[3];
$timeout = $data[4];
if(empty($timeout)){
$timeout = "";
}
$type = $data[5];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, $type);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
if(!empty($header)){
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
}
if($post == "1"){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
}
if(strpos(json_encode($header),"gzip")){
curl_setopt($ch, CURLOPT_ENCODING,'gzip');
}
if(!empty($timeout)){
curl_setopt($ch, CURLOPT_TIMEOUT,$timeout);
}
if(!empty($ip)){
$host = explode("/",$url)[2];
if(strpos($host,":")){
$host = explode(":",$host)[0];
}
$pro = substr($url,0,5);
$pros = array("http:"=>"80","https"=>"443");
curl_setopt($ch, CURLOPT_RESOLVE,array("-{$host}:{$pros[$pro]}","{$host}:{$pros[$pro]}:{$ip}"));
}
$data = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);
if($info["http_code"] == 200){
print_r($data);
exit;
}
if($info["http_code"] == 302){
print_r($info["redirect_url"]);
exit;
}
?>