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
          <a class="navbar-brand" href="<?php echo U('Index/Index');?>">FanHe.饭盒.后台系统</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
         
          <ul class="nav navbar-nav navbar-right">
              
              <li><a href="<?php echo U('UCenter/index');?>">个人中心</a></li>
              <li><a href="<?php echo U('Index/logout');?>">退出</a></li>
              </if>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

     <!-- 主页面 -->
    <div class="container">
      <div class="bread" >
      <!--面包屑导航条-->
            <ol class="breadcrumb">
                <li><a href="<?php echo U('Index/Index');?>">首页</a></li>
                 <li class="active"><?php echo ($stitle); ?></li>
            </ol>
      </div>  
<form method="post" action="<?php echo U('Category/runAddCate','','');?>">
<table class='table'>
	<tr>
		<th colspan="2">添加栏目分类</th>
	</tr>
	<tr>
		<td align="right">分类栏目名称:</td>
		<td>
			<div class="col-xs-3">
			<input type="text" class="form-control" name='name'/>
			</div>
		</td>
	</tr>
	<tr>
		<td align="right">排序:</td>
		<td>
			<div class="col-xs-3">
			<input type='text' name='sort' class="form-control" valud="100"/>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<div class="col-xs-3">
			<input type="hidden" name='pid' value='<?php echo ($pid); ?>'/>
			</div>
			<div class="col-xs-3">
			<input type="submit" class="btn btn-default" value='保存添加'/>
			</div>
		</td>
	</tr>
</table>
</form>
</div>
</html>