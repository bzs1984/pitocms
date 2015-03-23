<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\MediaModel  as Media;
class MediaController extends BaseController {
    
   

    public function uploadOne($subPath,$file){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->subName   = array('date','Ymd');
        $upload->rootPath  =      './uploads/'; // 设置附件上传根目录
        $upload->savePath  =      $subPath.'/'; // 设置附件上传（子）目录
        
        $picUrl = '';
        // 上传文件 
        $info   =   $upload->uploadOne($file);//$_FILES['thumb']
        if(!$info) {
            // 上传错误提示错误信息
            //$this->error($upload->getError());
            $picUrl = '';
        }else{
            // 上传成功 获取上传文件信息
            //$this->display('templateList');
            $picUrl =  "/Uploads/".$info['savepath'].$info['savename'];
        }

        $data['title']   = $info['name'];
        $data['path']    = "/Uploads/".$info['savepath'];
        $data['filename']= $info['savename'];
        $data['type']    = $info['type'];
        $data['ext']     = $info['ext'];
        $data['created'] = time();
        Media::store($data);
        return $picUrl;
    }


    public function upload($subPath){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      './uploads/thumb/'; // 设置附件上传根目录
        $upload->savePath  =      $subPath; // 设置附件上传（子）目录

        $picUrl = "";
        
        // 上传文件 
        $info   =   $upload->upload($_FILES['files']);
        if(!$info) {// 上传错误提示错误信息
            //$this->error($upload->getError());
            $picUrl = "";
        
        }else{// 上传成功 获取上传文件信息
            //$this->display('templateList');
            $picUrl =  "/Uploads/".$info['savepath'].$info['savename'];
        }

        return $picUrl;
    }
}