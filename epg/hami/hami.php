<?php
error_reporting(0);
header('Content-Type: text/json;charset=UTF-8',true,200);

$time = time();
$folders = list_dir(scandir("./"));
if(!empty($folders)){
$count = count($folders);
for($i=0;$i<$count;$i++){
$path_result.=folder_scan("./",$folders[$i]);
}
clean_up(array_filter(explode("\n",$path_result)),$time);
}

$id = $_GET["id"];
$playurl = $_GET["playurl"];

if(!is_dir("./{$id}")){
mkdir("./{$id}", 0777, true);
}

$header = array(
'User-Agent: APTV',
);

$playurl = base64_decode($playurl);
if(substr($playurl,0,4) !== "http"){
header("HTTP/1.1 404 Not Found",true,404);
exit;
}
$data = curl($playurl,$header,10);
if(substr($data,0,1) !== "#"){
header("HTTP/1.1 404 Not Found",true,404);
exit;
}
$pre = explode("index",$playurl)[0];
$store = file_get_contents("./{$id}/m3u8.txt");
$data = array_filter(explode("\n",$data));
$count = count($data);
$urls = array();
$key_urls = array();
$tss = array();
$key_tss = array();
for($i=0;$i<$count;$i++){

if(substr($data[$i],0,1) !== "#"){
$ts = explode("?",$data[$i])[0];
if(!file_exists("./{$id}/{$ts}") and !strpos($store,$ts)){
$urls[] = trim($pre.$data[$i]);
$tss[] = trim($ts);
}}

if(strpos($data[$i],"URI=")){
$key = trim(explode(".",explode("?",$data[$i+2])[0])[0].".key");
if(!file_exists("./{$id}/{$key}") and !strpos($store,$key)){
$urls[] = trim($pre.explode('"',explode('URI="',$data[$i])[1])[0]);
$tss[] = $key;
}}

}

$datas = implode("\n",$data);
file_put_contents("./{$id}/m3u8.txt",$datas);
if(empty($urls)){
print_r(file_get_contents("./{$id}/{$id}.m3u8"));
exit;
}
mutil_download($urls,$tss,$id,$header,30);
$pro = $_SERVER['HTTP_X_FORWARDED_PROTO'];
if(empty($pro)){
$pro = $_SERVER['REQUEST_SCHEME'];
if(empty($pro)){
$pro = json_decode($_SERVER['HTTP_CF_VISITOR'])->scheme;
if(empty($pro)){
$pro = "http";
}}}
$self = $pro."://".$_SERVER['HTTP_HOST'];
$server = "{$self}/hami/";
for($i=0;$i<$count;$i++){
if(substr($data[$i],0,1) !== "#"){
$ts = explode("?",$data[$i])[0];
$data[$i] = "{$server}{$id}/{$ts}";
}
if(strpos($data[$i],"URI=")){
$key = explode(".",explode("?",$data[$i+2])[0])[0].".key";
$info = explode('"',explode('URI="',$data[$i])[1])[0];
$data[$i] = str_replace($info,"{$server}{$id}/{$key}",$data[$i]);
}}
$final = implode("\n",$data);
file_put_contents("./{$id}/{$id}.m3u8",$final);
print_r($final);

function curl($url,$header,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT,$timeout);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$host = explode("/",$url)[2];
if(strpos($host,":")){
$host = explode(":",$host)[0];
}
$pro = substr($url,0,5);
$pros = array("http:"=>"80","https"=>"443");
curl_setopt($ch, CURLOPT_RESOLVE,array("-{$host}:{$pros[$pro]}","{$host}:{$pros[$pro]}:151.242.153.9"));
$data = curl_exec($ch);
$info = curl_getinfo($ch);
if($info["http_code"] !== 200){
for($i=0;$i<5;$i++){
$data = curl_exec($ch);
$info = curl_getinfo($ch);
if($info["http_code"] == 200){
break;
}}}
curl_close($ch);
return $data;
}

function mutil_download($url,$tss,$id,$header,$timeout){
$count = count($url);
$mh = curl_multi_init();
$ch = array();
for($i=0;$i<$count;$i++){
$ch[$i] = curl_init($url[$i]);
curl_setopt($ch[$i], CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch[$i], CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch[$i], CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch[$i], CURLOPT_HTTPHEADER, $header);
curl_setopt($ch[$i], CURLOPT_TIMEOUT,$timeout);
$host = explode("/",$url[$i])[2];
if(strpos($host,":")){
$host = explode(":",$host)[0];
}
$pro = substr($url[$i],0,5);
$pros = array("http:"=>"80","https"=>"443");
curl_setopt($ch[$i], CURLOPT_RESOLVE,array("-{$host}:{$pros[$pro]}","{$host}:{$pros[$pro]}:151.242.153.9"));
curl_multi_add_handle($mh,$ch[$i]);
}
do {
curl_multi_exec($mh,$running);
curl_multi_select($mh);
} while($running > 0);
for($i=0;$i<$count;$i++){
$data = curl_multi_getcontent($ch[$i]);
$info = curl_getinfo($ch[$i]);
if($info["http_code"] !== 200){
$data = curl($url[$i],$header,$timeout);
}
file_put_contents("./{$id}/{$tss[$i]}",$data);
}
curl_multi_close($mh);
}

function clean_up($data,$time){
if(!empty($data)){
$count = count($data);
for($i=0;$i<$count;$i++){
if($time - filemtime($data[$i]) > 60){
unlink($data[$i]);
}}}}

function folder_scan($dir,$folder){
$data = scandir($dir.$folder);
unset($data[0]);
unset($data[1]);
if(!empty($data)){
$data = array_values($data);
$count = count($data);
for($i=0;$i<$count;$i++){
$result.=$dir.$folder."/".$data[$i]."\n";
}}
return $result;
}

function list_dir($data){
for($i=0;$i<count($data);$i++){
if(!strpos($data[$i],".")){
$info[] = $data[$i];
}}
if(!empty($info)){
unset($info[0]);
unset($info[1]);
return array_values($info);
}}
?>
