<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
</head>

<body>

<?php echo ($loginstatus); ?>
<a href="<?php echo U('Admin/Rbac/addRole');?>">添加角色</a>
<a href="<?php echo U('Admin/Rbac/role');?>">角色列表</a>
<a href="<?php echo U('Admin/Rbac/addNode');?>">添加节点</a>
<a href="<?php echo U('Admin/Rbac/node');?>">节点列表</a>
<button type="button" onclick="window.location='/fanheo/index.php/Admin/Index/../Login/loginout'">Click Me!</button>
</body>
</html>