<?php
namespace Admin\Model;
use Think\Model;
use \Think\Page;
class AdModel extends Model
{
	protected $tableName = 'ads'; 

	static function getOne($id)
	{		
		$M    = M('ads');
		$data = $M->find($id);
	    return $data;
	}

	static function getList($condition)
	{
		$Model = M('ads');	
		$list  = $Model->select();
		return $list; 
	}


	static function pageList($condition,$num)
	{
		$num   = $num?$num:10;
		$M     = M('ads');
		$count = $M->count();				// 查询满足要求的总记录数
		$Page  = new \Think\Page($count,$num);  // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show  = $Page->show();					// 分页显示输出
		$list  = $M->limit($Page->firstRow.','.$Page->listRows)->select();
		$page['show'] = $show;
		$page['list'] = $list;

		return $page; 
	}

	static function store($data)
	{
		
		$flag = 0;
		$M 	  = M('ads');
		$flag = $M->add($data);
		return $flag;
	}



	static function update($data)
	{
		$flag = 0;
		$M    = M('ads');
		$id   = $data['id'];		
	    $flag = $M->where("id=$id")->save($data); 
	    return $flag;
	}

	static function remove($id)
	{
		$flag      = 0;
		$M         = M('ads');
		$M->remove = 1;		
	    $flag = $M->where("id=$id")->save(); 
	    return $flag;
	}

	

	static function destroy($id)
	{
		$flag  = array();
		$M     = M('ads_postion');
		$data1 = $M->where("ad_id = $id")->find();
		$A     = M('ads');
		$data2 = $A->where("id = $id")->find();
		if($data1||$data2)
		{		
			$flag = 0;
		}else
		{
			$flag = $A->delete($id);
			
		}

		return $flag;

	}
}