<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
<title><?php echo ($title); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=7, IE=9">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">

<link data-turbolinks-track="true" href="/Fanheo/Public/fanhe.css" media="all" rel="stylesheet">

</head>
<body class="projects projects-index">
<!--[if lte IE 7]>
<p class="notice-failure">你似乎在使用一款 <strong>过时的</strong> 浏览器. 请 <a href="http://browsehappy.com/">更新它</a> 或是使用 <a href="http://www.google.com/chromeframe/?redirect=true">Chrome Frame</a> 来增强你的体验。</p>
<![endif]-->
<div class="header">
<div class="c1">
<a href="127.0.0.1/Fanheo"><img src="/Fanheo/Public/image/fanheo_logo.png" class="logo"></a>
<ul class="c2">
<li><a href="<?php echo U('Index/Index');?>">首页</a></li>
<li><a href="http://127.0.0.1/Faheo/goods">商品</a></li>
<li><a href="http://127.0.0.1/Fanheo">店铺</a></li>
<li><a href="http://www.demohour.com/groups">社区</a></li>
</ul>
<form action="/search" method="get">
<input name="q" class="head-search-l" autocomplete="off" placeholder="你今天想吃啥..">
<input class="sub-button" type="submit">
</form>
<ul class="c6">
<li class="c3 c12"><a href="#">我的饭盒</a>
<ul class="c4">
<li class="c5"></li>
<li><a href="http://www.demohour.com/projects/created">待处理(0)</a></li>
<li><a href="http://www.demohour.com/projects/backed">已完成(0)</a></li>
<li><a href="http://www.demohour.com/projects/liked">收藏的(1)</a></li>
<li class="c41"></li>
</ul>
</li>
<?php if(!isset($_SESSION['uid'])|| !isset($_SESSION['username'])): ?><li><a href="<?php echo U('Login/index');?>">登录</a></li>
              <li><a href="<?php echo U('Register/index');?>">注册</a></li>
              <?php else: ?>
              <li class="c3"><a href="#">消息</a>
				<ul class="c4">
				<li class="c5"></li>
				<li><a href="http://www.demohour.com/comments">我的评论</a></li>
				<li><a href="http://www.demohour.com/tickets">我的客服</a></li>
				<li><a href="http://www.demohour.com/notifications">站内通知</a></li>
				<li class="c41"></li>
				</ul>
				</li>
				<li class="c3 c13"><a href="#"><img src=""></a><a href="#" class="c14">为你奋斗^</a>
				<ul class="c4">
				<li class="c5"></li>
				<li><a href="http://www.demohour.com/orders">我的订单</a></li>
				<li><a href="http://www.demohour.com/settings">账号设置</a></li>
				<li><a href="http://www.demohour.com/1236527">个人主页</a></li>
				<li class="c41"></li>
				</ul>
				</li>
				<li><a href="http://www.demohour.com/logout">登出</a></li>
				</ul><?php endif; ?>

</div>
</div>
<div class="container">
<div class="content">
<div class="c77">

</div>
<br/>
<div class="c1">
<dl>
<dt>属性：</dt>
<dd>
<a class="c3" href="http://www.demohour.com/projects?attribute=online" id="attribute_online">所有产品</a>
<a href="http://www.demohour.com/projects?attribute=preview" id="attribute_preview">新菜上市</a>
<a href="http://www.demohour.com/projects?attribute=preorder" id="attribute_preorder">热卖中</a>
<a href="http://www.demohour.com/projects?attribute=closed" id="attribute_closed">预订结束</a>
</dd>
</dl>
<dl>
<dt>分类：</dt>
<dd>
<a class="c3" href="http://www.demohour.com/projects?attribute=online" id="category_0">所有分类</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;category=927158" id="category_927158">医疗健康 </a>
<a href="http://www.demohour.com/projects?attribute=online&amp;category=927151" id="category_927151">家居生活</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;category=927162" id="category_927162">出行定位</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;category=927218" id="category_927218">影音娱乐</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;category=927219" id="category_927219">科技外设</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;category=927220" id="category_927220">其他</a>
</dd>
</dl>
<dl class="c2">
<dt>排序：</dt>
<dd>
<a class="c3" href="http://www.demohour.com/projects?attribute=online&amp;sort=0" id="sort_0">最新上线</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;sort=1" id="sort_1">最近更新</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;sort=2" id="sort_2">金额最高</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;sort=3" id="sort_3">话题最多</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;sort=4" id="sort_4">预订最多</a>
<a href="http://www.demohour.com/projects?attribute=online&amp;sort=5" id="sort_5">关注最多</a>
</dd>
</dl>
</div>
<div id="project_list" class="c8">
<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/347067" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/2.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/347067" class="project-poster-name">iMeetX——防丢提醒+社交利器 全球最小，功能最强大！</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-18 10:00:00 +0800" data-timestamp-slice="2">3天2小时后</span><span>开始</span>
<a href="http://www.demohour.com/projects/347067">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>3</strong>话题</p>
<p class="c12">
<strong>72<span>人</span></strong>关注
</p>
</dd>
</dl>

