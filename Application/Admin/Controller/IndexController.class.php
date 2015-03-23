<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $static = C('static');
        $this->assign('static',$static);
        $this->display('../../index');
    }
}