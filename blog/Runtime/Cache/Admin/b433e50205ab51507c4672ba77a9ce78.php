<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>首页</title>

		<meta name="description" content="This is page-header (.page-header &gt; h1)" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/ace.min.css" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="__PUBLIC__/assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="__PUBLIC__/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/assets/css/ace-rtl.min.css" />
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="__PUBLIC__/assets/css/ace-ie.min.css" />
		<![endif]-->
		<!--[if lte IE 8]>
		<script src="__PUBLIC__/assets/js/html5shiv.min.js"></script>
		<script src="__PUBLIC__/assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="__PUBLIC__/assets/js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default" style="position:fixed;top:0;left:0;width:100%;z-index:222;">
			<div class="navbar-container" id="navbar-container">

				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="index.html" class="navbar-brand">
						<small>
							<img src="__PUBLIC__/assets/avatars/crazy2.png" alt="" />
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									13条未读信息
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<img src="__PUBLIC__/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">B2C:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="__PUBLIC__/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">积分商城:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="__PUBLIC__/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">政府机票采购:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="__PUBLIC__/assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">B2B:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="__PUBLIC__/assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">货运系统:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										查看全部消息
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="__PUBLIC__/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									欢迎您<br />
									<?php echo ($info['username']); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										系统设置
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										个人信息设置
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U(GROUP_NAME.'/Login/logout');?>" onclick='return window.confirm("确定注销吗？");'>
										<i class="ace-icon fa fa-power-off"></i>
										登出
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>
<div class="main-container" id="main-container">

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar responsive" style="position:fixed;top:45px;left:0;z-index:1;height:100%;">


				<ul class="nav nav-list">
					<li class="active">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> 总控制台 </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> 系统管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu" style="display: block;">

								<li class="">
									<a href="<?php echo U(GROUP_NAME.'/System/menu');?>">
										<i class="menu-icon fa fa-caret-right"></i>
										菜单列表
									</a>

									<b class="arrow"></b>
								</li>

								<li class="">
									<a href="<?php echo U(GROUP_NAME.'/System/menuAdd');?>">
										<i class="menu-icon fa fa-caret-right"></i>
										添加菜单
									</a>

									<b class="arrow"></b>
								</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> 博客管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu" style="">

								<li class="">
									<a href="menu.html">
										<i class="menu-icon fa fa-caret-right"></i>
										博客列表
									</a>

									<b class="arrow"></b>
								</li>

								<li class="">
									<a href="menu_add.html">
										<i class="menu-icon fa fa-caret-right"></i>
										添加博客
									</a>

									<b class="arrow"></b>
								</li>
						</ul>
					</li>
				</ul>
					<!-- /.nav-list -->
				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

			</div>
<!-- /section:basics/sidebar -->
<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs" style="position:fixed;top:45px;height:45px;z-index:111;width:100%;">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="index.html">首页</a>
						</li>
						<li>
							<a href="javascript:void(0)">标题1</a>
						</li>
						<li>
							<a href="elements.html">标题2</a>
						</li>
					</ul><!-- /.breadcrumb -->

					<!-- #section:basics/content.searchbox -->
					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="请输入关键字 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->
				</div>
<div class="page-content">

