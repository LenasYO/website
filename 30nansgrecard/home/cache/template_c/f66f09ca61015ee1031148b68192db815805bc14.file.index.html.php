<?php /* Smarty version Smarty-3.1.14, created on 2017-06-20 08:40:30
         compiled from "E:\website\miniso\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16275948ddeb537d02-35091168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f66f09ca61015ee1031148b68192db815805bc14' => 
    array (
      0 => 'E:\\website\\miniso\\home\\views\\index.html',
      1 => 1497948003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16275948ddeb537d02-35091168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5948ddeb596672_93825251',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5948ddeb596672_93825251')) {function content_5948ddeb596672_93825251($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="public/js/prevLoadImages.js"></script><!-- 加载 -->
<script type="text/javascript" src="public/js/GhostClick.js"></script><!--点击 -->
<script type="text/javascript" src="public/js/Dialog.js"></script> <!-- 弹框 -->
<script type="text/javascript" src="public/js/freshpage.js"></script><!-- 刷新 -->
<script type="text/javascript" src="public/js/MyAudio.js"></script><!-- 音频 -->
<script type="text/javascript" src="public/js/requestAnimationFrame.js"></script><!-- 动画 -->


<title>xxxxx</title>
<script>
(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            if(clientWidth>=640){
                docEl.style.fontSize = '100px';
            }else{
                docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
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

<!-- 每个标签加个自己的前缀，如：ln_ / xq_ -->
	<!--  首页 -->
    <div id="ln_home_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['p1'];?>
) no-repeat;background-size:100% auto;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['startBtn'];?>
" class="ln_hm_startBtn" ontouchstart="HtmlFunc['ln_start_btn'](event);">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['ruleBtn'];?>
" class="ln_hm_ruleBtn" ontouchstart="HtmlFunc['ln_rule_btn'](event);">
        <!-- <span class="ln_hm_startBtn" ontouchstart="HtmlFunc['ln_start_btn'](event);"></span>
        <span class="ln_hm_startBtn" ontouchstart="HtmlFunc['ln_start_btn'](event);"></span> -->
    </div> 
</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>