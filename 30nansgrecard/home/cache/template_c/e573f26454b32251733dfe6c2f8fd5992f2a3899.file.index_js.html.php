<?php /* Smarty version Smarty-3.1.14, created on 2017-06-20 08:39:19
         compiled from "E:\website\miniso\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:286255948ddeb5badc8-02760434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e573f26454b32251733dfe6c2f8fd5992f2a3899' => 
    array (
      0 => 'E:\\website\\miniso\\home\\views\\index_js.html',
      1 => 1497947925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286255948ddeb5badc8-02760434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5948ddeb5ca7e9_00727452',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5948ddeb5ca7e9_00727452')) {function content_5948ddeb5ca7e9_00727452($_smarty_tpl) {?><script type="text/javascript">
    (function(win){//立即执行函数
        define({
            'mw':$(win).width(),
            'mh':$(win).height(),//屏幕宽高
            'ph':(($(win).width())*1334)/750,
            'w0':(750*($(win).height()))/1334,
            'gameArr':[],//图片数组
            'loadFlag':false,//页面是否加载完：默认没有
            'checkloadok_flag':false,//图片是否加载完：默认没有
            'myAudio':void(0),
            'musicflag':false,//音频是否播放
            'check_audio_flag':false,//音频是否加载完
            'init_flag':false,//是否进入初始页面
            'HtmlFunc':[],

        });

        var gameImgArr = ['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
'];
        win.onload = function(){
            loadgameimg();
            imgLoader(gameImgArr, function(percentage){
                if(percentage>=1){//加载完成
                    $('#loading_main .lm_p1').find('span').html(parseInt(percentage*100)+'%');
                    $('#loading_main .lm_ul_li').width(mw*0.6*percentage);
                    checkloadok();
                }else{
                    $('#loading_main .lm_p1').find('span').html(parseInt(percentage*100)+'%');
                    $('#loading_main .lm_ul_li').width(mw*0.6*percentage);
                }
            });
            // 音频
            myAudio = new MyAudio('<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
',true);
            var myaudio_t = void(0);
            (function(){
                if(myAudio.isComplete()){
                    check_audio_flag = true;
                    myAudio.play();
                    $('#music').addClass('music_move');
                    musicflag = true;
                    return;
                }
                if(init_flag){
                    cancelAnimationFrame(myaudio_t);
                    return;
                }
                myaudio_t = requestAnimationFrame(eval("("+arguments.callee.toString()+")"));
            })();//检测音频加载完成

            win.ln_loadFunc();

            loadFlag = true;
            
        }

        // onload里显示的内容（加前缀ln_ / xq_）
        win.ln_loadFunc = function(){
            /*首页*/
            $('#ln_home_main').width(mw).height(mh);
            $('#ln_home_main .ln_hm_startBtn').width(mw*0.417).height(ph*0.06).css({left:mw*0.2915,top:ph*0.67});
            $('#ln_home_main .ln_hm_ruleBtn').width(mw*0.417).height(ph*0.06).css({left:mw*0.2915,top:ph*0.733});
        }

        win.xq_loadFunc = function(){
            //你的onload显示的内容写在这吧
        }


        //按钮点击事件（加前缀ln_ / xq_）
        HtmlFunc['ln_start_btn'] = function(e){
            GhostClick(e,function(){
                $('#ln_home_main').hide();
            });
        }



        //初始化页面
        win.initpage = function(){
            init_flag = true;
            $('#loading_main').hide();
            $('#music').show();
            $('#ln_home_main').show();
        }
        //音频
        HtmlFunc['controlMusic'] = function(){
            if(musicflag){
                myAudio.pause();
                $('#music').removeClass('music_move');
                musicflag = false;
            }else{
                myAudio.play();
                $('#music').addClass('music_move');
                musicflag = true;
            }
        }
        
       
        //定时查看游戏部分图片是否加载完成，完成就初始化游戏
        function checkloadok(){
            if(checkloadok_flag && loadFlag && check_audio_flag){
              initpage();//初始化页面
              return;
            }
            var count0 = 0;
            for(var i=0;i<gameArr.length;i++){
              if(gameArr[i].complete){
                count0 +=1;
              }
            }
            if(gameArr.length==count0){
              checkloadok_flag = true;
            }
            requestAnimationFrame(checkloadok);
        }
      
        //加载游戏图片
        win.loadgameimg = function(){
            var tempArr = new Array();
            for(var i=0;i<gameImgArr.length;i++){
              tempArr[i] = new Image();
              tempArr[i].src = gameImgArr[i];
              gameArr.push(tempArr[i]);
            }
        }

        //随机数
        function random(min,max){
            return Math.floor(Math.random()*(max-min+1)+min);
        }
    }(window)); 
</script><?php }} ?>