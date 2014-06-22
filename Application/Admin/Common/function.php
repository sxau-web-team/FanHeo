<?php
/**
 *递归重组节点信息为多维数组	
 */
function node_merge($node,$access = NULL, $pid = 0){

	$arr = array();

	foreach ($node as $v ) {
		if (is_array($access)) {
			$v['access'] = in_array($v['id'], $access) ? 1:0;
			# code...
		}
		if($v['pid'] == $pid){
			$v['child'] = node_merge($node,$access,$v['id']);
			$arr[] = $v;
		}
		# code...
	}
	return $arr;
}
?>