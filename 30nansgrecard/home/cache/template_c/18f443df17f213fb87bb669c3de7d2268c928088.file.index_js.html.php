<?php /* Smarty version Smarty-3.1.14, created on 2017-11-08 02:34:01
         compiled from "E:\website\frame05\home\views\index_js.html" */ ?>
<?php /*%%SmartyHeaderCode:120265948c54192c983-06325036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18f443df17f213fb87bb669c3de7d2268c928088' => 
    array (
      0 => 'E:\\website\\frame05\\home\\views\\index_js.html',
      1 => 1510108334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120265948c54192c983-06325036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5948c541940913_94610598',
  'variables' => 
  array (
    'imgArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5948c541940913_94610598')) {function content_5948c541940913_94610598($_smarty_tpl) {?><script type="text/javascript">
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