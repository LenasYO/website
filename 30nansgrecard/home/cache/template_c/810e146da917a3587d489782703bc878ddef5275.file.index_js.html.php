<?php /* Smarty version Smarty-3.1.14, created on 2016-11-08 04:24:19
         compiled from "E:\AppServ\www\16eleven\northcool\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:21185581c2703471696-13832409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '810e146da917a3587d489782703bc878ddef5275' => 
    array (
      0 => 'E:\\AppServ\\www\\16eleven\\northcool\\home\\views\\index_js.html',
      1 => 1478577819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21185581c2703471696-13832409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_581c270348a8e5_02659964',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581c270348a8e5_02659964')) {function content_581c270348a8e5_02659964($_smarty_tpl) {?><script type="text/javascript">
    (function(win){//立即执行函数

        define({
            'mw':$(win).width(),
            'mh':$(win).height(),
            'ph':(($(win).width())*1136)/640,
            'w0':(640*($(win).height()))/1136,
            'sex':0,//性别
            'cardArr':[1,2,3,4,5],//要显示的卡片数组
            'cardArrLen':0,//要显示的卡片数组长度
            'levelNum':0,//等级
            'changeNum':3,//机会次数
            'cardNum':5,//卡片显示哪张
            'prizeNum':0//中几等奖
        });

        
        win.onload = function(){
            /*首页*/
            $('#home_main').width(mw).height(mh);
            $('#home_main img').width(mw*0.35);
            $('#home_main .hm_startBtn').css({left:mw*0.12,top:ph*0.71});
            $('#home_main .hm_ruleBtn').css({left:mw*0.53,top:ph*0.71});

            /*规则页*/
            $('#rule_main').width(mw).height(mh);
            $('#rule_main .rm_backBtn').width(mw*0.35).height(ph*0.08);
            $('#rule_main .rm_backBtn').css({left:mw*0.325,top:ph*0.60});

            /*进入页*/
            $('#enter_main').width(mw).height(mh);
            $('#enter_main img').width(mw*0.35);
            $('#enter_main .em_startBtn').css({left:mw*0.325,top:ph*0.64});

            /*选择角色页*/
            $('#choose_main').width(mw).height(mh);
            $('#choose_main img').width(mw*0.35);
            $('#choose_main .cm_menBtn').css({left:mw*0.12,top:ph*0.71});
            $('#choose_main .cm_womenBtn').css({left:mw*0.53,top:ph*0.71});

            /*详情页*/
            $('#detail_main').width(mw).height(mh);
            $('#detail_main .dm_head').width(mw*0.12).height(mw*0.12);
            $('#detail_main .dm_head').css({left:mw*0.223,top:ph*0.04});
            $('#detail_main .dm_nickname').width(mw*0.24);
            $('#detail_main .dm_nickname').css({left:mw*0.40,top:ph*0.06});
            $('#detail_main .dm_changeNum').width(mw*0.10);
            $('#detail_main .dm_changeNum').css({left:mw*0.37,top:ph*0.661});
            $('#detail_main .dm_Clogo').width(mw*0.146);
            $('#dm_Clogo1').css({left:mw*0.125,top:ph*0.14});
            $('#dm_Clogo2').css({left:mw*0.73,top:ph*0.14});
            $('#dm_Clogo3').css({left:mw*0.125,top:ph*0.276});
            $('#dm_Clogo4').css({left:mw*0.73,top:ph*0.276});
            $('#dm_Clogo5').css({left:mw*0.125,top:ph*0.418});
            $('#dm_Clogo6').css({left:mw*0.73,top:ph*0.418});
            $('#detail_main .dm_level').width(mw);
            $('#detail_main .dm_level').css({top:ph*0.55});
            $('#detail_main .dm_gameBtn').width(mw*0.35);
            $('#detail_main .dm_gameBtn').css({left:mw*0.12,top:ph*0.72});
            $('#detail_main .dm_shareBtn').width(mw*0.35);
            $('#detail_main .dm_shareBtn').css({left:mw*0.53,top:ph*0.72});
            $('#detail_main .dm_drawBtn').width(mw*0.40);
            $('#detail_main .dm_drawBtn').css({left:mw*0.30,top:ph*0.72});
            $('#detail_main .dm_div').width(mw).height(mh);

            /*技能召唤页*/
            $('#buzzers_main').width(mw).height(mh);
            $('#buzzers_main .bm_div').width(mw).height(mh);
            $('#canvas').css({left:mw*0.22,top:ph*0.24});
            $('#buzzers_main .bm_closeBtn').width(mw*0.12).height(mw*0.12);
            $('#buzzers_main .bm_closeBtn').css({left:mw*0.83,top:ph*0.008});
            $('#buzzers_main .bm_changeNum').width(mw*0.10);
            $('#buzzers_main .bm_changeNum').css({left:mw*0.60,top:ph*0.651});
            
            

            /*机会用完页*/
            $('#nochangebg_main').width(mw).height(mh);
            $('#nochangebg_main .nm_shareBtn').width(mw*0.32).height(ph*0.07);
            $('#nochangebg_main .nm_shareBtn').css({left:mw*0.16,top:ph*0.47});
            $('#nochangebg_main .nm_backBtn').width(mw*0.32).height(ph*0.07);
            $('#nochangebg_main .nm_backBtn').css({left:mw*0.51,top:ph*0.47});

            /*分享给好友页1*/
            $('#share1_main').width(mw).height(mh);

            /*分享给好友页2*/
            $('#share2_main').width(mw).height(mh);

            /*获得卡片页*/
            $('#card_main').width(mw).height(mh);
            $('#card_main .cdm_img').width(mw);
            $('#card_main .cdm_backBtn').width(mw*0.35);
            $('#card_main .cdm_backBtn').css({left:mw*0.12,top:ph*0.72});
            $('#card_main .cdm_continueBtn').width(mw*0.35);
            $('#card_main .cdm_continueBtn').css({left:mw*0.53,top:ph*0.72});

            /*二维码页*/
            $('#code_main').width(mw).height(mh);

            /*中奖页*/
            $('#prize_main').width(mw).height(mh);
            $('#prize_main .pm_money').width(mw*0.80);
            $('#prize_main .pm_money').css({left:mw*0.10,top:ph*0.34});
            $('#prize_main .pm_shareBtn').width(mw*0.35).height(ph*0.08);
            $('#prize_main .pm_shareBtn').css({left:mw*0.325,top:ph*0.56});

            /*不中奖页*/
            $('#noprize_main').width(mw).height(mh);
            $('#noprize_main .npm_shareBtn').width(mw*0.35).height(ph*0.08);
            $('#noprize_main .npm_shareBtn').css({left:mw*0.325,top:ph*0.525});
            
            if(mw>=400){
                $('#detail_main .dm_nickname').css('font-size','2.0rem');
                $('#detail_main .dm_changeNum').css('font-size','2.0rem');
                $('#buzzers_main span').css('font-size','2.4rem');
                $('#prize_main .pm_money').css('font-size','2.8rem');
            }else if(mw<=340){
                $('#detail_main .dm_nickname').css('font-size','1.4rem');
                $('#detail_main .dm_changeNum').css('font-size','1.4rem');
                $('#buzzers_main span').css('font-size','1.8rem');
                $('#prize_main .pm_money').css('font-size','2.0rem');
            }



            sex = 1;//男
                        win.detailFn();//详情页显示
            
            
        }

        
        win.paint={  
            init:function() { 
                this.load(); 
            }, 
            load:function() { 
                this.x=[];//记录鼠标移动是的X坐标 
                this.y=[];//记录鼠标移动是的Y坐标 
                this.clickDrag=[]; 
                this.lock=false;//鼠标移动前，判断鼠标是否按下  
                this.firstFlag=false;  
                this.$=function(id){return typeof id=="string"?document.getElementById(id):id;}; 
                this.canvas=this.$("canvas"); 
                if (this.canvas.getContext) { 
                } else { 
                    alert("您的浏览器不支持 canvas 标签"); 
                    return; 
                } 
                this.cxt=this.canvas.getContext('2d'); 
                this.w=mw*0.56;//取画布的宽 
                this.h=mw*0.56;//取画布的高 
                this.canvas.width = this.w;
                this.canvas.height = this.h;
                this.cxt.clearRect(0, 0, this.w, this.h);//清除画布，左上角为起点 
                this.cxt.lineJoin = "round";//context.lineJoin - 指定两条线段的连接方式 
                this.cxt.lineWidth = 5;//线条的宽度
                this.cxt.strokeStyle = 'red';
                this.touch =("createTouch" in document);//判定是否为手持设备 
                this.StartEvent = this.touch ? "touchstart" : "mousedown";//支持触摸式使用相应的事件替代 
                this.MoveEvent = this.touch ? "touchmove" : "mousemove"; 
                this.EndEvent = this.touch ? "touchend" : "mouseup"; 
                this.bind();
            }, 
            bind:function(){ 
                var t=this;  
                /*鼠标按下事件，记录鼠标位置，并绘制，解锁lock，打开mousemove事件*/ 
                this.canvas['on'+t.StartEvent]=function(e) { 
                    e.preventDefault();
                    if(!t.firstFlag){
                        var touch=t.touch ? e.touches[0] : e; 
                        var _x=touch.clientX - touch.target.offsetLeft;//鼠标在画布上的x坐标，以画布左上角为起点 
                        var _y=touch.clientY - touch.target.offsetTop;//鼠标在画布上的y坐标，以画布左上角为起点 
                        t.movePoint(_x,_y);//记录鼠标位置 
                        t.drawPoint();//绘制路线 
                         
                        t.lock=true; 
                    }
                    
                }; 
                /*鼠标移动事件*/ 
                this.canvas['on'+t.MoveEvent]=function(e) { 
                    e.preventDefault();
                    if(!t.firstFlag){
                        var touch=t.touch ? e.touches[0] : e; 
                        if(t.lock)//t.lock为true则执行 
                        { 
                            var _x=touch.clientX - touch.target.offsetLeft;//鼠标在画布上的x坐标，以画布左上角为起点 
                            var _y=touch.clientY - touch.target.offsetTop;//鼠标在画布上的y坐标，以画布左上角为起点 
                            t.movePoint(_x,_y,true);//记录鼠标位置 
                            t.drawPoint();//绘制路线 
                        } 
                    }
                }; 
                this.canvas['on'+t.EndEvent]=function(e) {
                    if(!t.firstFlag){
                        t.firstFlag = true;
                        $('#buzzers_main').hide();//技能召唤页隐藏
                        $('#cdm_img'+cardNum).show();//获得卡片页显示
                        $('#card_main').show();//获得卡片页显示
                        $('#cdm_img'+cardNum).addClass('big_move');
                    } 
                     
                }; 
            },
            movePoint:function(x,y,dragging) { 
                /*将鼠标坐标添加到各自对应的数组里*/ 
                this.x.push(x); 
                this.y.push(y); 
                this.clickDrag.push(y); 
            }, 
            drawPoint:function() { 
                for(var i=0; i < this.x.length; i++)//循环数组 
                { 
                    this.cxt.beginPath();//context.beginPath() , 准备绘制一条路径 
                    if(this.clickDrag[i] && i){//当是拖动而且i!=0时，从上一个点开始画线。 
                    this.cxt.moveTo(this.x[i-1], this.y[i-1]);//context.moveTo(x, y) , 新开一个路径，并指定路径的起点 
                    }else{ 
                        this.cxt.moveTo(this.x[i]-1, this.y[i]); 
                    } 
                    this.cxt.lineTo(this.x[i], this.y[i]);//context.lineTo(x, y) , 将当前点与指定的点用一条笔直的路径连接起来 
                    this.cxt.closePath();//context.closePath() , 如果当前路径是打开的则关闭它 
                    this.cxt.stroke();//context.stroke() , 绘制当前路径 
                } 
            }
        };

        /*页面隐藏显示*/
        win.shFn = function(n){
            switch(n){
                case 1: $('#home_main').hide();//首页隐藏
                        $('#enter_main').show();//进入页显示
                break;
                case 2: $('#rule_main').show();//规则页显示
                break;
                case 3: $('#rule_main').hide();//规则页隐藏
                break;
                case 4: $('#enter_main').hide();//进入页隐藏
                        $('#choose_main').show();//选择角色页显示
                break;
                case 5: sex = 1;//男
                        win.detailFn();//详情页显示
                break;
                case 6: sex = 2;//女
                        win.detailFn();//详情页显示
                break;
                case 7: if(changeNum<=0){//机会用完页
                            $('#nochangebg_main').show();//机会用完页显示
                        }else{
                            $('#buzzers_main .bm_changeNum').html(changeNum);
                            $('#buzzers_main').show();//技能召唤页显示
                            win.paint.init();
                        }
                break;
                case 8: $('#buzzers_main').hide();//技能召唤页隐藏
                break;
                case 9: $('#share1_main').show();//分享页1显示
                break;
                case 10: switch(prizeNum){
                            case 0: $('#noprize_main').show();//不中奖页显示
                            break;
                            case 1: $('#prize_main .pm_money').html('￥200');
                                    $('#prize_main').show();//中奖页显示
                            break;
                            case 2: $('#prize_main .pm_money').html('￥100');
                                    $('#prize_main').show();//中奖页显示
                            break;
                            case 3: $('#prize_main .pm_money').html('￥50');
                                    $('#prize_main').show();//中奖页显示
                            break;
                            case 4: $('#prize_main .pm_money').html('￥10');
                                    $('#prize_main').show();//中奖页显示
                            break;
                            case 5: $('#prize_main .pm_money').html('￥5');
                                    $('#prize_main').show();//中奖页显示
                            break;
                            case 6: $('#prize_main .pm_money').html('￥2');
                                    $('#prize_main').show();//中奖页显示
                            break;
                         }
                         
                break;
                case 12: $('#nochangebg_main').hide();//机会用完页隐藏
                break;
                case 13: $('#share1_main').hide();//分享页1隐藏
                break;
                case 14: $('#share2_main').hide();//分享页2隐藏
                break;
                case 15: $('#card_main .cdm_img').hide();
                         $('#card_main .cdm_img').removeClass('big_move');
                         $('#card_main').hide();//获得卡片页隐藏
                break;
                case 16: $('#card_main .cdm_img').hide();
                         $('#card_main .cdm_img').removeClass('big_move');
                         $('#card_main').hide();//获得卡片页隐藏
                         if(changeNum<=0){//机会用完页
                            $('#nochangebg_main').show();//机会用完页显示
                        }else{
                            $('#buzzers_main .bm_changeNum').html(changeNum);
                            $('#buzzers_main').show();//技能召唤页显示
                            win.paint.init();
                        }
                break;
                case 17: $('#code_main').hide();//二维码页隐藏
                break;
                case 18: $('#share2_main').show();//分享页2显示
                break;
                case 20: $('#detail_main .dm_div').hide();//图片详情隐藏
                break;
            }
        }

        /*图片详情显示*/
        win.imageFn = function(n){
            $('#detail_main .dm_div img').hide();
            $('#dm_img'+n).show();
            $('#detail_main .dm_div').show();
        }


        win.detailFn = function(){
            $('#choose_main').hide();//选择角色页隐藏
            $('#dm_detailbg'+sex).show();
            $('#detail_main .dm_Clogo').hide();
            cardArrLen=cardArr.length;
            if(cardArrLen>0){//数组长度大于0
                for(var i=0,cardArrLen=cardArr.length;i<cardArrLen;i++){
                    $('#dm_Clogo'+cardArr[i]).show();
                }
            }
            if(cardArrLen==6){
                $('#detail_main .dm_gameBtn').hide();
                $('#detail_main .dm_shareBtn').hide();
                $('#detail_main .dm_drawBtn').show();
                $('#detail_main .dm_changeNum').hide();
            }else{
                $('#detail_main .dm_gameBtn').show();
                $('#detail_main .dm_shareBtn').show();
                $('#detail_main .dm_drawBtn').hide();
            }
            $('#detail_main .dm_level').hide();
            switch(cardArrLen){
                case 0:levelNum = 0;
                break;
                case 1:levelNum = 1;
                break;
                case 2:levelNum = 2;
                break;
                case 3:levelNum = 3;
                break;
                case 4:levelNum = 4;
                break;
                case 5:levelNum = 5;
                break;
                case 6:levelNum = 6;
                break;
            }
            $('#dm_level'+levelNum).show();
            $('#detail_main').show();//详情页显示
        }

        /*var musicflag = false;
        win.controllMusic = function(){
            if(musicflag){
                myAudio.play();
                $('#music_img').addClass('music_move');
                musicflag = false;
            }else{
                myAudio.pause();
                $('#music_img').removeClass('music_move');
                musicflag = true;
            }
        }*/
    }(window));  
</script><?php }} ?>