<?php /* Smarty version Smarty-3.1.14, created on 2017-12-06 02:50:48
         compiled from "E:\website\00frame06\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:219115a275b085d7c21-45020195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea140a7bb9d0b35639b106d66d2e791dd417e85' => 
    array (
      0 => 'E:\\website\\00frame06\\home\\views\\index_js.html',
      1 => 1510108334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219115a275b085d7c21-45020195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a275b085e4b70_61353377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a275b085e4b70_61353377')) {function content_5a275b085e4b70_61353377($_smarty_tpl) {?><script type="text/javascript">
~function(win){
    win.gameImgArr = ['<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['p1'];?>
'];
    win.mymusicurl = '<?php echo $_smarty_tpl->tpl_vars['imgArr']->value['mymusic'];?>
';
    win.window_load_flag = false;//必须全局变量
    win.onload = function(){
    	window_load_flag = true;
    }
}(window); 
</script><?php }} ?>