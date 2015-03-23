<?php
namespace Admin\Model;
use Think\Model;
use \Think\Page;
class ArticleModel extends Model
{
	protected $tableName = 'articles'; 

	static function getOne($id)
	{
		$M    = M('articles');	
		$data = $M->alias('a')
				   ->join('left join pito_articles_article AS b ON a.id = b.article_id')
				   ->field('a.*,b.content')
				   ->where("a.id = $id")
				   ->find();
		return $data;		   
	}

	static function getList($condition)
	{
		$Model = M('articles');	
		$list  = $Model->select();
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
				   ->join('left join pito_categorys AS b ON a.category_id = b.id')
				   ->field('a.*,b.cname')
				   ->select();

		$page['show'] = $show;
		$page['list'] = $list;

		return $page; 
	}

	static function store($data)
	{
		
		$flag       	= 0;
		$M 		    	= M('articles');
		$M->title   	= $data['title'];
		$M->thumb   	= $data['thumb'];		
		$M->category_id = $data['category_id'];
		$M->weight  	= $data['weight'];
		$M->rm      	= 0;
		$M->created 	= time();

		$M->startTrans();
			$id 		   = $M->add();
			$A 			   = M('articles_article');
			$A->article_id = $id;
			$A->content    = $data['content'];
			$flag          = $A->add();
		if ($flag )
		{
		    // 提交事务
		    $M->commit(); 
		 }else
		 {
		   // 事务回滚
		   $M->rollback(); 
		 }
		
	    return $flag;
	}

	static function update($data)
	{		
		$M 		   = M('articles');
		$M->startTrans();
		
		$id         = $data['id'];		
		$flag1 		= $M->where("id=$id")->save($data);
		$A 			= M('articles_article');
		$A->content = $data['content'];
		$flag2      = $A->where("article_id = $id")->save();
		if ($flag1&&$flag2 )
		{
		    // 提交事务
		    $M->commit(); 
		 }else
		 {
		   // 事务回滚
		   $M->rollback(); 
		 }
		//echo $flag1+$flag2;die;
	    return $flag1;
	}

	static function destroy($id)
	{
		$M    = M('articles');
		$flag = $M->delete($id);
		$A 	  = M('articles_article');
		$flag2 = $A->where("article_id = $id")->delete();
		return $flag+$flag2;
	}

}