<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\SystemModel  as System;
class SystemController extends BaseController {
    
    
   

    public function edit()
    {
      
        $data = System::getOne(1);
       

        $this->assign('data',$data);
      
        $this->display();
    }

   
    
    public function update()
    {
      
        $data['title']   = I('title');    
        $data['keyword'] = I('keyword'); 
        $data['desc']    = I('desc');
        $data['icp']     = I('icp'); 
       
      
        $flag  = System::update($data);
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

   

    
}