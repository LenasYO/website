<?php /* Smarty version Smarty-3.1.14, created on 2016-10-24 08:08:42
         compiled from "E:\AppServ\www\16ten\SMWgame\SuperMan\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2059580dc18a06cff2-50393506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42eee04d4f3c4bef6431efdf40fd8d9977ab2e1f' => 
    array (
      0 => 'E:\\AppServ\\www\\16ten\\SMWgame\\SuperMan\\home\\views\\index.html',
      1 => 1477296445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2059580dc18a06cff2-50393506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'clearvt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580dc18a217179_54409018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dc18a217179_54409018')) {function content_580dc18a217179_54409018($_smarty_tpl) {?><!DOCTYPE html>
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
<title>aaa</title>

<?php echo $_smarty_tpl->getSubTemplate ("index_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>
    <!-- 音乐 -->
    <!-- <div id="music">
        <audio id="mymusic" loop src="public/basstoken/images/music.mp3" style="pointer-events:none;display:none;width:0!important;height:0!important;"/>
    </div>
    <div  id="music_img"  onclick="musicChange();">
        <img src="public/basstoken/images/music.png">
    </div> -->
    <!-- 音乐结束 -->

    <div id="game_home" style="background: url(public/images/P0_1.jpg?clearvt=<?php echo $_smarty_tpl->tpl_vars['clearvt']->value;?>
) no-repeat; background-size: 100% auto; ">
        <span class="gm_time">30s</span>
        <canvas id="mycanvas"></canvas>
        <img src="public/images/P0_7.png?clearvt=<?php echo $_smarty_tpl->tpl_vars['clearvt']->value;?>
" class="gm_bottom"/>
    </div>
</body>
</html>

<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>