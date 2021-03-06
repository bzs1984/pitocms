<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\OrderModel  as Order;
class OrderController extends BaseController {
    
    
    public function index()
    {
      
        $list  = Order::pageList($condition,10);

        $this->assign('list',$list);
        $this->display();
    }

    public function create()
    {
        $catelist = Order::getList($keyword);

        $this->assign('catelist',$catelist);
        $this->display();
    }

    public function edit()
    {
        $id   = I('id');
        $data = Order::getOne($id);
       

        $this->assign('data',$data);
      
        $this->display();
    }

    public function store()
    {
       
        $data['title']   = I('title');    
        $data['keyword'] = I('keyword'); 
        $data['desc']    = I('desc');
        $data['content'] = I('editorValue'); 
        $data['created'] = time();      
      
        $flag  = Order::store($data);
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
        $data['id']      = I('id');
        $data['title']   = I('title');    
        $data['keyword'] = I('keyword'); 
        $data['desc']    = I('desc');
        $data['content'] = I('editorValue'); 
        $data['updated'] = time();    
      
        $flag  = Order::update($data);
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
        $flag  = Order::remove($id);
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
        $flag  = Order::destroy($id);
        if($flag)
        {
           $this->success('删除成功');
        }else
        {
            
            $this->error('要删除此栏目请先删除下级栏目和内容');
        }
    }

    
}