/*
*author:教主
*放在window.onload函数里面
*var dom1 = document.getElementById('dom1');
*ScrollUnbug(dom1);
*var dom2 = document.getElementById('dom2');
*ScrollUnbug(dom2);
*/

(function(global,name,factory){
	if(global[name]===undefined){
		global[name] = factory(global);
	}
})(this,'ScrollUnbug',function(_this){
	var ScrollUnbug = function(dom){
		var y0 = 0;
		dom.ontouchstart = function(){
			var e = window.event || event;
			y0 = e.touches[0].pageY;

		}
		dom.ontouchmove = function(){
			var evt = window.event || event;
			var y = evt.touches[0].pageY;
			var toTop = dom.scrollTop;
			var toBottom = dom.scrollHeight - dom.offsetHeight;
			if(toTop === 0){//向下滑动
				if(y > y0){
					evt.preventDefault();
				}else{
					evt.stopPropagation();
				}
				
			}else if(toBottom === toTop){
				if(y < y0){
					evt.preventDefault();
				}else{
					evt.stopPropagation();
				}
			}else if(toTop>0 && toTop < toBottom){
				evt.stopPropagation();
			}else{
				evt.preventDefault();
			}

		}
		dom.ontouchend = function(){
			y0 = 0;
		}
	}

	return ScrollUnbug;
});