/*
  #AsyncWalk.js 为异步处理框架
  #author:教主
  #使用说明
    new AsyncWalk(function(resolve,reject){
      var a = 1;
      var b = 2;
      var data = {};
      if(a<b){//true
        data = {status:'success',data:'xxx'};
        resolve(data);
      }else{
        data = {status:'error',data:'ooo'};
        reject(data);
      }
    }).then(function(resolve_data){
      console.log(resolve_data);
    },function(reject_data){
      console.log(reject_data);
    }).catch(function(error){
      console.log(error);
    });
  */
  (function(global, factory){
    (global.AsyncWalk = factory());
  })(this, (function(){
    //事件队列处理
    var watchQueueExc_t = null;
    var watchQueueExc_flag = false;
    var queue_exc_count = 0;
    var watchQueueExc = function(_AWB){
      if(!watchQueueExc_flag){
        var queue_then = _AWB.AWData.then_queue;
        var queue_catch = _AWB.AWData.catch_queue;
        var constructor_exc_data = _AWB.AWData.constructor_exc_data;
        if(queue_then.length<=0){
          clearTimeout(watchQueueExc_t);
        }else{
          setTimeout(function(){
            if(_AWB.AWData.catch_queue_flag){
              var catch_func = queue_catch.shift();
              catch_func(_AWB.AWData.catch_exc_data);
              clearTimeout(watchQueueExc_t);
            }else{
              //then事件执行
              var then_func_array = queue_then.shift();
              if(queue_exc_count==0){
                if(_AWB.AWData.constructor_exc_flag==1){
                  _AWB.AWData.then_exc_flag = 1;
                  then_func_array[0](constructor_exc_data);
                }else{
                  _AWB.AWData.then_exc_flag = 2;
                  then_func_array[1](constructor_exc_data);
                }
              }else{
                if(_AWB.AWData.then_exc_flag==1){
                  _AWB.AWData.then_exc_flag = 1;
                  then_func_array[0]();
                }else{
                  _AWB.AWData.then_exc_flag = 2;
                  then_func_array[1]();
                }
              }
              queue_exc_count++;
              watchQueueExc_flag = false;
            }
            
          });
        }
        
      }
      watchQueueExc_flag = true;
      watchQueueExc_t = setTimeout(function(){watchQueueExc(_AWB);}, 100);
      clearTimeout(watchQueueExc_t);
    }
    //定义实现异步函数
    var AsyncWalkBase = function(callback){
      if(typeof(callback)!=='function'){
        console.log('AsyncWalk参数必须为回调函数');
        return;
      }
      var _this = this;
      setTimeout(function(){
        try{
          callback(function(resolve_data){
            if(_this.AWData.constructor_exc_flag!==0){
              console.log('reject已在执行，resolve不能同时执行');
              return;
            }
            _this.AWData.constructor_exc_flag = 1;
            _this.AWData.constructor_exc_data = resolve_data;
            watchQueueExc(_this);
          },function(reject_data){
            if(_this.AWData.constructor_exc_flag!==0){
              console.log('resolve已在执行，reject不能同时执行');
              return;
            }
            _this.AWData.constructor_exc_flag = 2;
            _this.AWData.constructor_exc_data = reject_data;
            watchQueueExc(_this);
          });
        }catch(e){
          _this.AWData.catch_exc_data = e;
          _this.AWData.catch_queue_flag = true;
          watchQueueExc(_this);
        }
        
      });
      
    }

    AsyncWalkBase.prototype.AWData = {
      constructor_exc_flag : 0,
      constructor_exc_data : void(0),
      then_exc_data : void(0),
      then_exc_flag : 1,
      then_queue : [],
      catch_exc_data : void(0),
      catch_queue_flag : false,
      catch_queue : []
    }

    AsyncWalkBase.prototype.then = function(resolve_callback,reject_callback){
      var _this = this;
      _this.AWData.then_queue.push([resolve_callback,reject_callback]);
      return _this;
    }

    AsyncWalkBase.prototype.catch = function(callback){
      var _this = this;
      _this.AWData.catch_queue.push(callback);
    }

    return AsyncWalkBase;
  }));
