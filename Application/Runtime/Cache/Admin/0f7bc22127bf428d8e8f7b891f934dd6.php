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
  
	<form action="<?php echo U('Admin/Rbac/addNodeHandler');?>" method='post' charset='utf-8'>
	<table class="table">
		<tr>
			<th colspan="2">添加节点</th>
		</tr>
		<tr>
			<td align="right"><?php echo ($type); ?>名称：</td>
			<td>
			<input type="text" name='name'/>
			</td>
		</tr>
		<tr>
			<td align="right"><?php echo ($type); ?>描述：</td>
			<td>
			<input type="text" name="title"/>
			</td>
		</tr>
		<tr>
		<td	align='right'>是否开启：</td>
		<td>
			<input type="radio" name='status' value='1' checked='checked'/>
			&nbsp;开启&nbsp;<input type="radio" name='status' value='0' />&nbsp;关闭</td>
		</tr>
		<tr>
			<td align='right'>排序</td>
			<td>
				<input type="text" name='sort' value='1'/>
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name='pid' value='<?php echo ($pid); ?>'>
				<input type="hidden" name='level' value='<?php echo ($level); ?>'>
				<input type="submit" value='保存'/>
				</td>
		</tr>
	</table>
  </form>
  
  
  
  

     <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>

</html>