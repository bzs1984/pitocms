<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\TourModel  as Tour;
use Admin\Model\CategoryModel as Category;
class TourController extends BaseController {
    
    public function index()
    {
       
        $list  = Tour::pageList($whereArray);


     	
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
        $data     = Tour::getOne($id);     
        $this->assign('catelist',$catelist);
        $this->assign('data',$data);
        $this->display();
    }

    public function store()
    {
       
        $data['title']        = I('title');
        $data['thumb']        = MediaController::uploadOne('thumb',$_FILES['thumb']);
        $data['content']      = I('content');  
        $data['fee_info']     = I('fee_info'); 
        $data['route_info']   = I('route_info');  
        $data['category_id']  = I('category_id');       
        $data['weight']       = I('weight');  
        $data['price']        = I('price');
        $data['created']      = time();       
       
        $flag  = Tour::store($data);
        if($flag)
        {
           $this->success('添加成功');
        }else
        {
            $this->error('添加失败');
        }
       
    }

    public function update()
    {
     
        $data['id']           = I('id');
        $data['title']        = I('title');
        if( !empty($_FILES['thumb']['name']))
        {
           
            $data['thumb']        = MediaController::uploadOne('thumb',$_FILES['thumb']);
        }
       
        $data['content']      = I('content');  
        $data['fee_info']     = I('fee_info'); 
        $data['route_info']   = I('route_info');  
        $data['category_id']  = I('category_id');       
        $data['weight']       = I('weight');  
        $data['price']        = I('price');     
        $data['updated']      = time();  
        
      
        $flag  = Tour::update($data);
        if($flag)
        {
           $this->success('修改成功');
        }else
        {
            $this->error('修改失败');
        }
    }

    public function destroy()
	{
		$id    = I('id');
        $flag  = Tour::destroy($id);
        if($flag)
        {
           $this->success('移除成功');
        }else
        {
            $this->error('移除失败');
        }
	}
}