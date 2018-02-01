<?php /* Smarty version Smarty-3.1.14, created on 2016-11-08 07:05:18
         compiled from "E:\AppServ\www\16eleven\northcool\home\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5067581c2703280054-98233317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8565c70dfb46eaace21c7283c5937edde74d9fc3' => 
    array (
      0 => 'E:\\AppServ\\www\\16eleven\\northcool\\home\\views\\index.html',
      1 => 1478588585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5067581c2703280054-98233317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_581c2703437eb5_39062924',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581c2703437eb5_39062924')) {function content_581c2703437eb5_39062924($_smarty_tpl) {?><!DOCTYPE html>
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
<title>xxxxx</title>
<?php echo $_smarty_tpl->getSubTemplate ("index_css.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
    <!-- <div class="audioDiv">
      <audio id="myAudio" loop src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
" style="pointer-events:none;display:none;width:0!important;height:0!important;"/>
    </div>
    <img id="music_img" src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
"/> -->
	<!-- 首页 -->
    <div id="home_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['homebg'];?>
)no-repeat;background-size:100% auto;">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['hm_startBtn'];?>
" class="hm_startBtn" onclick="shFn(1);"/>
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['hm_ruleBtn'];?>
" class="hm_ruleBtn" onclick="shFn(2);"/>
    </div>
    
    <!-- 规则页 -->
    <div id="rule_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['rulebg'];?>
)no-repeat rgba(0,0,0,0.7);background-size:100% auto;">
        <span class="rm_backBtn" onclick="shFn(3);"></span>
    </div>

    <!-- 进入页 -->
    <div id="enter_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['enterbg'];?>
)no-repeat;background-size:100% auto;">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['em_startBtn'];?>
" class="em_startBtn" onclick="shFn(4);"/>
    </div>

    <!-- 选择角色页 -->
    <div id="choose_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['choosebg'];?>
)no-repeat;background-size:100% auto;">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cm_menBtn'];?>
" class="cm_menBtn" onclick="shFn(5);"/>
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cm_womenBtn'];?>
" class="cm_womenBtn" onclick="shFn(6);"/>
    </div>

    <!-- 详情页 -->
    <div id="detail_main">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_detailbg1'];?>
" class="dm_detailbg" id="dm_detailbg1"/>
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_detailbg2'];?>
" class="dm_detailbg" id="dm_detailbg2"/>
        <span class="dm_head" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['head'];?>
)no-repeat;background-size:100% auto;"></span>
        <span class="dm_nickname">余健兰余健兰</span>
        <span class="dm_changeNum">3</span>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['card_logo1'];?>
" class="dm_Clogo" id="dm_Clogo1" onclick="imageFn(1);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['card_logo2'];?>
" class="dm_Clogo" id="dm_Clogo2" onclick="imageFn(2);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['card_logo3'];?>
" class="dm_Clogo" id="dm_Clogo3" onclick="imageFn(3);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['card_logo4'];?>
" class="dm_Clogo" id="dm_Clogo4" onclick="imageFn(4);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['card_logo5'];?>
" class="dm_Clogo" id="dm_Clogo5" onclick="imageFn(5);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['card_logo6'];?>
" class="dm_Clogo" id="dm_Clogo6" onclick="imageFn(6);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_level0'];?>
" class="dm_level" id="dm_level0"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_level1'];?>
" class="dm_level" id="dm_level1"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_level2'];?>
" class="dm_level" id="dm_level2"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_level3'];?>
" class="dm_level" id="dm_level3"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_level4'];?>
" class="dm_level" id="dm_level4"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_level5'];?>
" class="dm_level" id="dm_level5"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_level6'];?>
" class="dm_level" id="dm_level6"/>
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_gameBtn'];?>
" class="dm_gameBtn" onclick="shFn(7);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_shareBtn'];?>
" class="dm_shareBtn" onclick="shFn(9);"/>
    	<img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['dm_drawBtn'];?>
" class="dm_drawBtn" onclick="shFn(10);"/>

        <div class="dm_div" onclick="shFn(20);">
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img1'];?>
" class="dm_img" id="dm_img1"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img2'];?>
" class="dm_img" id="dm_img2"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img3'];?>
" class="dm_img" id="dm_img3"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img4'];?>
" class="dm_img" id="dm_img4"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img5'];?>
" class="dm_img" id="dm_img5"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img6'];?>
" class="dm_img" id="dm_img6"/>
        </div>
    </div>
    
    <!-- 技能召唤页 -->
    <div id="buzzers_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['drawbg'];?>
)no-repeat rgba(0,0,0,0.7);background-size:100% auto;" >
        <div class="bm_div" ontouchmove="javascript:event.preventDefault();" ontouchend="javascript:event.preventDefault();"></div>
        <canvas id="canvas">您的浏览器不支持 canvas 标签</canvas> 
        <span class="bm_closeBtn" onclick="shFn(8);"></span>
        <span class="bm_changeNum">3</span>
    </div>

    <!-- 机会用完页 -->
    <div id="nochangebg_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['nochangebg'];?>
)no-repeat rgba(0,0,0,0.7);background-size:100% auto;">
        <span class="nm_shareBtn" onclick="shFn(9);"></span>
        <span class="nm_backBtn" onclick="shFn(12);"></span>
    </div>

    <!-- 分享给好友页1 -->
    <div id="share1_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['sharebg1'];?>
)no-repeat rgba(0,0,0,0.7);background-size:100% auto;" onclick="shFn(13);">
    </div>

    <!-- 分享给好友页2 -->
    <div id="share2_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['sharebg2'];?>
)no-repeat rgba(0,0,0,0.7);background-size:100% auto;" onclick="shFn(14);">
    </div>
    
    <!-- 获得卡片页 -->
    <div id="card_main">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img1'];?>
" class="cdm_img" id="cdm_img1"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img2'];?>
" class="cdm_img" id="cdm_img2"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img3'];?>
" class="cdm_img" id="cdm_img3"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img4'];?>
" class="cdm_img" id="cdm_img4"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img5'];?>
" class="cdm_img" id="cdm_img5"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_img6'];?>
" class="cdm_img" id="cdm_img6"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_backBtn'];?>
" class="cdm_backBtn" onclick="shFn(15);"/>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['cdm_continueBtn'];?>
" class="cdm_continueBtn" onclick="shFn(16);"/>
    </div>

    <!-- 二维码页 -->
    <div id="code_main">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['codebg'];?>
" class="com_codebg" onclick="shFn(17);"/>
    </div>

    <!-- 中奖页 -->
    <div id="prize_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['prizebg'];?>
)no-repeat rgba(0,0,0,0.7);background-size:100% auto;">
        <span class="pm_money">￥2</span>
        <span class="pm_shareBtn" onclick="shFn(18);"></span>
    </div>

    <!-- 不中奖页 -->
    <div id="noprize_main" style="background:url(<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['noprizebg'];?>
)no-repeat rgba(0,0,0,0.7);background-size:100% auto;">
        <span class="npm_shareBtn" onclick="shFn(18);"></span>
    </div>

</body>
</html>
<?php echo $_smarty_tpl->getSubTemplate ("index_js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>