<?php
defined('SUPER_FLAG') or define('SUPER_FLAG',true);//设置加载框架标识
class SuperMan{
	static protected $fileArr = array();
	//启用框架
	static public function startFrame($AppDir){
		defined('APP_ROOT') or define('APP_ROOT',$AppDir);
		$defines_path = dirname(__FILE__).'/defines.php';
		include($defines_path);//加载常量
		self::setIncludePath();//设置脚本引入路径
		self::loadCore();//加载框架核心文件
		self::loadAppFile();//加载app脚本文件
		self::judgeRouter();//路由跳转逻辑
		self::dataFilter();//数据安全过滤
		
	}

	//判断路由
	static protected function judgeRouter(){
		if(!isset($_GET['c'])){
			$_GET['c'] = 'Index';
		}
		if(!isset($_GET['f'])){
			$_GET['f'] = 'index';
		}
		$class = $_GET['c'];
		$method = $_GET['f'];
		$ins =  self::getInstance($class, $method);
		if(false === $ins){
			exit('该类或该类的方法不存在');
		}
		$ins->$method();
	}

	//实例化类
	static protected function getInstance($class, $method){
		$file_path = APP_CONTROLLER.$class.'Action.class.php';
		if(!file_exists($file_path)){
			return false;
		}
		$className = $class.'Action';
		$ins = new $className;
		$methodArr = get_class_methods($ins);
		if(!in_array($method, $methodArr)){
			return false;
		}
		return $ins;
	}

	//加载框架脚本
	static protected function loadCore(){
		include('SuperFunctions.php');
		include('SuperCommon.class.php');
		include('SuperDB.class.php');
		include('SuperAction.class.php');
		include('UseDB.class.php');
	}

	//设置脚本包含路径
	static protected function setIncludePath(){
		set_include_path(SUPER_CORE.PATH_SEPARATOR.SUPER_COMMFUNC.PATH_SEPARATOR.APP_CACHE.PATH_SEPARATOR.APP_CONF.PATH_SEPARATOR.APP_CONTROLLER.PATH_SEPARATOR.APP_EXT.PATH_SEPARATOR.APP_VIEWS);
	}

	//加载app所有的脚本文件
	static protected function loadAppFile(){
		self::getDirFiles(APP_CONTROLLER);
		if(!empty(self::$fileArr)){
			foreach(self::$fileArr as $value){
				include($value);
			}
		}else{
			exit('app无必须脚本文件');
		}
	}

	//获取app目录下脚本文件
	static protected function getDirFiles($dir){
	   	$opendir = opendir($dir) or exit();
	   	while(false!==($file=readdir($opendir))){
	        if(is_dir($dir.'/'.$file)&&($file!='.')&&($file!='..')){
	            self::getDirFiles($dir.'/'.$file.'/');
	        }else{
	          	if($file!='.'&&$file!='..'){
	          	  	self::$fileArr[] = $file;
	          	}
	        }
	   	}
    }

    //数据初始过滤
    static protected function dataFilter(){
        if(!get_gpc_val()){
            $_REQUEST = data_addslashes($_REQUEST);
            $_GET     = data_addslashes($_GET);
            $_POST    = data_addslashes($_POST);
            $_COOKIE  = data_addslashes($_COOKIE);
        }
    }


}

?>