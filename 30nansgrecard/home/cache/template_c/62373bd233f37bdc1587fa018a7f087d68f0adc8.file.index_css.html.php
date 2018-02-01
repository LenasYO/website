<?php /* Smarty version Smarty-3.1.14, created on 2016-12-28 08:14:57
         compiled from "E:\website\practice\proj\home\views\index_css.html" */ ?>
<?php /*%%SmartyHeaderCode:873858636ef9128a23-48308306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62373bd233f37bdc1587fa018a7f087d68f0adc8' => 
    array (
      0 => 'E:\\website\\practice\\proj\\home\\views\\index_css.html',
      1 => 1482912122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '873858636ef9128a23-48308306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58636ef912bd84_05557067',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636ef912bd84_05557067')) {function content_58636ef912bd84_05557067($_smarty_tpl) {?><style type="text/css">
     html,body{width:100%;height:100%;margin:0;padding:0;font-size:10px;background:#FFFFFF;-webkit-overflow-scrolling: touch;}
     a{color:#000000;-webkit-tap-highlight-color: transparent;}
     img,li,div{-webkit-tap-highlight-color: transparent;}
     input::-webkit-input-placeholder{ color: #8a93ba; }
     #loading_main{width:100%;height:100%;position:fixed;left:0;top:0;z-index:1000000;background: #fff;}
     #loading_main p{width:100%;margin-top:55%; text-align:center;font-size:1.75em;color:#000;}

    /* 首页 */
    #home_main{ position: relative; display: none; overflow: hidden;}
    #home_main .hm_startBtn{ position: absolute; left: 0; top: 0; z-index: 200; background: rgba(0,0,0,0.7);}
    

    /* 音乐 */
    #music{ position: absolute; left: 0; top: -10%; z-index: 1000;}
    #music_img{position:fixed;right:2%;top:2%;z-index:100001;display:none;}
    .music_move{animation: act4 3s linear 0s infinite normal;-webkit-animation: act4 3s linear 0s infinite normal;}
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
    }
</style><?php }} ?>