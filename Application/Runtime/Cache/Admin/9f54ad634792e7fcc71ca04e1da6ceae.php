<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--标题栏图标-->
    <link rel="shortcut icon" href="/FanHeo/Public/image/ico/Fanheo.png">

    <title><?php echo ($title); ?></title>


    <!-- Bootstrap core CSS -->
    <link href="/FanHeo/Public/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/FanHeo/Public/css/signin.css" rel="stylesheet">

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

      <form class="form-signin" role="form" action="#" method="POST" onsubmit="check()">
        <h4 class="form-signin-heading">登录到 FanHe.饭盒 后台管理系统</h4>
        <input type="text" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
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
 	<script type="text/javascript">
function check(){
	$.post("<<?php echo U('loginok');?>>",{username:$('#username').val(),password:$('#password').val()},function(data){
		if(data != 'ok'){
			alert(登录失败);
		}else{
			location.href = "<?php echo U('Index/index');?>"
		}
	})
	return false;
}
<<<<<<< HEAD
</script>
<style>
*{
	padding:0px;
	margin:0px;
	}

body{
	font-family:Arial, Helvetica, sans-serif;
	background:url(/fanheo/Public/image/admin/login/grass.jpg);
	font-size:13px;
    
	}
img{
	border:0;
	}
.lg{width:468px; height:468px; margin:100px auto; background:url(/fanheo/Public/image/admin/login/login_bg.png) no-repeat;}
.lg_top{ height:200px; width:468px;}
.lg_main{width:400px; height:180px; margin:0 25px;}
.lg_m_1{
	width:290px;
	height:100px;
	padding:60px 55px 20px 55px;
}
.ur{
	height:37px;
	border:0;
	color:#666;
	width:236px;
	margin:4px 28px;
	background:url(/fanheo/Public/image/admin/login/user.png) no-repeat;
	padding-left:10px;
	font-size:16pt;
	font-family:Arial, Helvetica, sans-serif;
}
.pw{
	height:37px;
	border:0;
	color:#666;
	width:236px;
	margin:4px 28px;
	background:url(/fanheo/Public/image/admin/login/password.png) no-repeat;
	padding-left:10px;
	font-size:16pt;
	font-family:Arial, Helvetica, sans-serif;
}
.bn{width:330px; height:72px; background:url(/fanheo/Public/image/admin/login/enter.png) no-repeat; border:0; display:block; font-size:18px; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-weight:bolder;}
.lg_foot{
	height:80px;
	width:330px;
	padding: 6px 68px 0 68px;
}
</style>
</head>

<body class="b">
<div class="lg">

<form action="/fanheo/index.php/Admin/Login/do_login" method="POST" onsubmit="">
    <div class="lg_top"></div>
    <div class="lg_main">
        <div class="lg_m_1">
        
        <input name="username" value="用户名" class="ur" />
        <input name="password" type="password" value="password" class="pw" />
        
        </div>
    </div>
    <div class="lg_foot">
    <input type="submit" value="Login In" class="bn" /></div>
</form>
</div>
=======

	</script>
>>>>>>> guodong

</html>