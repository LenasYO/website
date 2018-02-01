<?php /* Smarty version Smarty-3.1.14, created on 2017-04-28 06:40:49
         compiled from "E:\website\project\00-frame\proj601\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:257965902e3f14086d8-29320867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae512fe3b9eea091201578258ccfb2741da7fe3' => 
    array (
      0 => 'E:\\website\\project\\00-frame\\proj601\\home\\views\\index.html',
      1 => 1490863125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257965902e3f14086d8-29320867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5902e3f14778f4_34244704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902e3f14778f4_34244704')) {function content_5902e3f14778f4_34244704($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="public/js/GlobalValue.js"></script>
<script type="text/javascript" src="public/js/Dialog.js"></script> <!-- 弹框 -->
<script type="text/javascript" src="public/js/freshpage.js"></script><!-- 刷新 -->
<script type="text/javascript" src="public/js/MyAudio.js"></script><!-- 音频 -->
<script type="text/javascript" src="public/js/requestAnimationFrame.js"></script><!-- 动画 -->

<title>xxxxx</title>
<?php echo $_smarty_tpl->getSubTemplate ("index_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body ontouchmove="javascript:event.preventDefault();">
	<!-- loadding -->
    <div id="loading_main">
		<p>Loading 0%</p>
	</div>
    <!-- 音乐 -->
    <img id="music_img" src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
" onClick="controlMusic();"/>

	<!--  首页 -->
    <div id="home_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['homeBg'];?>
) no-repeat;background-size:100% auto;">
        <span class="hm_startBtn" onClick="controlMusic1();"></span>
    </div>

</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>