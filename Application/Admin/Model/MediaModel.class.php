<?php
namespace Admin\Model;
use Think\Model;
use \Think\Page;
class MediaModel extends Model
{
	protected $tableName = 'medias'; 

	static function getOne($id)
	{
		$M    = M('articles');	
		$data = $M->alias('a')				  
				   ->where("a.id = $id")
				   ->order('a.id desc')
				   ->find();
		return $data;		   
	}

	static function getList($condition)
	{
		$Model = M('articles');	
		$list  = $Model->alias('a')				 
				   ->field('a.*')
				   ->order('a.id desc')
				   ->select();
		return $list; 
	}


	static function pageList($condition,$num)
	{
		$num   = $num?$num:10;
		$M     = M('articles');
		$count = $M->count();				// 查询满足要求的总记录数
		$Page  = new \Think\Page($count,$num);  // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show  = $Page->show();					// 分页显示输出

		$list  = $M->limit($Page->firstRow.','.$Page->listRows)->alias('a')
				   
				   ->field('a.*')
				   ->order('a.id desc')
				   ->select();

		$page['show'] = $show;
		$page['list'] = $list;

		return $page; 
	}

	static function store($data)
	{
		
		$flag = 0;
		$M 	  = M('medias');		
		$flag = $M->add($data);		
	    return $flag;
	}

	static function update($data)
	{		
		$M    = M('medias');
		$id   = $data['id'];		
		$flag = $M->where("id=$id")->save($data);	
	    return $flag;
	}

	static function destroy($id)
	{
		$M    = M('medias');
		$flag = $M->delete($id);		
		return $flag;
	}

}