<?php /* Smarty version Smarty-3.1.14, created on 2017-11-10 01:54:21
         compiled from "E:\website\frame05\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:279325948c5418b45e1-76229209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9551de256fc7317e797d5d19a8bc5356dde8f9a' => 
    array (
      0 => 'E:\\website\\frame05\\home\\views\\index.html',
      1 => 1510113516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279325948c5418b45e1-76229209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5948c541907939_41585323',
  'variables' => 
  array (
    'vt' => 0,
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5948c541907939_41585323')) {function content_5948c541907939_41585323($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="public/js/autoloadjs.js?vt=<?php echo $_smarty_tpl->tpl_vars['vt']->value;?>
"></script>
<script type="text/javascript">
!function(){
    var jsArray = [
        'public/js/jquery-1.7.2-min.js',
        'public/js/define.js',
        'public/js/GlobalValue.js',
        'public/js/freshpage.js',/*刷新*/
        'public/js/prevLoadImages.js',/*加载*/
        'public/js/MyAudio.js',/*音频*/
        'public/js/VideoToCanvas.js',/*视频*/
        'public/js/requestAnimationFrame.js',/*动画*/
        'public/js/Dialog.js',/*弹框*/
        'public/js/GhostClick.js',/*点击*/
        'public/js/app.js?vt='+(new Date().getTime())
    ];
    autoloadjs(jsArray);
}();
</script>


<title>xxxxx</title>
<script>
(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            if(clientWidth>=750){
                docEl.style.fontSize = '100px';
            }else{
                docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
            }
        };

    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("index_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
	<!-- loadding -->
    <div id="loading_main">
        <p class="lm_p1"><span>0%</span></p >
        <ul class="lm_ul">
            <li class="lm_ul_li"></li>
        </ul>
    </div>
    <!-- 音乐 -->
    <div id="music" onClick="HtmlFunc['controlMusic']();">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
" />
    </div>
	<!--  首页 -->
    <div id="home_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['p1'];?>
) no-repeat;background-size:100% auto;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['startBtn'];?>
" class="startBtn" ontouchstart="HtmlFunc['start_btn'](event);">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['ruleBtn'];?>
" class="ruleBtn" ontouchstart="HtmlFunc['ruleShow_btn'](event);">
        <!-- <span class="startBtn" ontouchstart="HtmlFunc['start_btn'](event);"></span> -->
    </div>
</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>