<?php /* Smarty version Smarty-3.1.14, created on 2017-04-28 06:44:22
         compiled from "E:\website\project\00-frame\proj601\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:212185902e3f149b403-65609119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cc692282787dae4d35eff124cd38b5655b9f04d' => 
    array (
      0 => 'E:\\website\\project\\00-frame\\proj601\\home\\views\\index_js.html',
      1 => 1493361859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212185902e3f149b403-65609119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5902e3f14af566_49220692',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902e3f14af566_49220692')) {function content_5902e3f14af566_49220692($_smarty_tpl) {?><script type="text/javascript">
    (function(win){//立即执行函数
        define({
            'mw':$(win).width(),
            'mh':$(win).height(),//屏幕宽高
            'ph':(($(win).width())*1334)/750,
            'w0':(750*($(win).height()))/1334,
            'myAudio':null,
            'loadFlag':false,//页面是否加载完：默认没有
            'gameArr':[],//图片数组
            'checkloadok_flag':false,//图片是否加载完：默认没有
            'check_audio_flag':false//音频是否加载完
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
            $('#music_img').width(mw*0.08);
            check_audio();//音频调用

            /*首页*/
            $('#home_main').width(mw).height(mh);
            $('#home_main .hm_startBtn').width(mw*0.4).height(ph*0.07);
            $('#home_main .hm_startBtn').css({left:mw*0.3,top:ph*0.66});

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
        win.check_audio = function(){
            if(myAudio.isComplete()){
                //myAudio.play();//播放音频
                //myAudio.stop();//停止音频
                //myAudio.pause();//暂停音频
                check_audio_flag = true;
                
                return;
             }
             requestAnimationFrame(check_audio);
        }
        win.controlMusic = function(){
            var musicflag = GlobalValue('musicflag');
            if(musicflag){
              myAudio.pause();
              $('#music_img').removeClass('music_move');
              GlobalValue('musicflag',false);
            }else{
              myAudio.play();
              $('#music_img').addClass('music_move');
              GlobalValue('musicflag',true);
              GlobalValue('musicBtnflag',true);
            }
        }
        win.controlMusic1 = function(){
            var musicBtnflag = GlobalValue('musicBtnflag');
            if(!musicBtnflag){
              myAudio.play();
              $('#music_img').addClass('music_move');
              GlobalValue('musicflag',true);
              GlobalValue('musicBtnflag',true);
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


    (function () {    
        function isArray(obj) {    
            return Object.prototype.toString.call(obj) === '[object Array]';    
        }    
        /**   
        * @param imgList 要加载的图片地址列表，['aa/asd.png','aa/xxx.png']   
        * @param callback 每成功加载一个图片之后的回调，并传入“已加载的图片总数/要加载的图片总数”表示进度   
        * @param timeout 每个图片加载的超时时间，默认为5s   
        */    
        var loader = function (imgList, callback, timeout) {    
            timeout = timeout || 5000;    
            imgList = isArray(imgList) && imgList || [];    
            callback = typeof(callback) === 'function' && callback;    
            var total = imgList.length,    
            loaded = 0,    
            imgages = [],    
            _on = function () {    
                loaded < total && (++loaded, callback && callback(loaded / total));    
            };    
            if (!total) {    
                return callback && callback(1);    
            }    
            for (var i = 0; i < total; i++) {    
                imgages[i] = new Image();    
                imgages[i].onload = imgages[i].onerror = _on;    
                imgages[i].src = imgList[i];    
            }    
            /**   
            * 如果timeout * total时间范围内，仍有图片未加载出来（判断条件是loaded < total），通知外部环境所有图片均已加载   
            * 目的是避免用户等待时间过长   
            */    
            setTimeout(function () {    
                loaded < total && (loaded = total, callback && callback(loaded / total));    
            }, timeout * total);    
        };    
        "function" === typeof define && define.cmd ? define(function () {    
            return loader    
        }) : window.imgLoader = loader;    
    })();  
</script><?php }} ?>