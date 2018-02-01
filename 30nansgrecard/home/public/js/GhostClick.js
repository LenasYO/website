/*
*使用说明
*标签直接这样去定义 ontouchstart="HtmlFunc['xx_btn'](event);"
GhostClick(e,function(){
	$('.ooo').hide();
	$('.xxx').show();
});
*
*/
(function(global){
	'use strict';
	global.GhostClick = function(e, callback){
		e = e || window.event;
		e.preventDefault();
		var gc_t = setTimeout(function(){
			callback();
			clearTimeout(gc_t);
		}, 300);
		return false;
	}
})(this);