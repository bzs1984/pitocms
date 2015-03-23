<?php
namespace Login\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    //  登陆模板
    public function index(){
       $this->display(':login');
    }

    // 登录
    public function loginDo()
    {
    	$data['username'] = I('username');
    	$data['password'] = I('password');
    	$M                = D('Login');
    	$flag             = $M->loginDo($data);


    	if($flag['username'])
    	{
    		session('username',$flag['username']);  
            session('uid',$flag['id']); 
            //dump(session('uid'));die;
            $ajaxData['status']  = 1;		
			$this->ajaxReturn($ajaxData);
    	}
    	else
    	{
    		$ajaxData['status']  = 0;
			$ajaxData['content'] = '用户名或者密码错误';
			$this->ajaxReturn($ajaxData);
    	}

    }

    // 登出
    public function loginOut()
    {
        session(null);
        $this->redirect('/Login/index');
    }
}