<?php
namespace Login\Model;

use Think\Model;
use \Think\Page;
class LoginModel extends Model
{
	protected $tableName = 'admins'; 

	function loginDo($user)
	{
		
		
		$username = $user['username'];
		$password = md5($user['password']);
		$Model    = M('admins');	
		$data     = $Model->where("username='$username'")->find();
		
		
		
			
		
		
		if($password == $data['password'])
		{
			return $data;
		}else
		{
			return false;
		}
		
	    
	}


	
}
