<?php
//引入ext里面的文件
function ext_import($file){
	$file_path = APP_EXT.$file;
	if(!file_exists($file_path)){
		exit('引入文件不存在');
	}
	require_once($file_path);
}

//重定向
function Redirect($url){
   header('Location: '.$url);
   exit();
}

//带消息的停顿重定向
function MsgRedirect($url, $time, $msg){
   header('refresh:'.$time.', url='.$url);
   echo '<center><br><br><br><br><font style="color:#FF0000;">';
   print($msg);
   echo '</font></center>';
   exit();
} 

//判断手机wap还是web,
function is_mobile(){
 $user_agent = $_SERVER['HTTP_USER_AGENT'];
 $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
 $is_mobile = false;//FALSE代表web
 foreach ($mobile_agents as $device){
  if (stristr($user_agent, $device)){
   $is_mobile = true;//TRUE代表wap
   break;
  }
 }
 return $is_mobile;
}

/*
*判断是否开启get_magic_quotes_gpc()
*/
function get_gpc_val(){
   if(get_magic_quotes_gpc()){
        return TRUE;
   }else{
        return FALSE;
   }
}

/*
*未开启get_magic_quotes_gpc()时的过滤数据具体方法
*/
function data_addslashes($data){
    if(is_array($data)){
       foreach($data as $key=>$val){
           $data[data_addslashes($key)] = data_addslashes($val);
       }
    }else{
       $data = htmlspecialchars(addslashes($data));
    }
    return $data;
}

?>