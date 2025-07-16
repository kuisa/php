<?php

//use: url=**** + | + name=****

error_reporting(0);
ignore_user_abort();
ini_set('max_execution_time',0);

$url = explode("|",explode("url=",$_SERVER["QUERY_STRING"])[1])[0];
$file_name = explode("|",explode("name=",$_SERVER["QUERY_STRING"])[1])[0];

echo "{$url} Start Download,Save To ./{$file_name}";

$header = array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'Accept-Language: zh-CN,zh;q=0.9',
'Cache-Control: no-cache',
'Connection: keep-alive',
'Pragma: no-cache',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Iron Safari/537.36',
);
$ch = curl_init($url);
$fp = fopen("./{$file_name}", "w+b");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);
curl_close($ch);
fclose($fp);
?>