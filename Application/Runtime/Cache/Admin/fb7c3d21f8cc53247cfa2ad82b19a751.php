<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!-- 

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1

Version: 1.3

Author: KeenThemes

Website: http://www.keenthemes.com/preview/?theme=metronic

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title><?php echo ($title); ?></title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/FanHeo/Public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/FanHeo/Public/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="/FanHeo/Public/media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/daterangepicker.css" rel="stylesheet" type="text/css" />

	<link href="/FanHeo/Public/media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

	<link href="/FanHeo/Public/media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

	<link href="/FanHeo/Public/media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

	<link rel="stylesheet" type="text/css" href="/FanHeo/Public/css/table.css">

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/FanHeo/Public/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html">

				<img src="/FanHeo/Public/media/image/logo.png" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/FanHeo/Public/media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->   

					<li class="dropdown" id="header_notification_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-warning-sign"></i>

						<span class="badge">6</span>

						</a>

						<ul class="dropdown-menu extended notification">

							<li>

								<p>You have 14 new notifications</p>

							</li>

							<li>

								<a href="#">

								<span class="label label-success"><i class="icon-plus"></i></span>

								New user registered. 

								<span class="time">Just now</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Server #12 overloaded. 

								<span class="time">15 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-warning"><i class="icon-bell"></i></span>

								Server #2 not respoding.

								<span class="time">22 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-info"><i class="icon-bullhorn"></i></span>

								Application error.

								<span class="time">40 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Database overloaded 68%. 

								<span class="time">2 hrs</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								2 user IP blocked.

								<span class="time">5 hrs</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>You have 12 new messages</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="media/image/avatar2.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Lisa Wong</span>

								<span class="time">Just Now</span>

								</span>

								<span class="message">

								Vivamus sed auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="./media/image/avatar3.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Richard Doe</span>

								<span class="time">16 mins</span>

								</span>

								<span class="message">

								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="./media/image/avatar1.jpg" alt="" /></span>

								<span class="subject">

								<span class="from"><?php echo ($loginname); ?></span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>You have 12 pending tasks</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">New release v1.2</span>

								<span class="percent">30%</span>

								</span>

								<span class="progress progress-success ">

								<span style="width: 30%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Application deployment</span>

								<span class="percent">65%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 65%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile app release</span>

								<span class="percent">98%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 98%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Database migration</span>

								<span class="percent">10%</span>

								</span>

								<span class="progress progress-warning progress-striped">

								<span style="width: 10%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Web server upgrade</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-info">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile development</span>

								<span class="percent">85%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 85%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="/FanHeo/Public/media/image/avatar1_small.jpg" />

						<span class="username"><?php echo ($loginname); ?></span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

							<li class="divider"></li>

							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>

							<li><a href="/FanHeo/index.php/Admin/Backupsql/../Login/loginout"><i class="icon-key"></i> Log Out</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

		<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li class="" id="index">

					<a href="<?php echo U('Admin/index/index');?>">

					<i class="icon-home"></i> 

					<span class="title">仪表盘</span>

					<span class="selected"></span>

					</a>

				</li>

				<li class="" id="good">

					<a href="javascript:;">

					<i class="icon-briefcase"></i> 

					<span class="title">商品管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li id="goodlist">

							<a href="<?php echo U('Admin/Good/index');?>">

							商品列表</a>

						</li>

						<li id="addgood">

							<a href="<?php echo U('Admin/Good/addGood');?>">

							添加商品</a>

						</li>

						<li >

							<a href="layout_horizontal_menu2.html">

							库存管理</a>

						</li>

						<li >

							<a href="layout_promo.html">

							套餐管理</a>

						</li>

						<li id="categorylist">

							<a href="<?php echo U('Admin/Category/index');?>">

							商品分类列表</a>

						</li>

						<li id="addcategory">

							<a href="<?php echo U('Admin/Category/addcate');?>">

							添加商品分类</a>

						</li>

						<li >

							<a href="layout_sidebar_closed.html">

							品牌管理</a>

						</li>

						<li >

							<a href="layout_blank_page.html">

							添加品牌</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-file-text"></i> 

					<span class="title">订单管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="ui_general.html">

							已付款订单</a>

						</li>

						<li >

							<a href="ui_buttons.html">

							已发货订单</a>

						</li>

						<li >

							<a href="ui_modals.html">

							未发货订单</a>

						</li>

						<li >

							<a href="ui_tabs_accordions.html">

							未付款订单</a>

						</li>

						<li >

							<a href="ui_jqueryui.html">

							退货订单</a>

						</li>

						<li >

							<a href="ui_sliders.html">

							订单统计</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-table"></i> 

					<span class="title">Form Stuff</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="form_layout.html">

							Form Layouts</a>

						</li>

						<li >

							<a href="form_samples.html">

							Advance Form Samples</a>

						</li>

						<li >

							<a href="form_component.html">

							Form Components</a>

						</li>

						<li >

							<a href="form_wizard.html">

							Form Wizard</a>

						</li>

						<li >

							<a href="form_validation.html">

							Form Validation</a>

						</li>

						<li >

							<a href="form_fileupload.html">

							Multiple File Upload</a>

						</li>

						<li >

							<a href="form_dropzone.html">

							Dropzone File Upload</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-briefcase"></i> 

					<span class="title">Pages</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="page_timeline.html">

							<i class="icon-time"></i>

							Timeline</a>

						</li>

						<li >

							<a href="page_coming_soon.html">

							<i class="icon-cogs"></i>

							Coming Soon</a>

						</li>

						<li >

							<a href="page_blog.html">

							<i class="icon-comments"></i>

							Blog</a>

						</li>

						<li >

							<a href="page_blog_item.html">

							<i class="icon-font"></i>

							Blog Post</a>

						</li>

						<li >

							<a href="page_news.html">

							<i class="icon-coffee"></i>

							News</a>

						</li>

						<li >

							<a href="page_news_item.html">

							<i class="icon-bell"></i>

							News View</a>

						</li>

						<li >

							<a href="page_about.html">

							<i class="icon-group"></i>

							About Us</a>

						</li>

						<li >

							<a href="page_contact.html">

							<i class="icon-envelope-alt"></i>

							Contact Us</a>

						</li>

						<li >

							<a href="page_calendar.html">

							<i class="icon-calendar"></i>

							Calendar</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-gift"></i> 

					<span class="title">Extra</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="extra_profile.html">

							User Profile</a>

						</li>

						<li >

							<a href="extra_lock.html">

							Lock Screen</a>

						</li>

						<li >

							<a href="extra_faq.html">

							FAQ</a>

						</li>

						<li >

							<a href="inbox.html">

							Inbox</a>

						</li>

						<li >

							<a href="extra_search.html">

							Search Results</a>

						</li>

						<li >

							<a href="extra_invoice.html">

							Invoice</a>

						</li>

						<li >

							<a href="extra_pricing_table.html">

							Pricing Tables</a>

						</li>

						<li >

							<a href="extra_image_manager.html">

							Image Manager</a>

						</li>

						<li >

							<a href="extra_404_option1.html">

							404 Page Option 1</a>

						</li>

						<li >

							<a href="extra_404_option2.html">

							404 Page Option 2</a>

						</li>

						<li >

							<a href="extra_404_option3.html">

							404 Page Option 3</a>

						</li>

						<li >

							<a href="extra_500_option1.html">

							500 Page Option 1</a>

						</li>

						<li >

							<a href="extra_500_option2.html">

							500 Page Option 2</a>

						</li>

					</ul>

				</li>

				<li>

					<a class="active" href="javascript:;">

					<i class="icon-sitemap"></i> 

					<span class="title">3 Level Menu</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="javascript:;">

							Item 1

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 2</a></li>

								<li><a href="#">Sample Link 3</a></li>

							</ul>

						</li>

						<li>

							<a href="javascript:;">

							Item 1

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

								<li><a href="#">Sample Link 1</a></li>

							</ul>

						</li>

						<li>

							<a href="#">

							Item 3

							</a>

						</li>

					</ul>

				</li>

				<li>

					<a href="javascript:;">

					<i class="icon-folder-open"></i> 

					<span class="title">4 Level Menu</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li>

							<a href="javascript:;">

							<i class="icon-cogs"></i> 

							Item 1

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li>

									<a href="javascript:;">

									<i class="icon-user"></i>

									Sample Link 1

									<span class="arrow"></span>

									</a>

									<ul class="sub-menu">

										<li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>

										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>

										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>

									</ul>

								</li>

								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>

								<li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>

							</ul>

						</li>

						<li>

							<a href="javascript:;">

							<i class="icon-globe"></i> 

							Item 2

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>

								<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>

							</ul>

						</li>

						<li>

							<a href="#">

							<i class="icon-folder-open"></i>

							Item 3

							</a>

						</li>

					</ul>

				</li>

				<li class="" id="user">

					<a href="javascript:;">

					<i class="icon-user"></i> 

					<span class="title">用户管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li id='userslist'>

							<a href="<?php echo U('Admin/User/index');?>">

							用户列表</a>

						</li>

						<li id='userlist'>

							<a href="<?php echo U('Admin/Rbac/index');?>">

							管理组用户列表</a>

						</li>
						
						<li id='addUser'>

							<a href="<?php echo U('Admin/Rbac/addUser');?>">

							添加管理组用户</a>

						</li>
						
						<li id='addRole'>

							<a href="<?php echo U('Admin/Rbac/addRole');?>">

							添加角色</a>

						</li>
						
						<li id='role'>

							<a href="<?php echo U('Admin/Rbac/role');?>">

							角色列表</a>

						</li>

						<li id='node'>

							<a href="<?php echo U('Admin/Rbac/role');?>">

							用户权限管理</a>

						</li>

						<li id='addnode'>

							<a href="<?php echo U('Admin/Rbac/addNode');?>">

							添加节点</a>

						</li>

					</ul>

				</li>

				<li class="" id="sqlmanage">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">数据库管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li id="backuplist">

							<a href="<?php echo U('Admin/Backupsql/index');?>">

							已备份列表</a>

						</li>

						<li id="tablist">

							<a href="<?php echo U('Admin/Backupsql/tablist');?>">

							数据库表段列表</a>

						</li>

						<li >

							<a href="table_managed.html">

							备份数据库</a>

						</li>

						<li >

							<a href="table_editable.html">

							还原数据库</a>

						</li>

					</ul>

				</li>

				<li class="" id="setting">

					<a href="javascript:;">

					<i class="icon-cogs"></i>

					<span class="title">系统设置</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="portlet_general.html">

							系统设置</a>

						</li>

						<li id="email">

							<a href="<?php echo U('Admin/Setting/email');?>">

							邮箱设置</a>

						</li>

						<li id="serverinfo">

							<a href="<?php echo U('Admin/Setting/info');?>">

							服务器信息</a>

						</li>

						<li id="operation">

							<a href="<?php echo U('Admin/Setting/operation');?>">

							管理员操作记录</a>

						</li>

						<li >

							<a href="portlet_draggable.html">

							用户操作记录</a>

						</li>

						<li >

							<a href="portlet_draggable.html">

							积分记录</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-map-marker"></i> 

					<span class="title">Maps</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="maps_google.html">

							Google Maps</a>

						</li>

						<li >

							<a href="maps_vector.html">

							Vector Maps</a>

						</li>

					</ul>

				</li>

				<li class="last ">

					<a href="charts.html">

					<i class="icon-bar-chart"></i> 

					<span class="title">Visual Charts</span>

					</a>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->
	
		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>portlet Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->        

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						
						<h3 class="page-title">

							已备份列表 <small>今日任务：统计在售商户商品的库存</small>

						</h3>
						
						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="<?php echo U('Admin/Rbac/index');?>">数据库管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">备份列表</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>

				</div>

				<!-- END PAGE HEADER-->
				
				<!-- BEGIN PAGE CONTENT-->
				
				<table class="table hovertable  table-bordered table-condensed">
				
				<tr>

					<th>
					
					id
					
					</th>
					
					<th>
					
					用户名称

					</th>
					
					<th>

						手机
					
					</th>
					
					<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#FFF5EE';">
          
							<td><?php echo ($v["name"]); ?></td>
          
							<td><?php echo ($v["time"]); ?></td>

							<td><?php echo ($v["size"]); ?></td>

						</tr><?php endforeach; endif; ?>
					
				</tr> 
				
				</table>
				
			<div class="pagination">

			<?php echo ($page); ?>
		
			</div>	
			
			</div>

		</div>

		<script type="text/javascript">

			document.getElementById('sqlmanage').className = 'start active '; 
			
		</script>
		
		<script type="text/javascript">

			document.getElementById('backuplist').className = 'active '; 
			
		</script>
			
		<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2013 &copy; Metronic by keenthemes.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="/FanHeo/Public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/FanHeo/Public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/FanHeo/Public/media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="/FanHeo/Public/media/js/excanvas.min.js"></script>

	<script src="/FanHeo/Public/media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/FanHeo/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/FanHeo/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="/FanHeo/Public/media/js/jquery.vmap.js" type="text/javascript"></script>   

	<script src="/FanHeo/Public/media/js/jquery.vmap.russia.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.vmap.world.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.vmap.europe.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.vmap.germany.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.vmap.usa.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>  

	<script src="/FanHeo/Public/media/js/jquery.flot.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.flot.resize.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.pulsate.min.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/date.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/daterangepicker.js" type="text/javascript"></script>     

	<script src="/FanHeo/Public/media/js/jquery.gritter.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/fullcalendar.min.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/jquery.sparkline.min.js" type="text/javascript"></script>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/FanHeo/Public/media/js/app.js" type="text/javascript"></script>

	<script src="/FanHeo/Public/media/js/index.js" type="text/javascript"></script>        

	<!-- END PAGE LEVEL SCRIPTS -->  

	<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   Index.init();

		   Index.initJQVMAP(); // init index page's custom scripts

		   Index.initCalendar(); // init index page's custom scripts

		   Index.initCharts(); // init index page's custom scripts

		   Index.initChat();

		   Index.initMiniCharts();

		   Index.initDashboardDaterange();

		   Index.initIntro();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>