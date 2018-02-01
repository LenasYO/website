<?php /* Smarty version Smarty-3.1.14, created on 2016-12-28 08:16:58
         compiled from "E:\website\practice\proj\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2148558636ef8efc463-57095543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b538e9c931aab724ff0ec84c3533cde1548ade' => 
    array (
      0 => 'E:\\website\\practice\\proj\\home\\views\\index.html',
      1 => 1482912910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2148558636ef8efc463-57095543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58636ef910f3e5_99940336',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636ef910f3e5_99940336')) {function content_58636ef910f3e5_99940336($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,no-store,must-revalidate" http-equiv="Cache-Control">
<meta content="no-siteapp" http-equiv="Cache-Control"/>
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<link href="public/css/reset.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="public/js/jquery-1.7.2-min.js"></script>
<script type="text/javascript" src="public/js/define.js"></script>
<script type="text/javascript" src="public/js/Dialog.js"></script> <!-- 弹框 -->
<script type="text/javascript" src="public/js/freshpage.js"></script><!-- 刷新 -->
<script type="text/javascript" src="public/js/MyAudio.js"></script><!-- 音频 -->
<script type="text/javascript" src="public/js/requestAnimationFrame.js"></script><!-- 动画 -->
<title>xxxxx</title>
<?php echo $_smarty_tpl->getSubTemplate ("index_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
	<!-- loadding -->
    <div id="loading_main">
		<p>Loading 0%</p>
	</div>
    <!-- 音乐 -->
    <!-- <div id="music">
        <audio id="mymusic" loop src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
" style="pointer-events:none;display:none;width:0!important;height:0!important;"/>
    </div> -->
    <img id="music_img" src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
" onClick="controllMusic();"/>

	<!--  首页 -->
    <div id="home_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['home_bg'];?>
) no-repeat;background-size:100% auto;">
    	<!-- <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
" /> -->
        <div class="hm_startBtn"></div>
    </div>
    
    

</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>