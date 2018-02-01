<?php
//设置框架所需的常量以及目录常量
defined('SUPER_ROOT') or define('SUPER_ROOT',str_replace('\\', '/', dirname(__FILE__)).'/');
defined('SUPER_COMMFUNC') or define('SUPER_COMMFUNC',SUPER_ROOT.'commfunc/');
defined('SUPER_CORE') or define('SUPER_CORE',SUPER_ROOT.'supercore/');
//设置app的目录常量
defined('APP_CACHE') or define('APP_CACHE',APP_ROOT.'cache/');
defined('APP_CONF') or define('APP_CONF',APP_ROOT.'conf/');
defined('APP_CONTROLLER') or define('APP_CONTROLLER',APP_ROOT.'controller/');
defined('APP_EXT') or define('APP_EXT',APP_ROOT.'ext/');
defined('APP_VIEWS') or define('APP_VIEWS',APP_ROOT.'views/');
?>