<?php
defined('SUPER_FLAG') or exit();//判断是否调用入口文件
include(SUPER_CORE.'smarty/Smarty.class.php');

class SuperAction extends Smarty{
   function __construct(){
        parent::__construct();
  	    $this->setTemplateDir(APP_VIEWS);
        $this->setCompileDir(APP_CACHE.'template_c/');
  	    $this->setConfigDir(APP_CONF);
        $this->setCacheDir(APP_CACHE.'data/');
        $this->left_delimiter = '<{';
        $this->right_delimiter = '}>';
        $this->caching = false;
   }

}
?>