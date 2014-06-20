<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--标题栏图标-->
    <link rel="shortcut icon" href="/fanheo/Public/image/ico/Fanheo.png">

    <title><?php echo ($title); ?></title>


    <!-- Bootstrap core CSS -->
    <link href="/fanheo/Public/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/fanheo/Public/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="/fanheo/index.php/Admin/Login/do_login" method="POST" >
        <h4 class="form-signin-heading">登录到 FanHe.饭盒 后台管理系统</h4>
        <input type="text" class="form-control" placeholder="用户名" name="username" required autofocus>
        <input type="password" class="form-control" placeholder="密码" name="password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住我
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>

</html>