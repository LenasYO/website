<?php /* Smarty version Smarty-3.1.14, created on 2016-11-08 03:59:12
         compiled from "E:\AppServ\www\16eleven\northcool\home\views\index_css.html" */ ?>
<?php /*%%SmartyHeaderCode:30632581c2703451546-25169874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aec2410a67a388f8faa94d00d8ff4b0638ab867' => 
    array (
      0 => 'E:\\AppServ\\www\\16eleven\\northcool\\home\\views\\index_css.html',
      1 => 1478575141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30632581c2703451546-25169874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_581c270345f377_80717308',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581c270345f377_80717308')) {function content_581c270345f377_80717308($_smarty_tpl) {?><style type="text/css">
     html,body{width:100%;height:100%;margin:0;padding:0;font-size:10px;background:#FFFFFF;-webkit-overflow-scrolling: touch;}
     a{color:#000000;-webkit-tap-highlight-color: transparent;}
     img,li,div{-webkit-tap-highlight-color: transparent;}
    /* 首页 */
    #home_main{ position: relative; display: none; overflow: hidden;}
    #home_main img{ position: absolute; left: 0; top: 0; z-index: 100;}

    /* 规则页 */
    #rule_main{ position: absolute; left: 0; top: 0; z-index: 500; display: none; overflow: hidden;}
    #rule_main span{  position: absolute; left: 0; top: 0; z-index: 510; display: block;}

    /* 进入页 */
    #enter_main{ position: relative; display: none; overflow: hidden;}
    #enter_main img{ position: absolute; left: 0; top: 0; z-index: 100;}

    /* 选择角色页 */
    #choose_main{ position: relative; display: none; overflow: hidden;}
    #choose_main img{ position: absolute; left: 0; top: 0; z-index: 100;}

    /* 详情页 */
    #detail_main{ position: relative; display: none; overflow: hidden;}
    #detail_main .dm_detailbg{ width: 100%; position: absolute; left: 0; top: 0; z-index: 100; display: none;}
    #detail_main .dm_head{ position: absolute; left: 0; top: 0; z-index: 120; background: rgba(255,255,255,1); border-radius: 50%; -webkit-border-radius: 50%; overflow: hidden;}
    #detail_main .dm_nickname{ position: absolute; left: 0; top: 0; z-index: 120; font-size: 1.6rem; color: #fff; white-space: nowrap; overflow: hidden; text-overflow:ellipsis; }
    #detail_main .dm_changeNum{ position: absolute; left: 0; top: 0; z-index: 140; font-size: 1.6rem; color: #fff600; font-weight: bold; text-align: center;}
    #detail_main .dm_Clogo{ position: absolute; left: 0; top: 0; z-index: 130; display: none;}
    #detail_main .dm_level{ position: absolute; left: 0; top: 0; z-index: 130; display: none;}
    #detail_main .dm_gameBtn{ position: absolute; left: 0; top: 0; z-index: 150;}
    #detail_main .dm_shareBtn{ position: absolute; left: 0; top: 0; z-index: 150;}
    #detail_main .dm_drawBtn{ position: absolute; left: 0; top: 0; z-index: 150; display: none;}
    #detail_main .dm_div{ position: absolute; left: 0; top: 0; z-index: 200; display: none; overflow: hidden; background: rgba(0,0,0,0.9);}
    #detail_main .dm_div img{ width: 100%; position: absolute; left: 0; top: 0; z-index: 220; display: none;}

    /* 技能召唤页 */
    #buzzers_main{ position: absolute; left: 0; top: 0; z-index: 500; display: none; overflow: hidden;}
    #buzzers_main .bm_div{ position: absolute; left: 0; top: 0; z-index: 501;}
    #canvas{ position: absolute; left: 0; top: 0; z-index: 520; border-radius: 50%; -webkit-border-radius: 50%; }
    #buzzers_main span{  position: absolute; left: 0; top: 0; z-index: 510; font-size: 2.0rem; font-weight: bold; color: #10daa8; text-align: center; display: block; }

    /* 机会用完页 */
    #nochangebg_main{ position: absolute; left: 0; top: 0; z-index: 600; display: none; overflow: hidden;}
    #nochangebg_main span{  position: absolute; left: 0; top: 0; z-index: 610; display: block;}

    /* 分享给好友页1 */
    #share1_main{ position: absolute; left: 0; top: 0; z-index: 1700; display: none; overflow: hidden;}

    /* 分享给好友页2 */
    #share2_main{ position: absolute; left: 0; top: 0; z-index: 1700; display: none; overflow: hidden;}

    /* 获得卡片页 */
    #card_main{ position: absolute; left: 0; top: 0; z-index: 700; background: rgba(0,0,0,0.7); display: none; overflow: hidden;}
    #card_main img{ position: absolute; left: 0; top: 0; z-index: 720;}
    #card_main .cdm_img{ display: none; }

    /* 二维码页 */
    #code_main{ position: absolute; left: 0; top: 0; z-index: 800; background: rgba(0,0,0,0.7); display: none; overflow: hidden;}
    #code_main img{ width: 100%; position: absolute; left: 0; top: 0; z-index: 820; }
    #code_main .cdm_img{ display: none;}

    /* 中奖页 */
    #prize_main{ position: absolute; left: 0; top: 0; z-index: 1000; background: rgba(0,0,0,0.7); display: none; overflow: hidden;}
    #prize_main span{ position: absolute; left: 0; top: 0; z-index: 1020; display: block;}
    #prize_main .pm_money{ font-size: 2.4rem; font-weight: bold; color: #fff; text-align: center;}

    /* 不中奖页 */
    #noprize_main{ position: absolute; left: 0; top: 0; z-index: 1000; background: rgba(0,0,0,0.7); display: none; overflow: hidden;}
    #noprize_main span{ position: absolute; left: 0; top: 0; z-index: 1020; display: block; }

    .big_move{animation: bigs 1s;
                -webkit-animation: bigs 1s;}
    
    
    @keyframes bigs{
      0%{
        transform:scale(0);
        -webkit-transform:scale(0);
      }
      100%{
        transform:scale(1);
        -webkit-transform:scale(1);
      }
    }
    @-webkit-keyframes bigs{
      0%{
        transform:scale(0);
        -webkit-transform:scale(0);
      }
      100%{
        transform:scale(1);
        -webkit-transform:scale(1);
      }
    } 

    /* 音乐 */
    /* #music{ position: absolute; left: 0; top: -10%; z-index: 1000;}
    #music_img{ position: absolute; right: 3%; top:2%; z-index: 1001; border-radius: 50%; -webkit-border-radius: 50%; overflow: hidden;}
    #music_img img{ width: 100%; display: none;}
    .music_move{animation: act4 3s linear 0s infinite normal;
                -webkit-animation: act4 3s linear 0s infinite normal;}
    
    
    @keyframes act4{
      0%{
        transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
      }
      100%{
        transform:rotate(360deg);
        -webkit-transform:rotate(360deg);
      }
    }
    @-webkit-keyframes act4{
      0%{
        transform:rotate(0deg);
        -webkit-transform:rotate(0deg);
      }
      100%{
        transform:rotate(360deg);
        -webkit-transform:rotate(360deg);
      }
    } */
</style><?php }} ?>