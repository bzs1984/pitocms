<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\AdModel as Ad;
use Admin\Model\AdPostionModel as AdPostion;
class AdPostionController extends BaseController {
    
    public function index()
    {
      
        $list  = AdPostion::pageList($condition,10);

        $this->assign('list',$list);
        $this->display();
    }

    public function create()
    {
        $adlist = Ad::getList($keyword);

        $this->assign('adlist',$adlist);
        $this->display();
    }

    public function edit($id)
    {
        
      
        $list = Ad::getList($keyword);
        $data = AdPostion::getOne($id);

        $this->assign('data',$data);
        $this->assign('adlist',$list);
        $this->display();
    }

    public function store()
    {
       
        $data['title']   = I('title');       
        $data['cover']   = MediaController::uploadOne('ad',$_FILES['cover']);
        $data['ad_id']   = I('ad_id');   
        $data['url']     = I('url');        
        $data['weight']  = I('weight');
        $data['created'] = time();   
      
        $flag  = AdPostion::store($data);
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
        if( !empty($_FILES['cover']['name']))
        {
            $data['cover']   = MediaController::uploadOne('ad',$_FILES['cover']);
        }

        
        $data['ad_id']   = I('ad_id');   
        $data['url']     = I('url');        
        $data['weight']  = I('weight');    
        $data['updated'] = time();  
      
        $flag  = AdPostion::update($data);
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
        $flag  = AdPostion::remove($id);
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
        $flag  = AdPostion::destroy($id);
        if($flag)
        {
           $this->success('删除成功');
        }else
        {
            
            $this->error('删除失败');
        }
    }

    
}