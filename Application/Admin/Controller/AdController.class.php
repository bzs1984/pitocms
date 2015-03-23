<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\AdModel as Ad;
class AdController extends BaseController {
    
    public function index()
    {
      
        $list  = Ad::pageList($condition,10);

        $this->assign('list',$list);
        $this->display();
    }

    public function create()
    {
       
        $this->display();
    }

    public function edit($id)
    {
        $id   = I('id');
        $data = Ad::getOne($id);      
        $this->assign('data',$data);      
        $this->display();
    }

    public function store()
    {
       
        $data['title']   = I('title');     
        $data['remark']  = I('remark');
        $data['created'] = time();  
     
        $flag  = Ad::store($data);
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
        $data['title']   = I('title');     
        $data['remark']  = I('remark');   
        $data['updated'] = time();  
      
        $flag  = Ad::update($data);
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
        $flag  = Ad::remove($id);
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
        $flag  = Ad::destroy($id);
        if($flag)
        {
           $this->success('删除成功');
        }else
        {
            
            $this->error('要删除此栏目请先删除下级栏目和内容');
        }
    }

    
}