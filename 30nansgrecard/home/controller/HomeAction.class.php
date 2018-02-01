<?php
ext_import('functions.php');
class HomeAction extends SuperAction{
	function __construct(){//必须要调用构造方法，并且在构造方法里面调用父类的构造方法
		parent::__construct();
	}
    //获取项目资源文件
    private function getimgurl(){
        $imgArr = array(
            'music'=>'music.png',
            'mymusic'=>'music.mp3',
            'p1'=>'p1.jpg',
            'p2'=>'p2.jpg',
            'p3'=>'p3.png',
            'p4'=>'p4.jpg',
            'heka'=>'heka.jpg',
            'word'=>'word.png',
            'startBtn'=>'startBtn.png',
            'makeBtn'=>'makeBtn.png',
            'againBtn'=>'againBtn.png',
        );
        $proj_name = 'nansgrecard';
        foreach ($imgArr as $key => &$value) {
          // $key = 'upload_qiniu_'.$proj_name.'_'.$value;
          // $value = getfile($key).'&clearvt='.time();//七牛的接口
          $value="public/images/".$value.'?'.'clearvt='.time();
        }
        $this->assign('imgArr', $imgArr); 
    }
	public function index(){
        $this->getimgurl();//调用获取项目资源文件
        $this->assign('vt', time()); 
		$this->display('index.html');
	}
}
?>