<?php
require_once("qiniu/io.php");
require_once("qiniu/rs.php");

//上传到图片云服务
function upload($key, $localfile){
	
	$bucket = "timelink";
	$accessKey = '_cEqPuwcON-vr8JaZwDqsJguCWiiSQbezSsW6pl7';
	$secretKey = 'OGsf-0VwArGvm6m5KWhfHlbK4iDs6lXmF7_iAaF4';
	Qiniu_SetKeys($accessKey, $secretKey);
	$putPolicy = new Qiniu_RS_PutPolicy($bucket);
	$upToken = $putPolicy->Token(null);
	$putExtra = new Qiniu_PutExtra();
	$putExtra->Crc32 = 1;
	list($ret, $err) = Qiniu_PutFile($upToken, $key, $localfile, $putExtra);
	if ($err !== null) {
	    return 0;
	} else {
		unlink($localfile);
	    return 1;
	}   
}

//上传到图片云服务
function uploadcontent($key, $content){
	
	$bucket = "timelink";
	$accessKey = '_cEqPuwcON-vr8JaZwDqsJguCWiiSQbezSsW6pl7';
	$secretKey = 'OGsf-0VwArGvm6m5KWhfHlbK4iDs6lXmF7_iAaF4';
	Qiniu_SetKeys($accessKey, $secretKey);
	$putPolicy = new Qiniu_RS_PutPolicy($bucket);
	$upToken = $putPolicy->Token(null);
	$putExtra = new Qiniu_PutExtra();
	$putExtra->Crc32 = 1;
	list($ret, $err) = Qiniu_Put($upToken, $key, $content, $putExtra);
	if ($err !== null) {
	    return 0;
	} else {
	    return 1;
	}   
}

function upload0($key, $localfile){
	
	$bucket = "timelink";
	$accessKey = '_cEqPuwcON-vr8JaZwDqsJguCWiiSQbezSsW6pl7';
	$secretKey = 'OGsf-0VwArGvm6m5KWhfHlbK4iDs6lXmF7_iAaF4';
	Qiniu_SetKeys($accessKey, $secretKey);
	$putPolicy = new Qiniu_RS_PutPolicy($bucket);
	$upToken = $putPolicy->Token(null);
	$putExtra = new Qiniu_PutExtra();
	$putExtra->Crc32 = 1;
	list($ret, $err) = Qiniu_PutFile($upToken, $key, $localfile, $putExtra);
	if ($err !== null) {
	    return 0;
	} else {
	    return 1;
	}   
}

//获取图片云服务的链接
function getfile_xxxx($key){
	$domain = 'timelink.87gogo.com';
	$bucket = "timelink";
	$accessKey = '_cEqPuwcON-vr8JaZwDqsJguCWiiSQbezSsW6pl7';
	$secretKey = 'OGsf-0VwArGvm6m5KWhfHlbK4iDs6lXmF7_iAaF4';
	Qiniu_SetKeys($accessKey, $secretKey);  
	$baseUrl = Qiniu_RS_MakeBaseUrl($domain, $key);
	$getPolicy = new Qiniu_RS_GetPolicy();
	$privateUrl = $getPolicy->MakeRequest($baseUrl, null);
	return $privateUrl;
}

function getfile($filename){
	$url = 'http://timelink.87gogo.com/'.$filename;
	$url = explode("?", $url);
	$path=basename($url[0]);
	$path="/".$path;
	$time = time()+3600*24;
	$T=dechex($time);
	$key="e098ba893c98d9abb099b4b953aa70997ba90288";
	$S=$key.$path.$T;
	$token = md5($S);
	$sign =strtolower($token);
	if(isset($url[1])){
		$url = "http://timelink.87gogo.com".$path."?".$url[1]."&sign=".$sign."&t=".$T;
		return $url;
	}else{
		$url = "http://timelink.87gogo.com".$path."?sign=".$sign."&t=".$T;
		return $url;
	}
}

function copyfile($bucketSrc, $keySrc, $bucketDest, $keyDest){

	$accessKey = '_cEqPuwcON-vr8JaZwDqsJguCWiiSQbezSsW6pl7';
	$secretKey = 'OGsf-0VwArGvm6m5KWhfHlbK4iDs6lXmF7_iAaF4';

	Qiniu_SetKeys($accessKey, $secretKey);
	$client = new Qiniu_MacHttpClient(null);

	$err = Qiniu_RS_Copy($client, $bucketSrc, $keySrc, $bucketDest, $keyDest);
	echo "<br>====> Qiniu_RS_Copy result: \n";
	if ($err !== null) {
		echo '<pre>';
	    print_r($err);
	    echo '</pre>';
	} else {
	    echo "<br>Success!";
	}
}

//根据key删除文件
function delfile($key){
	$bucket = "timelink";
	$accessKey = '_cEqPuwcON-vr8JaZwDqsJguCWiiSQbezSsW6pl7';
	$secretKey = 'OGsf-0VwArGvm6m5KWhfHlbK4iDs6lXmF7_iAaF4';

	Qiniu_SetKeys($accessKey, $secretKey);
	$client = new Qiniu_MacHttpClient(null);

	$err = Qiniu_RS_Delete($client, $bucket, $key);
	if ($err !== null) {
	    return 0;
	} else {
	    return 1;
	}
}
?>