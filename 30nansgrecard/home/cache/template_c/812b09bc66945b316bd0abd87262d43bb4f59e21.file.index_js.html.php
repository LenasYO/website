<?php /* Smarty version Smarty-3.1.14, created on 2017-06-09 06:14:46
         compiled from "E:\website\frame01\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:20469593a088d0824e6-37695468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '812b09bc66945b316bd0abd87262d43bb4f59e21' => 
    array (
      0 => 'E:\\website\\frame01\\home\\views\\index_js.html',
      1 => 1496988847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20469593a088d0824e6-37695468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_593a088d097898_05255357',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593a088d097898_05255357')) {function content_593a088d097898_05255357($_smarty_tpl) {?><script type="text/javascript">
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
            'HtmlFunc':[],

        });

        var gameImgArr = ['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['homeBg'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['music'];?>
'];
        win.onload = function(){
            loadgameimg();
            imgLoader(gameImgArr, function(percentage){
                if(percentage>=1){//加载完成
                    checkloadok();
                }else{
                    $('#loading_main p').html('Loading '+parseInt(percentage*100)+'%');
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
                    $('#music_img').addClass('music_move');
                    musicflag = true;
                    return;
                }
                myaudio_t = requestAnimationFrame(eval("("+arguments.callee.toString()+")"));
            })();//检测音频加载完成

            /*首页*/
            $('#home_main').width(mw).height(mh);
            $('#home_main .hm_startBtn').width(mw*0.4).height(ph*0.07);
            $('#home_main .hm_startBtn').css({left:mw*0.3,top:ph*0.66});

            // 游戏页
            

            loadFlag = true;
            
        }

        

        //初始化页面
        win.initpage = function(){
            $('#loading_main').hide();
            $('#music_img').show();
            $('#home_main').show();
            // $('#prize_main').show();
            // $('#prize'+prizeNum).show();
        }
        //音频
        HtmlFunc['controlMusic'] = function(){
            if(musicflag){
                myAudio.pause();
                $('#music_img').removeClass('music_move');
                musicflag = false;
            }else{
                myAudio.play();
                $('#music_img').addClass('music_move');
                musicflag = true;
            }
        }
        HtmlFunc['start_btn'] = function(e){
            GhostClick(e,function(){
                $('#home_main').hide();
                $('#game_main').show();
            });
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