<?php
function generateThumb($url){
	$tmp = explode("file/d/",$url);
	$tmp2 = explode("/",$tmp[1]);
	$id = $tmp2[0];
	
	return "https://drive.google.com/thumbnail?id=$id&authuser=0&sz=w1280-h720";
	
}

function base64url_encode($data) { 
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
} 
function base64url_decode($data) { 
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
} 

function getCurrentRequestURL(){
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]";
	
	return $actual_link;
}
?>