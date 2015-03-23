<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\WalkThroughModel  as WT;
class WalkThroughController extends BaseController {
    
    
    public function index()
    {
      
        $list  = WT::pageList($condition,10);

        $this->assign('list',$list);
        $this->display();
    }

    public function create()
    {
        $catelist = WT::getList($keyword);

        $this->assign('catelist',$catelist);
        $this->display();
    }

    public function edit()
    {
        $id   = I('id');
        $data = WT::getOne($id);
       

        $this->assign('data',$data);
      
        $this->display();
    }

    public function store()
    {
       
        $data['title']   = I('title');    
        $data['thumb']   = MediaController::uploadOne('thumb',$_FILES['thumb']);
        $data['pdf']     = MediaController::uploadOne('pdf',$_FILES['pdf']);
        $data['weight']  = I('weight');
        $data['clicks']  = I('clicks'); 
        $data['created'] = time();      
       
        $flag  = WT::store($data);
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
        $data['id']      = I('id');
         $data['title']  = I('title');    
        $data['thumb']   = MediaController::uploadOne('thumb',$_FILES['thumb']);
        $data['pdf']     = MediaController::uploadOne('pdf',$_FILES['pdf']);
        $data['weight']  = I('weight');
        $data['clicks']  = I('clicks'); 
        $data['updated'] = time();    
      
        $flag  = WT::update($data);
        if($flag)
        {
           $this->success('修改成功');
        }else
        {
            $this->error('修改失败');
        }
       
    }

    public function remove($id)
	{
		$id    = I('id');
        $flag  = WT::remove($id);
        if($flag)
        {
           $this->success('移除成功');
        }else
        {
            $this->error('移除失败');
        }
	}

    public function destroy()
    {
        $id    = I('id');
        $flag  = WT::destroy($id);
        if($flag)
        {
           $this->success('删除成功');
        }else
        {
            
            $this->error('要删除此栏目请先删除下级栏目和内容');
        }
    }

    
}