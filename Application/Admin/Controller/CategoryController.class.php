<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\CategoryModel as Category;
class CategoryController extends BaseController {
    
    public function index()
    {
      
        $list  = Category::pageList($condition,10);

        $this->assign('list',$list);
        $this->display();
    }

    public function create()
    {
        $catelist = Category::getList($keyword);

        $this->assign('catelist',$catelist);
        $this->display();
    }

    public function edit()
    {
        $id   = I('id');
        $data = Category::edit($id);
        $list = Category::getList();

        $this->assign('data',$data);
        $this->assign('catelist',$list);
        $this->display();
    }

    public function store()
    {
       
        $data['cname']   = I('cname');
        $data['thumb']   = I('picurl');
        $data['content'] = I('editorValue');   
        $data['pid']     = I('pid');
        $data['pids']    = Category::getPids(I('pid'));
        $data['weight']  = I('weight');    
      
        $flag  = Category::store($data);
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
        $data['cname']   = I('cname');
        $data['thumb']   = I('picurl');
        $data['content'] = I('editorValue');   
        $data['pid']     = I('pid');
        $data['pids']    = Category::getPids(I('pid'));
        $data['weight']  = I('weight');  
        $data['updated'] = time();  
      
        $flag  = Category::update($data);
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
        $flag  = Category::remove($id);
        if($flag)
        {
           $this->success('移除成功');
        }else
        {
            $this->error('移除失败');
        }
	}

    // 添加分类的时候根据传入的pid获取所有父id
    static function getPids($pid)
    {
        
        $pids = '';
        if($pid == 0)
        {
            $pids = 0;
        }else
        {
            $M    = M('categorys');
            $pids = $M->where("id=$pid")->getField('pids');
            $pids = $pids.','.$pid  ;
        }

        return $pids;
        
    }

    public function destroy()
    {
        $id    = I('id');
        $flag  = Category::destroy($id);
        if($flag)
        {
           $this->success('删除成功');
        }else
        {
            
            $this->error('要删除此栏目请先删除下级栏目和内容');
        }
    }

    
}