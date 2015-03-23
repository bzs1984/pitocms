<?php
namespace Admin\Model;
use Think\Model;
use \Think\Page;
class SystemModel extends Model
{
	protected $tableName = 'system'; 

	static function getOne($id)
	{		
		$M    = M('system');
		$data = $M->find($id);
	    return $data;
	}	

	static function update($data)
	{
		$flag = 0;
		$M    = M('system');		
	    $flag = $M->where("id=1")->save($data); 
	    
	    return $flag;
	}

	

	
}