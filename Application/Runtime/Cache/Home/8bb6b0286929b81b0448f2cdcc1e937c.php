<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo ($title); ?></title>
    <link href="/Fanheo/Public/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
  <!--顶部导航 -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo U('Index/Index');?>">FanHe.饭盒</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
         <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input class="form-control" placeholder="你今天想吃啥.." type="text" required autofocus>
            </div>
            <button type="submit" class="btn btn-warning">搜外卖</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" title="" data-original-title=""  data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<img src='/Fanheo/Public/image/index/food/1.jpg' style='width: 80px; height: 70px;'  >
              <strong>我的饭盒</strong>
			  
              <p> Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p class='text-right'><button type='button' href='#' class='btn btn-danger btn-sm' >结算</button></p>"><span class="glyphicon glyphicon-th-large"></span>  饭盒<span class="badge">２</span></a></li>
              <?php if(!isset($_SESSION['uid'])|| !isset($_SESSION['username'])): ?><li><a href="#" data-toggle="modal" data-target="#myModal" >登录</a></li>
              <li><a href="<?php echo U('Register/index');?>">注册</a></li>
              <?php else: ?>
              <li><a href="<?php echo U('UCenter/index');?>">个人中心</a></li>
              <li><a href="<?php echo U('Index/logout');?>">退出</a></li><?php endif; ?>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<br/>
<br/>
<br/>
<!--模态登录框 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">登录到FanHe-饭盒</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="<?php echo U("Login/Login/",'','');?>" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="username" placeholder="用户名/手机号" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="password" placeholder="密码" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">验证码:</label>
            <div class="col-sm-5">
              <input type="code" id="code" class="form-control" name="code" maxlength="6" placeholder="输入验证码" required  onchange="checkPasswords()">
              <img src="<?php echo U('Login/verify');?>" id="code"/><a href="javascript:change_code()">换一个</a>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> 下次自动登录
                </label>
              </div>
            </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-8">
              <input class="btn btn-warning btn-block" type="submit" value="登录">
               
              </div>
            </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <a href="<?php echo U('Register/index');?>" class="btn btn-warning " role="button">注册</a>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<br/>
    <!-- 主页面 -->
    <div class="container">
      <div class="bread" >
      <!--面包屑导航条-->
            <ol class="breadcrumb">
                <li><a href="<?php echo U('Index/Index');?>">首页</a></li>
                 <li class="active"><?php echo ($stitle); ?></li>
            </ol>
      </div>  


<div class="panel panel-default">
  <div class="panel-heading">加入到 FanHeo.饭盒 </div>
  <div class="panel-body">
    <!--注册表单-->

    <form class="form-horizontal" action="<?php echo U('Register/Register');?>" method="post" role="form" accept-charset="utf8">
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">用户名:</label>
            <div class="col-sm-4">
              <input type="user" class="form-control" name="username" maxlength="16" placeholder="2~16个字符" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">真实姓名:</label>
            <div class="col-sm-4">
              <input type="user" class="form-control" name="realname" maxlength="8" placeholder="2~8个字符" required autofocus>
            </div>
          </div>
          
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">性别:</label>
            <div class="col-sm-4">
            <label>
              <input type="radio" name="sex"  value="1" checked>
    			男
  			</label>
  			<label>
              <input type="radio" name="sex" value="2" >
    			女
  			</label>
            </div>
          </div>
          
    
          <div class="form-group">
            <label for="" class="col-sm-2 control-label">邮箱:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" name="email" placeholder="常用邮箱账号" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-2 control-label" >手机号:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" name="phone" maxlength="11" placeholder="请输入11位手机号" required autofocus>
            </div>
          </div>
         <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码:</label>
            <div class="col-sm-4">
              <input type="password" id="pwd" class="form-control" name="password" maxlength="24" placeholder="4~24个字符,不要太简单了哦" title="hello" required autofocus >
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">确认密码:</label>
            <div class="col-sm-4">
              <input type="password" id="pwd1" class="form-control" name="password2" maxlength="24" placeholder="确认密码" required  onchange="checkPasswords()">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">验证码:</label>
            <div class="col-xs-2">
              <input type="code" id="code" class="form-control" name="code" maxlength="6" placeholder="输入验证码" required  onchange="checkPasswords()">
              <img src="<?php echo U('Login/verify');?>" id="code"/><a href="javascript:void(change_code(this));">换一个</a>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="" required autofocus> 我同意FanHeo.饭盒有关条款
                </label>
              </div>
            </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-warning btn-block">加入到 FanHeo</button>
              </div>
            </div>
          
        </form>

  </div>
  </div>
<!--验证密码是否一致-->
<script>  
        function checkPasswords() {  
            var passl = document.getElementById("pwd");  
            var pass2 = document.getElementById("pwd1");  
            if (passl.value != pass2.value)  
                pass2.setCustomValidity("两次密码必须输入一致！");  
            else  
                pass2.setCustomValidity('');  
        }  
  
        function check() {  
            document.getElementById('ok').disabled = 'disabled';  
        }  
    </script>  

  </div>

<!--页脚部分 -->

<hr>
    <footer>
      	<div class="container text-center">
      		<p><a href="#">  联系我们  </a>|<a href="#">  规章制度  </a>|<a href="#">  技术支持  </a>|<a href="#">  客户端  </a></p>
        	<p　class="text-center"> &copy; FanHeo.com 2014</p>
      	</div>	
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="/Fanheo/Public/js/jquery.js"></script>
    <script src="/Fanheo/Public/js/bootstrap.js"></script>
    <script src="/Fanheo/Public/js/application.js"></script>
  </body>
</html>