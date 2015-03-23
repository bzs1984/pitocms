<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\AdminModel as Admin;
class AdminController extends BaseController {
    
    public function index()
    {
      
        $list  = Admin::pageList($condition,10);

        $this->assign('list',$list);
        $this->display();
    }

    public function create()
    {
        $catelist = Admin::getList($keyword);

        $this->assign('catelist',$catelist);
        $this->display();
    }

    public function edit($id)
    {
       
        $data = Admin::getOne($id);
      

        $this->assign('data',$data);
      
        $this->display();
    }

    public function store()
    {
       
        $data['username']   = I('username');
        $data['password']   = md5(I('password'));       
        $data['created']    = time();    
      
        $flag  = Admin::store($data);
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
        $data['id']       = I('id');
        $data['username'] = I('username');
        if(I('password'))
        {
            $data['password'] = md5(I('password'));   
        }
            
        $data['updated']  = time();    
      
        $flag  = Admin::update($data);
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

    public function remove($id)
	{
		$id    = I('id');
        $flag  = Admin::remove($id);
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
        $flag  = Admin::destroy($id);
        if($flag)
        {
           $this->success('删除成功');
        }else
        {
            
            $this->error('删除失败');
        }
    }

    
}