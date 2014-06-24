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
<form action="<?php echo U('Category/sortCate');?>" method="post"> 
<table class='table'>
	<tr>
		<th>ID</th>
		<th>名称</th>
		<th>级别</th>
		<th>排序</th>
		<th>操作</th>
	</tr>

	<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo ($v["html"]); echo ($v["name"]); ?></td>
		<td><?php echo ($v["level"]); ?></td>
		<td><?php echo ($v["sort"]); ?></td>
		<td>
			<input type="text" name="<?php echo ($v["id"]); ?>" class="form-control  input-sm" value="<?php echo ($v["sort"]); ?>">
		</td>
		<td>
			[<a href="<?php echo U('Category/addCate',array('pid' => $v['id']),'');?>">添加子分类</a>]
			[<a href="">修改</a>]
			[<a href="">删除</a>]
		</td>
	</tr><?php endforeach; endif; ?>
	<tr>
	<tr>
		<td colspan="5" align="center">
			<input type="submit" class="btn btn-default" value="排序"/>
		</td>
	</tr>
</table>
</form>

</div>
</html>