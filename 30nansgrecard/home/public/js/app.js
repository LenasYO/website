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
            'HtmlFunc':[]
        });
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
        /*CANVAS自动换行*/
        function canvasTextAutoLine(str,canvas,initX,initY,lineHeight,initW){
            var ctx = canvas.getContext("2d"); 
            var lineWidth = 0;
            var initW = initW; 
            var lastSubStrIndex= 0; 
            for(var i=0;i<str.length;i++){ 
                lineWidth+=ctx.measureText(str[i]).width; 
                if(lineWidth>=initW){//减去initX,防止边界出现的问题
                    ctx.fillText(str.substring(lastSubStrIndex,i),initX,initY);
                    initY+=lineHeight;
                    lineWidth=ctx.measureText(str[0]).width;
                    lastSubStrIndex=i;
                } 
                if(i==str.length-1){

                    ctx.fillText(str.substring(lastSubStrIndex,i+1),initX,initY);
                }
                console.log(lineWidth)
            }
        }
        
        /*贺卡*/
        var cvsMsg = {
           canvasw:581/750*mw,
           canvash:880/1334*ph,
           canvasl:(1-581/750)/2*mw,
           canvast:20/1334*ph,

           headsrc:"http://timelink.87gogo.com/upload_qiniu_nansgrecard_header.jpg?sign=b856f18a88a9a2694c32cb2e946a1499&t=5a47410f",
           headr:88/2/750*mw,        
           headx:43/750*mw,        
           heady:344/1334*ph,

           name:'NANA',
           namex:142/750*mw,
           namey:390/1334*ph,
           namef:"1.5em Arial",

           bless:'',
           blessx:43/750*mw,
           blessy:268/750*ph,
           blessw:510/750*mw,
           blesslh:20,
           blessf:"1.4em Arial"
       }
       
        var mergeFunc =function(){
            var eleImgBase = document.getElementById('imgBase');//底图
            var canvas = document.createElement('canvas'),
            ctx = canvas.getContext("2d");
            canvas.width = cvsMsg.canvasw*2;
            canvas.height = cvsMsg.canvash*2;
            ctx.scale(2,2)
            var imgUpload = new Image(),dataURL='';    
            imgUpload.crossOrigin = 'Anonymous'; //解决跨域
            imgUpload.src=cvsMsg.headsrc;
            cvsMsg.bless=document.getElementById("msgText").value;
            imgUpload.onload = function(){
                ctx.clearRect(0,0,canvas.width, canvas.height);
                ctx.drawImage(eleImgBase, 0, 0, cvsMsg.canvasw, cvsMsg.canvash);
                ctx.save();
                ctx.beginPath();
                ctx.arc(cvsMsg.headx+cvsMsg.headr, cvsMsg.heady+cvsMsg.headr, cvsMsg.headr, 0, Math.PI * 2, false);
                ctx.clip();
                ctx.drawImage(imgUpload,cvsMsg.headx,cvsMsg.heady,cvsMsg.headr*2, cvsMsg.headr*2);
                ctx.restore();
                ctx.font=cvsMsg.namef;
                ctx.fillText(cvsMsg.name,cvsMsg.namex,cvsMsg.namey);
                ctx.font="1.42em Arial";
                ctx.fillText("给你送上祝福：",cvsMsg.namex,cvsMsg.namey+20);
                ctx.font=cvsMsg.blessf;
                canvasTextAutoLine(cvsMsg.bless,canvas,cvsMsg.blessx,cvsMsg.blessy,cvsMsg.blesslh,cvsMsg.blessw)
                dataURL=canvas.toDataURL('image/jpg',0.85);
                var imgUploadX = new Image();
                imgUploadX.onload = function(){
                    $('#make_main').hide();
                    $('#merge_main').show();
                }
                imgUploadX.src = dataURL;
                // $('#imgUploadX img').css('transform', 'scale(0.5,0.5)');
                $('#imgUploadX').html(imgUploadX);
                $('#imgUploadX img').css('zoom', '0.5');
            }
        }

        //按钮点击事件
        HtmlFunc['start_btn'] = function(e){ //开始制作
            GhostClick(e,function(){
                $('#home_main').hide();
                $('#make_main').show();
                // document.getElementById('msgText').focus();
            });
        }
        HtmlFunc['mergeShow_btn'] = function(e){ //合成
            GhostClick(e,function(){
                var textlen = document.getElementById("msgText").value.length;
                if(textlen>65) { 
                    ShowAlertView('不能超过65个字符',0);
                    return; 
                }
                mergeFunc();
            });
        }
        HtmlFunc['refresh_btn'] = function(e){ //刷新
            GhostClick(e,function(){
                ReloadUrl();
            });
        }
        

        //初始化页面
        win.initpage = function(){
            init_flag = true;
            $('#loading_main').hide();
            $('#music').show();
            $('#home_main').show();
        }
        //window.onload的等式函数，放在app.js最后调用
        autoloadjs_init(function(){
            /****************************/
            loadgameimg();
            try{
                imgLoader(gameImgArr, function(percentage){
                    if(percentage>=1){//加载完成
                        $('#loading_main .lm_p1').find('span').html(parseInt(percentage*100)+'%');
                        $('#loading_main .lm_ul_li').width(mw*0.6*percentage);
                        checkloadok();
                    }else{
                        alert('111');
                        $('#loading_main .lm_p1').find('span').html(parseInt(percentage*100)+'%');
                        $('#loading_main .lm_ul_li').width(mw*0.6*percentage);
                    }
                });
            }catch(e){
                alert(e);
            }
            
            // 音频
            myAudio = new MyAudio(mymusicurl,true);
            var myaudio_t = void(0);
            (function(){
                if(myAudio.isComplete()){
                    check_audio_flag = true;
                    // myAudio.play();
                    // $('#music').addClass('music_move');
                    // musicflag = true;
                    return;
                }
                if(init_flag){
                    cancelAnimationFrame(myaudio_t);
                    return;
                }
                myaudio_t = requestAnimationFrame(eval("("+arguments.callee.toString()+")"));
            })();//检测音频加载完成

            initDialog();
            /*首页*/
            $('#home_main').width(mw).height(mh);
            $('#home_main .startBtn').width(313/750*mw).css({left:(1-313/750)/2*mw,top:930/1334*ph});
            /*制作页*/
            $('#make_main').width(mw).height(mh);
            // $('#make_main .word').width(390/750*mw);
            $('#msgText').width(540/750*mw).height(270/1334*ph).css({left:104/750*mw,top:498/1334*ph});
            $('#make_main .makeBtn').width(313/750*mw).css({left:(1-313/750)/2*mw,top:937/1334*ph});

            $('#process_main').width(mw).height(mh);

            $('#merge_main').width(mw).height(mh);
            $('#imgUploadX').width(581/750*mw).height(880/1334*ph).css({left:(1-581/750)/2*mw,top:20/1334*ph});
            $('#merge_main .againBtn').width(313/750*mw).css({left:(1-313/750)/2*mw,top:937/1334*ph});

            loadFlag = true;
            /****************************/
        });
        
    }(window));