<?php
error_reporting(0);
header('Content-Type: text/json;charset=UTF-8');
$time = time();
$dir = "./";
$folders = list_dir(scandir($dir));
$counts = count($folders);
for($i=0;$i<$counts;$i++){
clean_up($dir,$folders[$i],$time);
}
$info = explode("url=",urldecode($_SERVER["QUERY_STRING"]))[1];
$url = trim(explode('(ref=',$info)[0]);
$url = trim(explode('&folder=',$url)[0]);
$url = trim(explode('&num=',$url)[0]);
$url = trim(explode('&size=',$url)[0]);
$ref = trim(explode(')',explode('(ref=',$info)[1])[0]);
$num = $_GET["num"];
$folder = $_GET["folder"];
$size = $_GET["size"];

$pam = explode("/",explode("?",$url)[0]);
$path = end($pam);
$pre = explode($path,$url)[0];
$pam = explode("/",$url)[2]."/";
$data = str_replace([$pam,".m3u8"],"",$url);
if(empty($folder)){
$id = str_replace(["/",":",".","=","-"],"",explode("://",explode("?",$data)[0])[1]);
}else{
$id = $folder;
}
$m3u8 = m3u8($url,$ref);
if(substr($m3u8,0,7) !== "#EXTM3U"){
header("HTTP/1.1 404 Not Found",true,404);
exit;
}
if(!is_dir("./{$id}")){
mkdir("./{$id}", 0777, true);
}
$seq = explode("\n",explode('EXT-X-MEDIA-SEQUENCE:',$m3u8)[1])[0];
$store_seq = file_get_contents("./{$id}/store_m3u8.txt");
if(!empty($store_seq)){
$store_seq = explode("\n",explode('EXT-X-MEDIA-SEQUENCE:',$store_seq)[1])[0];
}else{
$store_seq = "0";
}
if(substr($id,0,4) == "4gtv"){
$m3u8 = str_replace("/720","/1080",$m3u8);
}
$data = array_filter(explode("\n",$m3u8));
$count = count($data);
for($i=0;$i<$count;$i++){
if(substr($data[$i],0,1) !== "#"){
if(substr($data[$i],0,4) == "http"){
$ts = ts_filter($data[$i]);
if(file_exists("./{$id}/{$ts}")){
if(intval($seq) !== intval($store_seq)){
unlink("./{$id}/{$ts}");
unlink("./{$id}/{$ts}.txt");
$urls[] = trim($data[$i]);
$tss[] = trim($ts);
}}else{
$urls[] = trim($data[$i]);
$tss[] = trim($ts);
}
$data[$i] = "{$id}/{$ts}";
}else{
if(strpos($data[$i],"/")){
$ts = ts_filter($data[$i]);
}else{
$ts = explode("?",$data[$i])[0];
$ts = ts_filter($ts);
}
if(file_exists("./{$id}/{$ts}")){
if(intval($seq) !== intval($store_seq)){
unlink("./{$id}/{$ts}");
unlink("./{$id}/{$ts}.txt");
$urls[] = trim($pre.$data[$i]);
$tss[] = trim($ts);
}}else{
$urls[] = trim($pre.$data[$i]);
$tss[] = trim($ts);
}
$data[$i] = "{$id}/{$ts}";
}}}
file_put_contents("./{$id}/store_m3u8.txt",$m3u8);
if(intval($seq) == intval($store_seq)){
print_r(implode("\n",$data));
exit;
}
$count = count($urls);
if(empty($num) or $count < intval($num)){
$body = mutil_download($urls,$tss,$id,$ref);
}else{
$urls_s = array_chunk($urls, intval($num));
$tss_s = array_chunk($tss, intval($num));
$counts = count($urls_s);
for($i=0;$i<$counts;$i++){
$body = mutil_download($urls_s[$i],$tss_s[$i],$id,$ref);
}
}
$count = count($data);
if(!empty($size)){
for($i=0;$i<$count;$i++){
if(substr($data[$i],0,1) !== "#"){
$data[$i] = $data[$i]."?size=".file_get_contents("./$data[$i].txt");
}}}
print_r(implode("\n",$data));
exit;

function mutil_download($url,$tss,$id,$ref){
$count = count($url);
if(empty($ref) or substr($ref,0,4) !== "http"){
$mh = curl_multi_init();
$ch = array();
for($i=0;$i<$count;$i++){
$ch[$i] = curl_init($url[$i]);
curl_setopt($ch[$i], CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch[$i], CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch[$i], CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch[$i], CURLOPT_TIMEOUT,15);
curl_multi_add_handle($mh,$ch[$i]);
}}else{
$header[] = "Referer: {$ref}";
$ch = array();
for($i=0;$i<$count;$i++){
$ch[$i] = curl_init($url[$i]);
curl_setopt($ch[$i], CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch[$i], CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch[$i], CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch[$i], CURLOPT_HTTPHEADER, $header);
curl_setopt($ch[$i], CURLOPT_TIMEOUT,15);
curl_multi_add_handle($mh,$ch[$i]);
}}
do {
curl_multi_exec($mh,$running);
curl_multi_select($mh);
} while($running > 0);
for($i=0;$i<$count;$i++){
$data = curl_multi_getcontent($ch[$i]);
$len = strlen($data);
curl_multi_remove_handle($mh, $ch[$i]);
file_put_contents("./{$id}/{$tss[$i]}",$data);
file_put_contents("./{$id}/{$tss[$i]}.txt",$len);
}
curl_multi_close($mh);
}

function clean_up($dir,$folder,$time){
$data = scandir($dir.$folder);
unset($data[0]);
unset($data[1]);
$data = array_values($data);
$count = count($data);
if(empty($count) or $count === 0){
rmdir($dir.$folder);
}else{
for($i=0;$i<$count;$i++){
if($time - filemtime($dir.$folder."/".$data[$i]) > 120){
unlink($dir.$folder."/".$data[$i]);
}}}}

function list_dir($data){
$count = count($data);
for($i=0;$i<$count;$i++){
if(!strpos($data[$i],".php")){
$info[] = $data[$i];
}}
unset($info[0]);
unset($info[1]);
return array_values($info);
}

function m3u8($url,$ref){
$header[] = "Cache-Control: no-cache";
$header[] = "Pragma: no-cache";
if(empty($ref) or substr($ref,0,4) !== "http"){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_TIMEOUT,3);
}else{
$header[] = "Referer: {$ref}";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_TIMEOUT,3);
}
$data = curl_exec($ch);
curl_close($ch);
return $data;
}

function ts_filter($ts){
$ts = explode("/",explode("?",$ts)[0]);
$ts = explode("=",end($ts));
if(count($ts) > 1){
return end($ts);
}else{
return $ts[1];
}}
?>