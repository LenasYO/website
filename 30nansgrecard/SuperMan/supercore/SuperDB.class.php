<?php
defined('SUPER_FLAG') or exit();//判断是否调用入口文件
class SuperDB extends SuperCommon{
	  private $host      = '';
    private $db_name   = '';
    private $username  = '';
    private $password  = '';
    private $charset   = 'utf8';
    public  $result    = null;
    private $insert_id = null;
    public  $conn      = null;
    public  $prefix    = null;

	function __construct(){
		$dbconf = include(APP_CONF.'dbconf.php');
		$this->host     = $dbconf['host'];
        $this->username = $dbconf['username'];
        $this->password = $dbconf['password'];
        $this->db_name  = $dbconf['db_name'];
        $this->charset  = $dbconf['charset'];
        $this->prefix   = $dbconf['prefix'];
        $this->connect();//连接数据库
	}

	protected function connect(){
	    $this->conn = mysql_connect($this->host,$this->username,$this->password);
	    if(!$this->conn){
	    	die('数据库连接失败');
	    }
        $db_select = mysql_select_db($this->db_name, $this->conn);
        if(!$db_select){
        	die('选择数据库失败');
        }
        $query = mysql_query('SET NAMES '.$this->charset,$this->conn);
        if(!$query){
        	die('设置数据库字符集失败');
        }
	}

	//执行一条sql语句
	public function superQuery($sql){
      $mq = mysql_query($sql, $this->conn);
      return $mq;
    }

	//执行insert，update，delete
	public function execute_dml($sql, $flag=''){
		  $mq = mysql_query($sql, $this->conn);
	    if($mq){
	        if(mysql_affected_rows($this->conn)>0){
	        	  if($flag=='insert'){
	        		    $this->insert_id = mysql_insert_id();
	        	  }
	            return 1;
	        }else{
	            return 2;
	        }
	    }else{
	        return 0;
	    }
	}

	//返回插入行的id
	public function get_insert_id(){
		return $this->insert_id;
	}

	//取得总记录数
    public function superGetCount($sql){
      $mq    = mysql_query($sql,$this->conn);
      $res   = array();
      $count = '';
      if(false!==$mq){
          $res   = @mysql_fetch_array($mq);
          $count = $res[0];
      }
      $this->result = $mq;
      return $count;
    }

	//执行查询操作
	public function superGetAll($sql){
		$mq = mysql_query($sql,$this->conn);
		$resArr = array();
		if($mq){
				$i = 0;
				while($res = mysql_fetch_assoc($mq)){
					$resArr[$i] = $res;
					$i++;
				}
				return $resArr;
		}else{
			return array();
		}
	}

	public function superGetPrefix(){
		return $this->prefix;
	}

	//获取一行记录
	public function superGetOne($sql){
		$mq = mysql_query($sql, $this->conn);
		if($mq){
				$res = mysql_fetch_assoc($mq);
				if(false!==$res){
					return $res;
				}
			}else{
				return array();
			}
	}

	//判断表是否存在
    public function super_exist_table($tbname){
      $sql = "SELECT table_name FROM information_schema.TABLES WHERE table_name='{$tbname}'";
      $mq = mysql_query($sql,$this->conn) or die(mysql_error());
      $res = @mysql_fetch_array($mq);
      if(false!==$res)
      {
          return true;
      }else
      {
          return false;
      }
      
    }

   //清空数据表
   public function super_truncate_tb($tb_name){
      $sql = "TRUNCATE TABLE `{$tb_name}`";
      $res = $this->execute_dml($sql);
      if($res!=1)
      {
         return true;
      }else
      {
         return false;
      }
   }

   public function free_result(){
       mysql_free_result($this->result);
       $this->result = null;
   }

   public function connect_close(){
       if(is_resource($this->conn)){
           mysql_close($this->conn);
       }
       $this->conn = null;
   }

   function __destruct(){
       if($this->result){
            $this->free_result();
       }
       $this->connect_close();
   }

}

?>