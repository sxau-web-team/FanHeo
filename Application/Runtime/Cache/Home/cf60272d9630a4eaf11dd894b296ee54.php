<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FanHe.饭盒-在线订餐－叫外卖,找饭盒</title>
    <link href="/FanHeo/Public/css/bootstrap.css" rel="stylesheet">
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
          <a class="navbar-brand" href="#">FanHe.饭盒</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
         <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input class="form-control" placeholder="你今天想吃啥.." type="text">
            </div>
            <button type="submit" class="btn btn-default">搜外卖</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" title="" data-original-title=""  data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<img src='/FanHeo/Public/image/index/food/1.jpg' style='width: 80px; height: 70px;'  >
              <strong>我的饭盒</strong>
        
              <p> Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p class='text-right'><button type='button' href='#' class='btn btn-danger btn-sm' >结算</button></p>"><span class="glyphicon glyphicon-th-large"></span>  饭盒<span class="badge">２</span></a></li>
      
              <li><a href="#" data-toggle="modal" data-target="#myModal" >登录</a></li>
              <li><a href="#">注册</a></li>
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
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">UserName:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-default">Sign in</button>
              </div>
            </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<br/>
    <!-- 主页面 -->
    <div class="container">
      <div class="">
      <!--面包屑导航条-->
            <ol class="breadcrumb">
                <li><a href="#">首页</a></li>
                 
                 <li class="active">注册账号</li>
            </ol>
      </div>  



<div class="panel panel-default">
  <div class="panel-heading"><?php echo $status;?>注册成功！</div>
  <div class="panel-body">
    <!--注册状态-->

  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>注册成功！</strong> <br /><br />欢迎你加入到Faneo.饭盒<br/><br/>
    你的资料还不完整，为了你的方便，快去<a href="#" class="alert-link">完善一下</a>吧！
    <br/><br/>前往<a href="<?php echo U("/Home",'','','127.0.0.1');?>" class="alert-link">FanHeo.饭盒</a>选餐^_^.
  </div>


  </div>
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
    
    
    <script src="/FanHeo/Public/js/jquery.js"></script>
    <script src="/FanHeo/Public/js/bootstrap.js"></script>
    <script src="/FanHeo/Public/js/application.js"></script>
  </body>
</html>