<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/346533" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/2.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/346533" class="project-poster-name">Mi可贴--红外遥控器的终结者</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-24 10:00:00 +0800" data-timestamp-slice="2">9天2小时后</span><span>开始</span>
<a href="http://www.demohour.com/projects/346533">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>6</strong>话题</p>
<p class="c12">
<strong>170<span>人</span></strong>关注
</p>
</dd>
</dl>

<dl class="project-poster project-preorder">
<dd class="c3"><a href="http://www.demohour.com/projects/347623" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/1.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/347623" class="project-poster-name">BTK智能蓝牙耳机--全球首款APP智能蓝牙耳机</a></dt>
<dd class="c4">
<span data-timestamp="2014-08-13 10:00:00 +0800" data-timestamp-slice="2">29天2小时后</span><span>结束</span>
<a href="http://www.demohour.com/projects/347623">热卖中</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>15,157</strong>累计金额</p>
<p><strong>8</strong>话题</p>
<p class="c12">
<strong>190<span>人</span></strong>预订
</p>
</dd>
</dl>

<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/345244" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/3.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/345244" class="project-poster-name">呼叫妈咪-智能婴儿监控器</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-16 09:00:00 +0800" data-timestamp-slice="2">1天1小时后</span><span>开始</span>
<a href="http://www.demohour.com/projects/345244">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>3</strong>话题</p>
<p class="c12">
<strong>70<span>人</span></strong>关注
</p>
</dd>
</dl>

<dl class="project-poster project-preorder">
<dd class="c3"><a href="http://www.demohour.com/projects/347378" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/4.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/347378" class="project-poster-name">哆啦体重管理仪</a></dt>
<dd class="c4">
<span data-timestamp="2014-08-03 10:00:00 +0800" data-timestamp-slice="2">19天2小时后</span><span>结束</span>
<a href="http://www.demohour.com/projects/347378">热卖中</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>1,592</strong>累计金额</p>
<p><strong>7</strong>话题</p>
<p class="c12">
<strong>8<span>人</span></strong>预订
</p>
</dd>
</dl>

<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/346853" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/4.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/346853" class="project-poster-name">酷车宝Carcore，驾驶从沟通开始，开启汽车移动互联生活！</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-15 10:00:00 +0800" data-timestamp-slice="2">2小时18分后</span><span>开始</span>
<a href="http://www.demohour.com/projects/346853">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>13</strong>话题</p>
<p class="c12">
<strong>127<span>人</span></strong>关注
</p>
</dd>
</dl>

<dl class="project-poster project-preorder">
<dd class="c3"><a href="http://www.demohour.com/projects/347623" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/1.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/347623" class="project-poster-name">BTK智能蓝牙耳机--全球首款APP智能蓝牙耳机</a></dt>
<dd class="c4">
<span data-timestamp="2014-08-13 10:00:00 +0800" data-timestamp-slice="2">29天2小时后</span><span>结束</span>
<a href="http://www.demohour.com/projects/347623">热卖中</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>15,157</strong>累计金额</p>
<p><strong>8</strong>话题</p>
<p class="c12">
<strong>190<span>人</span></strong>预订
</p>
</dd>
</dl>

<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/345244" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/3.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/345244" class="project-poster-name">呼叫妈咪-智能婴儿监控器</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-16 09:00:00 +0800" data-timestamp-slice="2">1天1小时后</span><span>开始</span>
<a href="http://www.demohour.com/projects/345244">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>3</strong>话题</p>
<p class="c12">
<strong>70<span>人</span></strong>关注
</p>
</dd>
</dl>

<dl class="project-poster project-preorder">
<dd class="c3"><a href="http://www.demohour.com/projects/347378" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/4.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/347378" class="project-poster-name">哆啦体重管理仪</a></dt>
<dd class="c4">
<span data-timestamp="2014-08-03 10:00:00 +0800" data-timestamp-slice="2">19天2小时后</span><span>结束</span>
<a href="http://www.demohour.com/projects/347378">热卖中</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>1,592</strong>累计金额</p>
<p><strong>7</strong>话题</p>
<p class="c12">
<strong>8<span>人</span></strong>预订
</p>
</dd>
</dl>

