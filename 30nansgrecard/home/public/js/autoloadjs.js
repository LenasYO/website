/*
引入autoloadjs.js插件
放在head标签里调用
var jsArray = ['public/js/define.js','public/js/freshpage.js'];
autoloadjs(jsArray);

autoloadjs_init(function(){
    //布局代码，即window.onload
});
*/

~function(that){
    that.autoloadjs_init = function(callback){
        var window_load_func_t = null;
        var window_load_func_flag = false;
        var window_load_func = function(){
            if(window_load_func_flag){
                clearInterval(window_load_func_t);
                return;
            }
            if(window_load_flag){
                window_load_func_flag = true;
                callback();
            }
            window_load_func_t = setTimeout(function(){window_load_func();},60);
        }
        window_load_func();
    }

    var func = function(){
        var head = document.getElementsByTagName('head')[0];
        var jsArrayTemp = [];
        var load_func_flag = false;
        var load_func_t = null;
        return function(jsArray){
            if(load_func_flag){
                alert('上批插件未加载完成');
                return;
            }
            jsArrayTemp = jsArray.slice(0);
            var loadflag = false;
            load_func_t = setInterval(function(){
                if(jsArrayTemp.length<=0){
                    clearInterval(load_func_t);
                }else{
                    if(!loadflag){
                        loadflag = true;
                        var js_src = jsArrayTemp.shift();
                        var script = document.createElement('script');
                        script.async = true;
                        script.charset = 'UTF-8';
                        script.onload = script.onreadystate = function(){
                            loadflag = false;
                            console.log(this.src+' is load ok');
                        }
                        script.onerror = function(){
                            console.log(this.src+' is load error');
                        }
                        script.src = js_src;
                        head.appendChild(script);
                    }
                }
            },100);
        }
    }
    that.autoloadjs = func();

}(this);