<!-- /section:settings.box -->
<div class="page-content-area">

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<table width="100%" class="CSSearchTbl" cellpadding="0" cellspacing="0">
						<tr>
							<td class="left">提交部门：</td>
							<td class="right"><input type="text" size="16"  /></td>
							<td class="left">差旅单名称：</td>
							<td class="right"><input type="text" size="16"  /></td>
							<td class="left">差旅单号：</td>
							<td class="right"><input type="text" size="16"  /></td>
							<td class="left">差旅单状态：</td>
							<td class="right">
								<select>
									<option>未提交</option>
									<option>审核中</option>
									<option>审核通过</option>
									<option>审核未通过</option>
									<option>撤回</option>
									<option>作废</option>
								</select>
							</td>
						</tr>
						<tr>
							
							<td class="left">提交人姓名：</td>
							<td class="right"><input type="text" size="16"  /></td>
							<td class="left">差旅单创建时间：</td>
							<td class="right"><input type="text" size="16" class="datePicker"  /> 至 <input type="text" size="16" class="datePicker"  /></td>
							<td class="left">差旅时间范围：</td>
							<td class="right"><input type="text" size="16" class="datePicker"  /> 至 <input type="text" size="16" class="datePicker"  /></td>
							<td class="right" colspan="2">
								<button class="btn btn-primary pull-left col-sm-12 tbl-search" data-dismiss="modal">
									开始搜索 
									<i class="ace-icon fa fa-search"></i>
								</button>
							</td>
						</tr>
					</table> 

					<div class="table-responsive">
						
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">
										<label class="position-relative">
											<input type="checkbox" class="ace" />
											<span class="lbl"></span>
										</label>
									</th>
									<th>名称</th>
									<th>地址</th>
									<th>层级</th>
									<th>显示</th>
									<th>排序</th>
									<th>添加人</th>
									<th>添加日期</th>
									<th>操作</th>
								</tr>
							</thead>

							<tbody>
								<tr>
								<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td class="center">
										<label class="position-relative">
											<input type="checkbox" class="ace" />
											<span class="lbl"></span>
										</label>
									</td>

									<td><?php echo ($vo["name"]); ?></td>
									<td><?php echo ($vo["url"]); ?></td>
									<td><?php echo ($vo["level"]); ?></td>
									<td><?php if($vo["display"] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
									<td><?php echo ($vo["sort"]); ?></td>
									<td><?php echo ($vo["addUser"]); ?></td>
									<td><?php echo (date('Y-m-d H:i:s',$vo["addTime"])); ?></td>
									<td>
										<div class="hidden-sm hidden-xs btn-group">
<!-- 																<button class="btn btn-xs btn-success" title="查看">
												<i class="ace-icon fa fa-search-plus bigger-120"></i>
											</button>
-->
											<button class="btn btn-xs btn-info" title="修改" onclick='javascript:location.href="<?php echo U(GROUP_NAME.'/System/menuEdit',array('id'=>$vo['id']));?>";'>
												<i class="ace-icon fa fa-pencil bigger-120"></i>
											</button>

											<button class="btn btn-xs btn-danger" title="删除">
												<i class="ace-icon fa fa-trash-o bigger-120"></i>
											</button>

											<button class="btn btn-xs btn-success" title="添加">
												<i class="ace-icon fa fa-check bigger-120"></i>
											</button>
										</div>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>

						<div class="modal-footer no-margin-top">

							<ul class="pagination pull-right no-margin">
								<li class="prev disabled">
									<a href="#">
										<i class="ace-icon fa fa-angle-double-left"></i>
									</a>
								</li>

								<li class="active">
									<a href="#">1</a>
								</li>

								<li>
									<a href="#">2</a>
								</li>

								<li>
									<a href="#">3</a>
								</li>

								<li class="next">
									<a href="#">
										<i class="ace-icon fa fa-angle-double-right"></i>
									</a>
								</li>
							</ul>
						</div>

					</div>

					


				</div>
			</div>

			<div id="modal-table" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header no-padding">
							<div class="table-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									<span class="white">&times;</span>
								</button>
								客票行李规定
							</div>
						</div>

						<div class="modal-body no-padding">
							<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
								<thead>
									<tr>
										<th>航班类型</th>
										<th>客舱级别</th>
										<th>行李数量上限</th>

										<th>
											<i class="ace-icon fa fa-clock-o bigger-110"></i>
											每件重量上限
										</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>
											<a href="#">国内航班</a>
										</td>
										<td>头等舱</td>
										<td>2件</td>
										<td>5千克</td>
									</tr>

									<tr>
										<td>
											<a href="#">国内航班</a>
										</td>
										<td>头等舱</td>
										<td>2件</td>
										<td>5千克</td>
									</tr>
									<tr>
										<td>
											<a href="#">国内航班</a>
										</td>
										<td>头等舱</td>
										<td>2件</td>
										<td>5千克</td>
									</tr>
									<tr>
										<td>
											<a href="#">国内航班</a>
										</td>
										<td>头等舱</td>
										<td>2件</td>
										<td>5千克</td>
									</tr>
									<tr>
										<td>
											<a href="#">国内航班</a>
										</td>
										<td>头等舱</td>
										<td>2件</td>
										<td>5千克</td>
									</tr>
									<tr>
										<td>
											<a href="#">国内航班</a>
										</td>
										<td>头等舱</td>
										<td>2件</td>
										<td>5千克</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="modal-footer no-margin-top">
							<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
								<i class="ace-icon fa fa-times"></i>
								关闭
							</button>

							<ul class="pagination pull-right no-margin">
								<li class="prev disabled">
									<a href="#">
										<i class="ace-icon fa fa-angle-double-left"></i>
									</a>
								</li>

								<li class="active">
									<a href="#">1</a>
								</li>

								<li>
									<a href="#">2</a>
								</li>

								<li>
									<a href="#">3</a>
								</li>

								<li class="next">
									<a href="#">
										<i class="ace-icon fa fa-angle-double-right"></i>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content-area -->
</div><!-- /.page-content -->
</div><!-- /.main-content -->

<!--[if !IE]> -->
			<script type="text/javascript">
				window.jQuery || document.write("<script src='__PUBLIC__/assets/js/jquery.min.js'>"+"<"+"/script>");
			</script>
		<!-- <![endif]-->
		<!--[if IE]>
			<script type="text/javascript">
			 window.jQuery || document.write("<script src='__PUBLIC__/assets/js/jquery1x.min.js'>"+"<"+"/script>");
			</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='__PUBLIC__/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="__PUBLIC__/assets/js/bootstrap.min.js"></script>
		<!--[if lte IE 8]>
		  <script src="__PUBLIC__/assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="__PUBLIC__/assets/js/jquery-ui.custom.min.js"></script>
		<script src="__PUBLIC__/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="__PUBLIC__/assets/js/ace-elements.min.js"></script>
		<script src="__PUBLIC__/assets/js/ace.min.js"></script>

	</body>
</html>