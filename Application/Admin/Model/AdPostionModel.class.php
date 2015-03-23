<?php
namespace Admin\Model;
use Think\Model;
use \Think\Page;
class AdPostionModel extends Model
{
	protected $tableName = 'ads_postion'; 

	static function getOne($id)
	{
		$M    = M('ads_postion');	
		$data = $M->alias('a')
				   ->join('left join pito_ads AS b ON a.ad_id = b.id')
				   ->field('a.*,b.title AS adname')
				   ->where("a.id = $id")
				   ->find();
		return $data;		   
	}

	static function getList($condition)
	{
		$Model = M('ads_postion');	
		$list  = $Model->select();
		return $list; 
	}


	static function pageList($condition,$num)
	{
		$num   = $num?$num:10;
		$M     = M('ads_postion');
		$count = $M->count();				// 查询满足要求的总记录数
		$Page  = new \Think\Page($count,$num);  // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show  = $Page->show();					// 分页显示输出

		$list  = $M->limit($Page->firstRow.','.$Page->listRows)->alias('a')
				   ->join('left join pito_ads AS b ON a.ad_id = b.id')
				   ->field('a.*,b.title AS adname')
				   ->select();

		$page['show'] = $show;
		$page['list'] = $list;

		return $page; 
	}

	static function store($data)
	{
		
		$flag  = 0;
		$M 	   = M('ads_postion');	
		$flag  = $M->add($data);		
	    return $flag;
	}

	static function update($data)
	{		
		$flag = 0;
		$M 	  = M('ads_postion');		
		$id   = $data['id'];		
		$flag = $M->where("id=$id")->save($data);		
	    return $flag;
	}

	static function destroy($id)
	{
		$flag = 0;
		$M    = M('ads_postion');	
		$flag = $A->where("id = $id")->delete();
		return $flag;
	}

}