<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/346853" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/4.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/346853" class="project-poster-name">酷车宝Carcore，驾驶从沟通开始，开启汽车移动互联生活！</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-15 10:00:00 +0800" data-timestamp-slice="2">2小时18分后</span><span>开始</span>
<a href="http://www.demohour.com/projects/346853">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>13</strong>话题</p>
<p class="c12">
<strong>127<span>人</span></strong>关注
</p>
</dd>
</dl>
<dl class="project-poster project-preorder">
<dd class="c3"><a href="http://www.demohour.com/projects/347623" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/1.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/347623" class="project-poster-name">BTK智能蓝牙耳机--全球首款APP智能蓝牙耳机</a></dt>
<dd class="c4">
<span data-timestamp="2014-08-13 10:00:00 +0800" data-timestamp-slice="2">29天2小时后</span><span>结束</span>
<a href="http://www.demohour.com/projects/347623">热卖中</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>15,157</strong>累计金额</p>
<p><strong>8</strong>话题</p>
<p class="c12">
<strong>190<span>人</span></strong>预订
</p>
</dd>
</dl>

<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/345244" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/3.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/345244" class="project-poster-name">呼叫妈咪-智能婴儿监控器</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-16 09:00:00 +0800" data-timestamp-slice="2">1天1小时后</span><span>开始</span>
<a href="http://www.demohour.com/projects/345244">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>3</strong>话题</p>
<p class="c12">
<strong>70<span>人</span></strong>关注
</p>
</dd>
</dl>

<dl class="project-poster project-preorder">
<dd class="c3"><a href="http://www.demohour.com/projects/347378" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/4.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/347378" class="project-poster-name">哆啦体重管理仪</a></dt>
<dd class="c4">
<span data-timestamp="2014-08-03 10:00:00 +0800" data-timestamp-slice="2">19天2小时后</span><span>结束</span>
<a href="http://www.demohour.com/projects/347378">热卖中</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>1,592</strong>累计金额</p>
<p><strong>7</strong>话题</p>
<p class="c12">
<strong>8<span>人</span></strong>预订
</p>
</dd>
</dl>

<dl class="project-poster project-preview">
<dd class="c3"><a href="http://www.demohour.com/projects/346853" class="project-poster-image"><img src="/Fanheo/Public/image/index/food/4.jpg"></a></dd>
<dt><a href="http://www.demohour.com/projects/346853" class="project-poster-name">酷车宝Carcore，驾驶从沟通开始，开启汽车移动互联生活！</a></dt>
<dd class="c4">
<span data-timestamp="2014-07-15 10:00:00 +0800" data-timestamp-slice="2">2小时18分后</span><span>开始</span>
<a href="http://www.demohour.com/projects/346853">新菜上市</a>
</dd>
<dd class="c5">
</dd>
<dd class="c6">
<p class="c13"><strong><b>¥</b>0</strong>累计金额</p>
<p><strong>13</strong>话题</p>
<p class="c12">
<strong>127<span>人</span></strong>关注
</p>
</dd>
</dl>
</div>

<div id="project_list_more" class="c9"><a data-remote="true" href="http://www.demohour.com/projects?attribute=online&amp;page=4&amp;total_results=1000" rel="nofollow">查看更多</a></div>
</div>



<div id="popup_notify" class="popup-notify hide">
<a href="http://www.demohour.com/notify?type=all" data-remote="true" class="close2">关闭</a>
<ul></ul>
</div>



</div>

<div class="footer footer2">
	<div class="c1">

		<ul class="c3">
			<li><a href="<?php echo U('Index/Enter');?>" class="c31">我要入驻FanHeo</a></li>
			<li><a href="<?php echo U('Index/Pay');?>">支付方式</a></li>
			<li><a href="<?php echo U('Index/Faq');?>">常见问题</a></li>
			<li><a href="<?php echo U('Index/Join');?>">服务条款</a></li>
			
			<li><a href="<?php echo U('Index/about');?>">关于我们</a></li>
			<li><a href="<?php echo U('Index/Join');?>">加入我们</a></li>
			<li><a href="<?php echo U('Index/Relation');?>">联系我们</a></li>
			<li><a href="#">官方微博</a></li>
			<li><a href="#">官方微信</a></li>
		</ul>

		<p class="c6">
		© 2014 山西FanHeo在线餐饮有限公司　Fanheo.com 版权所有<br>
		电信与信息服务业务经营许可证120183号　京ICP备XXXX号　京公网安备XXXX
		</p>
	
	</div>
</div>


</body></html>