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

    <title><?php echo ($title); ?>用户列表</title>


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
    <table class="table">
    <tr>
      <th>
        id
      </th>
      <th>
        用户名称
      </th>
      <th>
        上一次登录时间
      </th>
      <th>
        上一次登录ip
      </th>
      <th>
        用户所属组别
      </th>
      <th>
        操作
      </th>
      <?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
          <td><?php echo ($v["uid"]); ?></td>
          <td><?php echo ($v["username"]); ?></td>
          <td><?php echo (date('y-m-d H:i',$v["logintime"])); ?></td>
          <td><?php echo ($v["loginip"]); ?></td>
          <td>
          <?php if($v["username"] == C("RBAC_SUPERADMIN")): ?>超级管理员
          <?php else: ?>
            <ul>
              <?php if(is_array($v["role"])): foreach($v["role"] as $key=>$value): ?><li><?php echo ($value["name"]); ?>(<?php echo ($value["remark"]); ?>)</li><?php endforeach; endif; ?>
            </ul><?php endif; ?>
          </td>
          <td>
            <a href="">锁定</a>
          </td>
        </tr><?php endforeach; endif; ?>
    </tr> </table>
  </body>
  </html>