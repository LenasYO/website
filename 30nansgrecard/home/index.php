<?php
header('content-type:text/html;charset=utf-8');
session_start();//开启session
//引入框架使用步骤
$SuperMan = dirname(__FILE__).'/../SuperMan/Start.php';
include($SuperMan); //加载框架
$AppDir = str_replace('\\','/',dirname(__FILE__).'/');
SuperMan::startFrame($AppDir);//启动框架

?>