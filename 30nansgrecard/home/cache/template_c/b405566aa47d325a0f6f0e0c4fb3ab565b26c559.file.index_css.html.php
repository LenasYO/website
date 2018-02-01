<?php /* Smarty version Smarty-3.1.14, created on 2017-01-20 10:29:55
         compiled from "E:\website\project\kuangjia\proj3\home\views\index_css.html" */ ?>
<?php /*%%SmartyHeaderCode:219175881e6a3e2fc60-31919691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b405566aa47d325a0f6f0e0c4fb3ab565b26c559' => 
    array (
      0 => 'E:\\website\\project\\kuangjia\\proj3\\home\\views\\index_css.html',
      1 => 1484906785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219175881e6a3e2fc60-31919691',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5881e6a3e32e33_19931067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5881e6a3e32e33_19931067')) {function content_5881e6a3e32e33_19931067($_smarty_tpl) {?><style type="text/css">
     html,body{width:100%;height:100%;margin:0;padding:0;font-size:10px;background:#FFFFFF;-webkit-overflow-scrolling: touch;}
     a{color:#000000;-webkit-tap-highlight-color: transparent;}
     img,li,div{-webkit-tap-highlight-color: transparent;}
     input::-webkit-input-placeholder{ color: #8a93ba; }
     #loading_main{width:100%;height:100%;position:fixed;left:0;top:0;z-index:1000000;background: #fff;}
     #loading_main p{width:100%;margin-top:55%; text-align:center;font-size:1.75em;color:#000;}

     * {   
        -webkit-touch-callout:none;  /*系统默认菜单被禁用*/   
        -webkit-user-select:none; /*webkit浏览器*/   
        -khtml-user-select:none; /*早期浏览器*/   
        -moz-user-select:none;/*火狐*/   
        -ms-user-select:none; /*IE10*/   
        user-select:none;   
     } 
     input {      
       -webkit-user-select:auto; /*webkit浏览器*/     
     } 


    /* 首页 */
    #home_main{ position: relative; display: none; overflow: hidden;}
    #home_main .hm_startBtn{ position: absolute; left: 0; top: 0; z-index: 200; background: rgba(0,0,0,0.7);}
    

    /* 音乐 */
    #music{ position: absolute; left: 0; top: -10%; z-index: 1000;}
    #music_img{position:fixed;right:2%;top:2%;z-index:100001;display:none;}
    .music_move{animation: musicAct 3s linear 0s infinite normal;-webkit-animation: musicAct 3s linear 0s infinite normal;}
    @keyframes musicAct{
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