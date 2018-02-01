//VedioToCanvas
/*
VedioToCanvas.init(src,pid,w,h,loop,playCallback,pauseCallback,endCallback);//到微信接口的ready函数里面,会自动播放
//手动操作
if(!VedioToCanvas.play_flag){
    VedioToCanvas.play();//播放
}else{
    VedioToCanvas.pause();//暂停
}
*/
(function(global){
    global.VedioToCanvas = {
        durationchange_flag : false,
        play_flag : false,
        video:null,
        init:function(src,pid,w,h,loop,playCallback,pauseCallback,endCallback){
            var _this = this;
            _this.video = document.createElement("VIDEO");
            //_this.video = document.getElementById("myvideo");
            // _this.video.src= 'http://cdn.global.wepromo.cn/work/2017/09/xiangshang/freestyle/video/video.mp4';
            _this.video.src = src;
            _this.video.setAttribute('style','object-fit:fill;');
            _this.video.setAttribute('type','video/mp4');
            _this.video.setAttribute('x-webkit-airplay','true');
            _this.video.setAttribute('x5-video-orientation','portrait');
            _this.video.setAttribute('webkit-playsinline','true');
            _this.video.setAttribute('x5-video-player-type', 'h5' );
            _this.video.setAttribute('x5-video-player-fullscreen', 'true');
            _this.video.setAttribute('playsinline','true' );
            _this.video.setAttribute('preload','auto');
            if(loop==true){
                _this.video.setAttribute('loop', 'true');
            }
            var pid = document.getElementById(pid);
            pid.appendChild(_this.video);
            _this.video.style.display = 'none';
            _this.video.ondurationchange = function(){
                
                playCallback();
            }
            
            var i= null;
            _this.video.addEventListener('play',function() {
                _this.video.style.display = 'block';
                _this.video.style.width = w+'px';
                _this.video.style.height = h+'px';
            },false);
            _this.video.addEventListener('pause',function() {
                pauseCallback();
            },false);
            _this.video.addEventListener('ended',function() {
                _this.video.style.display = 'none';
                _this.video.style.width = '0px';
                _this.video.style.height = '0px';
                endCallback();
            },false);
            
        },
        play:function(){
            var _this = this;
            if(!_this.play_flag){
                _this.play_flag = true;
                _this.video.play();
            }
            
        },
        pause:function(){
            var _this = this;
            if(_this.play_flag){
                _this.play_flag = false;
                _this.video.pause();
            }
        }
    }
})(this);