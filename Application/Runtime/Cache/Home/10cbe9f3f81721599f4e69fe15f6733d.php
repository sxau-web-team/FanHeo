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
          <a class="navbar-brand" href="<?php echo U('Index/Index');?>">FanHe.饭盒</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
         <form class="navbar-form navbar-left" role="search">
            <div class="form-group form-inline">
              <input class="form-control" placeholder="你今天想吃啥.." type="text" required autofocus>
            </div>
            <button type="submit" class="btn btn-warning">搜外卖</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" title="" data-original-title=""  data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<img src='/FanHeo/Public/image/index/food/1.jpg' style='width: 80px; height: 70px;'  >
              <strong>我的饭盒</strong>
			  
              <p> Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p class='text-right'><button type='button' href='#' class='btn btn-danger btn-sm' >结算</button></p>"><span class="glyphicon glyphicon-th-large"></span>  我的饭盒<span class="badge">２</span></a></li>
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
        <form class="form-horizontal" role="form" action="<?php echo U("Login/Login");?>" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="username" placeholder="用户名/手机号">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="password" placeholder="密码">
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

      <div class="row row-offcanvas row-offcanvas-right">

          <div class=" col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <nav class="navbar navbar-default" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#UCenter">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
              </div>
              <div class="panel-body collapse navbar-collapse " id="UCenter">
                  <ul class="nav nav-pills nav-stacked " style="max-width: 220px;">
                    <li><a href="<?php echo U('UCenter/fanhetalk');?>">饭盒吐槽</a></li>
                    <li><a href="<?php echo U('UCenter/talks');?>">盒友动态</a></li>
                    <li class="active">
                    <a href="<?php echo U('UCenter/view_fanhe');?>">
                    <span class="badge pull-right">3</span>
                    我的饭盒
                    </a>
                    </li>
                    <li><a href="#">我的订单</a></li>
                    <li><a href="#">饭盒故事</a></li>
                    <li><a href="<?php echo U('UCenter/show_userinfomation');?>">资料设置</a></li>
                    <li><a href="#">安全设置</a></li>
                    <li><a href="#">
                    <span class="badge pull-right">3</span>
                    消息中心
                    </a>
                    </li>
                  </ul>
              </div>
              <br/>
            </nav>
          </div><!--/span-->
        
        <div class="col-xs-12 col-sm-9">
          
<div class="panel panel-default">       
  <div class="panel-heading">吐吐糟吧</div>
    <div class="panel-body">
      <div class="media">
          <a class="pull-left" href="#">
          <img class="media-object img-circle" src="/FanHeo/Public/image/user/head_icon.png" width="100px" height="100px">
          </a>
        <div class="media-body">
          <form class="" action="<?php echo U('UCenter/send_talk');?>" method="post" role="form" >
            <textarea class="form-control" id="content" name="content" rows="3" placeholder="<?php echo ($m["words"]); ?>想说点儿啥.." required autofocus></textarea>
            <br/>
        
            <button type="submit" data-loading-text="发送中..."  class=" pull-right btn btn-warning ">  吐 糟  </button>
          </form> 
        </div>
      </div>
  </div>
</div>


<button type="submit" data-loading-text="发送中..." onclick="post_talk()" class=" pull-right btn btn-warning ">  吐 糟  </button>
<div class="talk panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  
    <!-- List group -->
    <ul class="talklist list-group">
    <?php if(is_array($talk)): foreach($talk as $key=>$v): ?><li class="list-group-item"><div class="media">
          <a class="pull-left" href="#">
          <img class="media-object img-circle" src="/FanHeo/Public/image/user/head_icon.png" width="100px" height="100px">
          </a>
        <div class="media-body"><div class="pull-left"><?php echo ($user=session('username')); ?></div><div class="pull-right"><?php echo ($v["time"]); ?></div>
          <p><br/><br/><?php echo ($v["content"]); ?><br/><br/></p>
        </div>
      </div></li><?php endforeach; endif; ?>
    </ul>
  </div>
  
  <script type="text/javascript" src="http://t.beauty-soft.net/js/jquery.js"></script>
<script>
  
  /*发表动态*/

  function post_talk () {

var aj = $.ajax( {    
    url:'UCenter/send_talk',// 跳转到 action    
    data:{    
             selRollBack : selRollBack,    
             selOperatorsCode : selOperatorsCode,    
             PROVINCECODE : PROVINCECODE,    
             pass2 : pass2    
    },    
    type:'post',    
    cache:false,    
    dataType:'json',    
    success:function(data) {    
        if(data.msg =="true" ){    
            // view("修改成功！");    
            alert("修改成功！");    
            window.location.reload();    
        }else{    
            view(data.msg);    
        }    
     },    
     error : function() {    
          // view("异常！");    
          alert("异常！");    
     }    
});  

   
      
  }
</script>
<script>
  
  function demo(){

    $.ajax({
      url:'http://127.0.0.1/Fnheo/index.php/Home/UCenter/send_talk/id/1',
      type:"GET",
      dataType:"json",
      cache:false;
      success:function(data){
        if(data.status){
          alert("hello");
        }else{
          alert(sorry);
        }
      }
    });
  }
</script>


      </div><!--/row-->
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
    <script src="/FanHeo/Public/js/jquery.js"></script>
    <script src="/FanHeo/Public/js/bootstrap.js"></script>
    <script src="/FanHeo/Public/js/application.js"></script>
  </body>
</html>