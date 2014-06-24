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
    <script type="text/javascript">
    $(function(){
      $('.add-role').click(function(){
        var obj = $(this).parents('tr').clone();
        obj.find('.add-role').remove();
        $('#last').before(obj);
      });
    });
    </script>
    <style type="text/css">
        .add-role{
          display: inline-block;
          cursor: pointer;
        }
      </style>
  </head>

  <body>
  <form action="<?php echo U('Admin/Rbac/addUserhandler');?>" method="post">
  <table class="table">
    <tr>
    <th colspan="2">添加用户</th>
    </tr>
    <tr>
      <td align="right">用户帐号：</td>
      <td>
        <input type="text" name="username"/>
      </td>
    </tr>
    <tr>
      <td align="right">密码：</td>
      <td>
        <input type="password" name="password"/>
      </td>
    </tr>
    <tr>
      <td align='right'>所属角色</td>
      <td>
        <select name="role_id[]" >
        <option value="">请选择角色</option>
          <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>

        </select>
        <span class='add-role'>添加一个角色</span>
      </td>
    </tr>
    <tr id='last'>
      <td colspan="2" align='center'>
        <input type="submit" value='保存添加'/>

      </td>
    </tr>

  </table>
  </form>
  </body>
  </html>