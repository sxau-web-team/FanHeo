<?php
namespace Org\Util;
Class Category {

	/**
	 * 无限极分类处理,组合一维数组
	 */
	Static Public function unlimitedForLevel ($cate,$html= '--',$pid=0,$level=0) {
		$arr =array();
		foreach ($cate as $v) {
			if ($v['pid']==$pid) {
				$v['level']=$level + 1;
				$v['html'] = str_repeat($html, $level);
				$arr[] = $v;
				$arr = array_merge($arr,self::unlimitedForLevel($cate,$html,$v['id'],$level + 1));
			}

		}
		return $arr;
	}
	/**
	 * 多维数组处理
	 */
	Static public function unlimitedForLayer ($cate,$name = 'child',$pid =0) {
		$arr = array();
		foreach ($cate as $v) {
			
			if ($v['pid'] == $pid) {
				$v[$name] = self::unlimitedForLayer($cate,$name,$v['id']);
				$arr[] = $v;
			}
		}
		return $arr;
	}
	/**
	 * 传递一个子分类ID返回所有父级分类
	 */
	Static public function getParents ($cate,$id) {
		$arr = array();
		foreach ($cate as $v) {
			

			if ($v['id'] == $id) {
				$arr[] = $v;
				$arr = array_merge($arr,self::getParents($cate,$v['pid']));
			}
		}
		return $arr;
	}

	/**
	 * 传递一个父级分类ID返回所有子分类ID
	 */
	Static Public function getChildId ($cate,$pid) {
		$arr = array();
		foreach ($cate as $v ){
			
			if ($v['pid'] == $pid) {
				
				$arr[] = $v['id'];
				$arr = array_merge($arr,self::getChildId($cate,$v['id']));
			}
		}
		return $arr;
	}
	/**
	 * 传递一个父级分类ID返回所有子分类
	 */
	Static Public function getChilds ($cate,$pid){
		$arr = array();
		foreach ($cate as $v) {
			# code...
			if ($v['pid']==$pid) {
				# code...
				$arr[] = $v;
				$arr = array_merge($arr,self::getChilds($cate,$v['id']));
			}
		}
		return $arr;
	}

}

?>