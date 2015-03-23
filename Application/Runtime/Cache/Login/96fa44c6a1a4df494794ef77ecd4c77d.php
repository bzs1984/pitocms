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
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="_/Public/static/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/Public/static/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/Public/static/css/main.css">
   
</head>

<body>
    <section id="login-container">

        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            管理后台
                        </h3>
                    </div>
                    <div class="panel-body">
                       
                        <form class="form-horizontal" role="form" id="login">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" id="email" placeholder="用户名" name="username">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" id="password" placeholder="密码" name="password">
                                    <i class="fa fa-lock"></i>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <a href="javascript:login_do()" class="btn btn-primary btn-block">登录</a>
                                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Global JS-->
    <script src="/Public/static/js/jquery-1.10.2.min.js"></script>
    <script src="/Public/static/plugins/bootstrap/js/bootstrap.min.js"></script>
    
  
</body>

</html>
<script type="text/javascript">
    function login_do()
    {
        var data = $('#login').serialize();
        $.post("/index.php/Login/Index/loginDo",data,function(rs)
        {
            if(rs.status==1)
            {
                location.href = "/index.php/Admin/Article/index";
            }
            else
            {
                alert(rs.content);
            }
        });
    }
</script>