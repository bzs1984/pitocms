<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理后台</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/Public/static/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/Public/static/plugins/bootstrap/css/bootstrap.min.css">
  
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/Public/static/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/Public/static/css/main.css">
    <!-- iCheck-->
    <link rel="stylesheet" href="/Public/static/plugins/icheck/css/_all.css">

    <link rel="stylesheet" href="/Public/static/css/chosen.css">

    <link href="/Public/umeditor122/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="/Public/static/css/jquery.fileupload.css">
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/umeditor122/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/umeditor122/umeditor.min.js"></script>
    <script type="text/javascript" src="/Public/umeditor122/lang/zh-cn/zh-cn.js"></script>

</head>

<body>
    <section id="container">
       
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>管理系统</span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="收起">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>
                    

                   
                    <li class="profile-photo">
                        <img src="/Public/static /img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <?php echo (session('username')); ?> <i class="fa fa-angle-down"></i>
                    </a>
                        <ul class="dropdown-menu animated fadeInDown">
                           
                            <li>
                                <a href="/index.php/Login/Index/loginout"><i class="fa fa-power-off"></i> 退出</a>
                            </li>
                        </ul>
                    </li>
                   

                </ul>
            </div>
        </header>
        

        <!--sidebar start-->
         
        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-dashboard"></i><span>塔台</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>系统设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href="/index.php/Admin/Admin/">系统用户</a>
                            </li>
                            <li><a href="/index.php/Admin/System/edit/">全局设置</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>栏目管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                         <ul>
                            <li><a href="/index.php/Admin/Category/">栏目列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Category/create">添加栏目</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>文章管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="/index.php/Admin/Article/">文章列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Article/create">添加文章</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa fa-table"></i><span>旅游信息管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="/index.php/Admin/Tour/">信息列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Tour/create">添加信息</a>
                            </li>
                        </ul>
                    </li>
                
                 <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa  fa-question"></i><span>问答管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="/index.php/Admin/Question/">信息列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Question/create">添加信息</a>
                            </li>
                        </ul>
                    </li>
                
                    

                     <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa  fa-thumb-tack"></i><span>订单管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/Order/">订单列表</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa  fa-user"></i><span>用户管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/User/">用户列表</a>
                            </li>
                            <li><a href="/index.php/Admin/User/create">添加用户</a>
                            </li>
                        </ul>
                    </li>

                     <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa  fa-user"></i><span>广告位管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/Ad/">广告位列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Ad/create">添加广告位</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>单页管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                       <ul>
                            <li><a href="/index.php/Admin/Page/">单页列表</a>
                            </li>
                            <li><a href="/index.php/Admin/Page/create">添加单页</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>

        </aside>
        <!--sidebar left end-->
        
        <!--sidebar end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a>
                            </li>
                            <li>Forms</li>
                            <li class="active">Form Components</li>
                        </ul>
                        <!--breadcrumbs end -->
                       
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">分类管理</h3>
                               
                            </div>
                          <div class="panel-body">
                           
                                <a href="/index.php/Admin/Article/index" class="btn btn-primary">文章列表</a>
                                <a href="/index.php/Admin/Article/create"  class="btn btn-info">添加文章</a>
                                <a href="/index.php/Admin/Category/index" class="btn btn-primary">分类列表</a>
                                <a href="/index.php/Admin/Category/create"  class="btn btn-info">添加分类</a>

                              
                            </div>
                        </div>
                    </div>
                </div>
       <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">添加分类</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal form-border" id="form1">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">标题</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title"  required class="form-control">
                                        </div>
                                    </div>
                                  
                                   
                                  
                                      <div class="form-group">
                                        <label class="col-sm-3 control-label">所属分类</label>
                                        <div class="col-sm-6">
                                            <select data-placeholder="选择上级分类" class="chosen-select" name="category_id">
                                               <option value="0">顶级分类</option>
                                               <?php if(is_array($catelist)): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["cname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>    
                                              </select>
                                          
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" >缩略图</label>
                                        <div class="col-sm-6">
                                           <div class="row fileupload-buttonbar" style="padding-left:15px;">
                                            <div class="thumbnail col-sm-3">
                                            <img id="thumb_show"   data-holder-rendered="true"/>
                                                
                                            
                                       
                                            <div class="caption" align="center">
                                            <span id="thumb_upload" class="btn btn-primary fileinput-button">
                                            <span>上传</span>
                                            <input type="file" id="thumb" name="thumb">
                                            <input type="hidden" id="picurl" name="picurl"/>
                                            </span>
                                           
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" >排序</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="weight" class="form-control" value="50">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label class="col-sm-3 control-label">内容</label>
                                            <div class="col-sm-6">
                                                <!--style给定宽度可以影响编辑器的最终宽度-->
                                                <script type="text/plain" id="editor" style="width:800px;height:200px"></script>

                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                        <a href="javascript:store();" class="btn btn-primary btn-square">提交</a>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

                






            </section>
        </section>
        <!--main content end-->
      
    </section>
    <!--Global JS-->
    
    <script src="/Public/static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/static/plugins/waypoints/waypoints.min.js"></script>
    <script src="/Public/static/js/application.js"></script>
    <script src="/Public/static/plugins/chosen.jquery.js" type="text/javascript" ></script>
    <script src="/Public/static/js/vendor/jquery.ui.widget.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="/Public/static/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="/Public/static/js/canvas-to-blob.min.js"></script>
   
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="/Public/static/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="/Public/static/js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="/Public/static/js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="/Public/static/js/jquery.fileupload-image.js"></script>
    <script src="/Public/static/plugins/icheck/js/icheck.min.js"></script>
    <script src="/Public/static/plugins/validation/js/jquery.validate.min.js"></script>
   
    <script>
     //实例化编辑器
    var um = UM.getEditor('editor');
    
  
    function store()
    {
     
        var data = $('#form1').serialize();
       
        $.post("/index.php/Admin/Article/store",data,function(rs)
        {
            if(rs.status==1)
            {
                alert(rs.content);
                window.location.href=" /index.php/Admin/Article";
                //location.reload();
            }
            else
            {
                alert(rs.content);
            }
        });
    }

    //可以搜索的下拉插件
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'找不到哦...'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }    

  
</script>

<script>
$(function() {
    $("#thumb").fileupload({
            url: '/index.php/Admin/media/uploadOne/subPath/thumb',
            sequentialUploads: true
        }).bind('fileuploaddone', function (e, data) {
            $("#thumb_show").attr("src",data.result);
            $("#picurl").val(data.result);
            $("#thumb_upload").children("span").text('重新上传');
           
        });
           
    });
</script>
</body>

</html>