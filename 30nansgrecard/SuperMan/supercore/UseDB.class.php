<?php
defined('SUPER_FLAG') or exit();//判断是否调用入口文件
class UseDB{
	protected $where = null;
	protected $superdb = null;
	protected $select_fields = null;

	function __construct(){
		$this->superdb = new SuperDB();
	}
    
    protected function get_prefix(){
    	return $this->superdb->superGetPrefix();
    }

	public function where($whereStr = null){
		if(!empty($whereStr))
			$this->where = $whereStr;
		else
			$this->where = null;
		return $this;
	}

	//执行insert操作
	public function insert($table, $data = array()){
		if(strlen($table)<=0)
			return '数据表不能为空';
		if(empty($data))
			return '插入数据不能为空';

		foreach ($data as $key => &$value) {
			if(is_string($value))
				$value = "'".mysql_real_escape_string($value)."'";
		}
		$table = ($this->get_prefix()).$table;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql = "INSERT INTO {$table} (".implode(',', $fields).") VALUES (".implode(',', $values).")";
		$res = $this->superdb->execute_dml($sql,'insert');
		if($res==1){
			return $this->superdb->get_insert_id();
		}else{
			return false;
		}
	}

	//执行update操作
	public function update($table, $data){
		if(strlen($table)<=0)
			return '数据表不能为空';
		if(empty($data))
			return '更新数据不能为空';
		if(empty($this->where))
			return '条件不能为空';
		$table = ($this->get_prefix()).$table;
		$setStr = '';
		foreach ($data as $key => &$value) {
			if(is_string($value))
				$value = "'".mysql_real_escape_string($value)."'";
			$setStr .= $key.'='.$value.',';
		}
		$lastpos = strrpos($setStr, ',');
		$setStr = substr_replace($setStr, '', $lastpos);
		$sql = "UPDATE {$table} SET {$setStr} {$this->where}";
		$res = $this->superdb->execute_dml($sql,'update');
		if($res!=0){
			$this->where = null;
			return true;
		}else{
			$this->where = null;
			return false;
		}
	}

	//执行delete操作
	public function delete($table){
		if(strlen($table)<=0)
			return '数据表不能为空';
		$table = ($this->get_prefix()).$table;
		$sql = "DELETE FROM {$table} ".(!empty($this->where)? "{$this->where}" : "");
		$res = $this->superdb->execute_dml($sql,'delete');
		if($res==1){
			$this->where = null;
			return true;
		}else{
			$this->where = null;
			return false;
		}
	}

	//执行查询操作时对fields的选择
	public function select($data=array()){
		if(count($data)==1 && $data[0]=='*'){
			$this->select_fields = '*';
		}else{
			foreach ($data as $key => $value) {
				$this->select_fields .= '`'.$value.'`'.',';
			}
			$lastpos = strrpos($this->select_fields, ',');
			$this->select_fields = substr_replace($this->select_fields, '', $lastpos);
		}
		return $this;
	}
	public function getCount($field, $table){
		$table = ($this->get_prefix()).$table;
		$sql = "SELECT COUNT({$field}) FROM {$table} ".(!empty($this->where)? "{$this->where}" : "");
		$res = $this->superdb->superGetCount($sql);
		if(!empty($res)){
			$this->where = null;
            return $res;
        }else{
        	$this->where = null;
            return 0;
        }
	}
	//执行select操作，查询一行记录
	public function getOne($table){
		$table = ($this->get_prefix()).$table;
		$sql = "SELECT {$this->select_fields} FROM {$table} ".(!empty($this->where)? "{$this->where}" : "");
		$res = $this->superdb->superGetOne($sql);
		if(!empty($res)){
			$this->where = null;
			$this->select_fields=null;
			return $res;
		}else{
			$this->select_fields=null;
			$this->where = null;
			return array();
		}
	}

	//执行select操作，查询多行记录
	public function getAll($table){
		$table = ($this->get_prefix()).$table;
		$sql = "SELECT {$this->select_fields} FROM {$table} ".(!empty($this->where)? "{$this->where}" : "");
		$res = $this->superdb->superGetAll($sql);
		if(!empty($res)){
			$this->where = null;
			$this->select_fields=null;
			return $res;
		}else{
			$this->where = null;
			$this->select_fields=null;
			return array();
		}
	}

	//判断某张表是否存在
	public function is_exist_table($table){
		$table = ($this->get_prefix()).$table;
		$res = $this->superdb->super_exist_table($table);
		return $res;
	}

	//清空某张数据表数据
	public function truncate_tb($table){
		$table = ($this->get_prefix()).$table;
		$res = $this->superdb->super_truncate_tb($table);
		return $res;
	}

	//执行一条sql语句
	public function doQuery($sql){
		return $this->superdb->superQuery($sql);
	}

	function __destruct(){
		//
	}
}
?>