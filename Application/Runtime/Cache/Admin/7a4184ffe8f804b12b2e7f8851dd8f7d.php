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
    <title>SpaceLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/Public/static/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/Public/static/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/Public/static/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/Public/static/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/Public/static/css/main.css">
    <!-- DataTables-->
    <link rel="stylesheet" href="/Public/static/plugins/dataTables/css/dataTables.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="/Public/static/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Public/static/js/html5shiv.js"></script>
    <script src="/Public/static/js/respond.min.js"></script>
    <![endif]-->
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
                            <li>UI Elements</li>
                            <li class="active">Date Tables</li>
                        </ul>
                      
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">列表</h3>
                               
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
                                <h3 class="panel-title">Data Tables</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>标题</th>
                                            <th>所属栏目</th>
                                            <th>添加日期</th>
                                         
                                            <th>操作</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                         <?php if(is_array($list["list"])): $i = 0; $__LIST__ = $list["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                            <td><?php echo ($vo["id"]); ?></td>
                                            <td><?php echo ($vo["title"]); ?></td>
                                            <td><?php echo ($vo["cname"]); ?></td>
                                            <td><?php echo (date('Y-m-d',$vo["created"])); ?></td>
                                         
                                            <td><a href="/index.php/Admin/Article/index/edit/id/<?php echo ($vo["id"]); ?>">修改</a> <a href="/index.php/Admin/Article/index/destroy/id/<?php echo ($vo["id"]); ?>">删除</a></td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><?php echo ($list["show"]); ?> </div>


                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </section>
        <!--main content end-->
       
    </section>
    <!--Global JS-->
    <script src="/Public/static/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/static/plugins/waypoints/waypoints.min.js"></script>
    <script src="/Public/static/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="/Public/static/js/application.js"></script>
   

</body>

</html>