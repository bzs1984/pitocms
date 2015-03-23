<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    
    function __construct()
	{
	   parent::__construct();

	  
	   if(!session('username'))
	   {
	   		$this->redirect('/Login/index');
	   }
	}
}