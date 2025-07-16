<?php
error_reporting(0);
header('Content-Type: text/json;charset=UTF-8',true,200);

$size = $_GET["size"];

if(empty($size)){
$size = "10485760";
}

$url = "https://speed.cloudflare.com/__down?bytes={$size}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
$data = curl_exec($ch);
$info = curl_getinfo($ch);

$len = strval(intval($size) / 1024 / 1024);

$result = "Current Test Size About: {$len}MB"."\n";

$result.="Speed: ".strval(intval($info["speed_download"]) / 1024 / 1024)."MB/s";

curl_close($ch);

print_r($result);
?>