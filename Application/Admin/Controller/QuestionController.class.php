<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\QuestionModel  as Question;
class QuestionController extends BaseController {
    
    
    public function index()
    {
      
        $list  = Question::pageList($condition,10);

        $this->assign('list',$list);
        $this->display();
    }

    public function create()
    {
        $catelist = Question::getList($keyword);

        $this->assign('catelist',$catelist);
        $this->display();
    }

    public function edit()
    {
        $id   = I('id');
        $data = Question::getOne($id);
       

        $this->assign('data',$data);
      
        $this->display();
    }

    public function store()
    {
       
        $data['title']   = I('title');    
        $data['user_id'] = I('user_id');       
        $data['content'] = I('content'); 
        $data['tags']    = I('tags');
        $data['clicks']  = I('clicks');
        $data['values']  = I('values');
        $data['sames']   = I('sames');
        $data['answers'] = I('answers');
        $data['created'] = time();      
      
        $flag  = Question::store($data);
      
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
        $data['user_id'] = I('user_id');       
        $data['content'] = I('content'); 
        $data['tags']    = I('tags');
        $data['clicks']  = I('clicks');
        $data['values']  = I('values');
        $data['sames']   = I('sames');
        $data['answers'] = I('answers');
        $data['updated'] = time();    
      
        $flag  = Question::update($data);
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
        $flag  = Question::remove($id);
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
        $flag  = Question::destroy($id);
        if($flag)
        {
           $this->success('删除成功');
        }else
        {
            
            $this->error('要删除此栏目请先删除下级栏目和内容');
        }
    }

    
}