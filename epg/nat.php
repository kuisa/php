<?php
error_reporting(0);
ini_set('max_execution_time',0);
$url = $_GET['url'];
$url = base64_decode($url);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, trim($url));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);
print_r($data);
?>