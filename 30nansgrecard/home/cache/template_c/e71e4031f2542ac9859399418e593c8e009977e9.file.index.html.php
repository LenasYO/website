<?php /* Smarty version Smarty-3.1.14, created on 2017-12-29 07:21:42
         compiled from "E:\website\000nansgrecard\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:297475a44504a7b6817-05963581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71e4031f2542ac9859399418e593c8e009977e9' => 
    array (
      0 => 'E:\\website\\000nansgrecard\\home\\views\\index.html',
      1 => 1514532099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297475a44504a7b6817-05963581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a44504a83ac46_37218075',
  'variables' => 
  array (
    'vt' => 0,
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a44504a83ac46_37218075')) {function content_5a44504a83ac46_37218075($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript">
     window.onerror = function(errorMessage, scriptURI, lineNumber,columnNumber,errorObj){
        alert(errorMessage+','+scriptURI+','+lineNumber+','+columnNumber+','+errorObj);
     }
</script>
<script type="text/javascript" src="public/js/autoloadjs.js?vt=<?php echo $_smarty_tpl->tpl_vars['vt']->value;?>
"></script>
<script type="text/javascript">
!function(win){
    var jsArray = [
        'public/js/jquery-1.7.2-min.js',
        'public/js/define.js',
        'public/js/GlobalValue.js',
        'public/js/freshpage.js',/*刷新*/
        'public/js/prevLoadImages.js',/*加载*/
        'public/js/MyAudio.js',/*音频*/
        'public/js/requestAnimationFrame.js',/*动画*/
        'public/js/Dialog.js',/*弹框*/
        'public/js/GhostClick.js',/*点击*/
        'public/js/app.js?vt='+(new Date().getTime())
    ];

    autoloadjs(jsArray);

    win.gameImgArr = ['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['heka'];?>
'];
    win.mymusicurl = '<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
';
    win.window_load_flag = false;//必须全局变量
    win.onload = function(){
        window_load_flag = true;
    }
}(window);
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
    </div>
    <!--  制作页 -->
    <div id="make_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['p2'];?>
) no-repeat;background-size:100% auto;">
        <textarea id="msgText" placeholder="写下祝福语,送给TA"></textarea>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['makeBtn'];?>
" class="makeBtn" ontouchstart="HtmlFunc['mergeShow_btn'](event);">
    </div>
    <div id="process_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['p3'];?>
) no-repeat;background-size:100% auto;"></div>
    <!-- 合成页 -->
    <div id="merge_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['p4'];?>
) no-repeat;background-size:100% auto;">
        <!-- <canvas id="canvas"></canvas> -->
        <img id="imgBase" src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['heka'];?>
" crossOrigin="Anonymous"/>
        <div id="imgUploadX"></div>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['againBtn'];?>
" class="againBtn" ontouchstart="HtmlFunc['refresh_btn'](event);">
    </div>

</body>
</html><?php }} ?>