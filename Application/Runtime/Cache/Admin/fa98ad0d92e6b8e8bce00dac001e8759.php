<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?>配置权限</title>
<script type="text/javascript">
	$(function(){
		$('input[level=1]').click(function () {
			var inputs = $(this).parents('.app').find('input');
			$(this).attr('checked') ? inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
		$('input[level=2]').click(function(){
			var inputs = $(this).parents('dl').find('input');
			$(this).attr('checked') ? inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
	});
</script>
</head>
<body>
	<div id='wrap'>
	<form action="<?php echo U('Admin/Rbac/setAccess');?>" method='post'>
		<a href="<?php echo U('Admin/Rbac/role');?>">返回</a>
			<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
					<p>
						<strong><?php echo ($app["title"]); ?></strong>
						<input type="checkbox" name='access[]' value='<?php echo ($app["id"]); ?>_1' level='1' <?php if($app["access"]): ?>checked='checked'<?php endif; ?>/>
							
						</p>
						<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
						<dt>
						<strong><?php echo ($action["title"]); ?></strong>
				<input type="checkbox" name='access[]' value='<?php echo ($action["id"]); ?>_2' level='2' <?php if($action["access"]): ?>checked='checked'<?php endif; ?>/>
						</dt>
						<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
							<span><?php echo ($method["title"]); ?></span>
							<input type="checkbox" name='access[]' value='<?php echo ($method["id"]); ?>_3' level='3' <?php if($method["access"]): ?>checked='checked'<?php endif; ?>/>
							</dd><?php endforeach; endif; endforeach; endif; ?>
						</dl>


						</div><?php endforeach; endif; ?>

						</div>
						<input type="hidden" name='rid' value='<?php echo ($rid); ?>'>
						<input type="submit" value='保存修改'/>
						</form>
</body>

</html>