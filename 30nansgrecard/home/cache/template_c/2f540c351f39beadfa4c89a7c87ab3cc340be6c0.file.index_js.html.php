<?php /* Smarty version Smarty-3.1.14, created on 2016-11-17 03:06:22
         compiled from "E:\AppServ\www\16eleven\slotMachine\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:31805582d182a3e7f94-74567615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f540c351f39beadfa4c89a7c87ab3cc340be6c0' => 
    array (
      0 => 'E:\\AppServ\\www\\16eleven\\slotMachine\\home\\views\\index_js.html',
      1 => 1479351972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31805582d182a3e7f94-74567615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582d182a3eeb63_34963709',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d182a3eeb63_34963709')) {function content_582d182a3eeb63_34963709($_smarty_tpl) {?><script type="text/javascript">
    (function(win){//立即执行函数

        define({
            'mw':$(win).width(),
            'mh':$(win).height(),
            'ph':(($(win).width())*1136)/640,
            'w0':(640*($(win).height()))/1136,
            'mymusic':null,
            'musicflag':false,
            'loadFlag':false,
            'gameArr':[],
            'checkloadok_flag':false
            /*'mycanvas1':document.getElementById("mycanvas1"),
            'cxt1':document.getElementById("mycanvas1").getContext("2d"),*/
        });

        var gameImgArr = ['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic11'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic12'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic13'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic21'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic22'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic23'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic31'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic32'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value[33];?>
'];
        win.onload = function(){
            loadgameimg();
            imgLoader(['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic11'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic12'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic13'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic21'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic22'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic23'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic31'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['pic32'];?>
','<?php echo $_smarty_tpl->tpl_vars['imgArr']->value[33];?>
'], function(percentage){
                if(percentage>=1){//加载完成
                    checkloadok();
                }
                $('#loading_main p').html('Loading '+parseInt(percentage*100)+'%');
            });
            $('#music_img').width(mw*0.08);
            mymusic = document.getElementById("mymusic");
            mymusic.play();
            mymusic.pause();
            /*游戏页*/
            $('#game_main').width(mw).height(mh);

            $('#game_main').show();
            loadFlag = true;
            
        }

        
        //定时查看游戏部分图片是否加载完成，完成就初始化游戏
        function checkloadok(){
            if(checkloadok_flag && loadFlag){
              $('#loading_main').hide();
              /*mymusic.play();
              $('#music_img').addClass('music_move');
              $('#music_img').show();*/
              
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

        win.controllMusic = function(){
            if(musicflag){
              mymusic.play();
              $('#music_img').addClass('music_move');
              musicflag = false;
            }else{
              mymusic.pause();
              $('#music_img').removeClass('music_move');
              musicflag = true;
            }
        }
    }(window)); 

    (function() {
        var lastTime = 0;
        var vendors = ['webkit', 'moz'];
        for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
            window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] ||    // Webkit中此取消方法的名字变了
                                          window[vendors[x] + 'CancelRequestAnimationFrame'];
        }

        if (!window.requestAnimationFrame) {
            window.requestAnimationFrame = function(callback, element) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16.7 - (currTime - lastTime));
                var id = window.setTimeout(function() {
                    callback(currTime + timeToCall);
                }, timeToCall);
                lastTime = currTime + timeToCall;
                return id;
            };
        }
        if (!window.cancelAnimationFrame) {
            window.cancelAnimationFrame = function(id) {
                clearTimeout(id);
            };
        }
    }());


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