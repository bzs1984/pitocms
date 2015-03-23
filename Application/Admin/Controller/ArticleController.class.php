<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\ArticleModel  as Article;
use Admin\Model\CategoryModel as Category;
class ArticleController extends BaseController {
    
    public function index()
    {
        $Model = new Article();
        $list  = $Model::pageList($whereArray);


     	
        $this->assign('list',$list);
      
        $this->display();
    }

    public function create()
    {
        $catelist = Category::getList($keyword);       
        $this->assign('catelist',$catelist);
        $this->display();
    }

    public function edit($id)
    {
     
        $catelist = Category::getList($keyword);  
        $data     = Article::getOne($id);     
        $this->assign('catelist',$catelist);
        $this->assign('data',$data);
        $this->display();
    }

    public function store()
    {
       
        $data['title']        = I('title');
        $data['thumb']        = I('picurl');
        $data['content']      = I('editorValue');   
        $data['category_id']  = I('category_id');       
        $data['weight']       = I('weight');    
        //var_dump($data);die;
        $flag  = Article::store($data);
        if($flag)
        {
            $ajaxData['status']  = 1;
            $ajaxData['content'] = '添加成功';
            $this->ajaxReturn($ajaxData);
        }else
        {
            $ajaxData['status']  = 0;
            $ajaxData['content'] = '添加失败';
            $this->ajaxReturn($ajaxData);
        }
       
    }

    public function update()
    {
     
        $data['id']           = I('id');
        $data['title']        = I('title');
        $data['thumb']        = I('picurl');
        $data['content']      = I('editorValue');   
        $data['category_id']  = I('category_id');       
        $data['weight']       = I('weight');  
        $data['updated']      = time();  
        //dump($data);die;
      
        $flag  = Article::update($data);
        if($flag)
        {
            $ajaxData['status']  = 1;
            $ajaxData['content'] = '修改成功';
            $this->ajaxReturn($ajaxData);
        }else
        {
            $ajaxData['status']  = 0;
            $ajaxData['content'] = '修改失败';
            $this->ajaxReturn($ajaxData);
        }
    }

    public function destroy()
	{
		$id    = I('id');
        $flag  = Article::destroy($id);
        if($flag)
        {
           $this->success('移除成功');
        }else
        {
            $this->error('移除失败');
        }
	}
}