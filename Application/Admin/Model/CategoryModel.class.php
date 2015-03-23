<?php
namespace Admin\Model;
use Think\Model;
use \Think\Page;
class CategoryModel extends Model
{
	protected $tableName = 'categorys'; 

	static function getList($condition)
	{
		$Model = M('categorys');	
		$list  = $Model->select();
		return $list; 
	}


	static function pageList($condition,$num)
	{
		$num   = $num?$num:10;
		$M     = M('categorys');
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
		
		$flag       = 0;
		$M 		    = M('categorys');
		$M->cname   = $data['cname'];
		$M->thumb   = $data['thumb'];
		$M->content = $data['content'];
		$M->pid 	= $data['pid'];
		$M->pids 	= $data['pids'];
		$M->weight  = $data['weight'];
		$M->rm      = 0;
		$M->created = time();
	
		$flag = $M->add();
		//echo $M->getLastSql();die;
		
		
	    return $flag;
	}

	static function edit($id)
	{		
		$M    = M('categorys');
		$data = $M->find($id);	

	    return $data;
	}

	static function update($data)
	{
		$flag       = 0;
		$M          = M('categorys');
		$id         = $data['id'];
	    
		
		
	    $flag = $M->where("id=$id")->save($$data); 
	    return $flag;
	}

	// 添加分类的时候根据传入的pid获取所有父id
	static function getPids($pid)
	{
		
		$pids = '';
		if($pid == 0)
		{
			$pids = 0;
		}else
		{
			$M    = M('categorys');
			$pids = $M->where("id=$pid")->getField('pids');
			$pids = $pids.','.$pid	;
		}

		return $pids;
		
	}

	static function destroy($id)
	{
		$flag  = array();
		$M     = M('articles');
		$data1 = $M->where("category_id = $id")->find();
		$A     = M('categorys');
		$data2 = $A->where("pid = $id")->find();
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