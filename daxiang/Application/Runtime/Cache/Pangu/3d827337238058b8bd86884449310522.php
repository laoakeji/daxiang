<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/Public/Pangu/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/skin/default/skin.css" rel="stylesheet" type="text/css" id="skin" />
<link href="/Public/Pangu/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/Public/Pangu/lib/jquery/1.9.1/jquery.min.js"></script> 
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台主页</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<header class="Hui-header cl" style="background-color: #333333"> <a class="Hui-logo l" title="H-ui.admin v2.3" href="/"><font style="color: #fff;">Pangu</font></a> <a class="Hui-logo-m l" href="/" title="H-ui.admin">www</a> <span class="Hui-subtitle l">V3.0</span>
	<nav class="mainnav cl" id="Hui-nav">

	</nav>
	<ul class="Hui-userbar">
		<li><font style="color: #fff;">Admin</font></li>
		<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A"><font style="color: #fff;">admin <i class="Hui-iconfont">&#xe6d5;</i></font></a>
			<ul class="dropDown-menu radius box-shadow">
			
				<li><a href="<?php echo U('Index/login_out');?>">退出</a></li>
			</ul>
		</li>
	</ul>
	<a aria-hidden="false" class="Hui-nav-toggle" href="#"></a> </header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">

		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe627;</i> 首页<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/edit_index');?>" href="javascript:void(0)">主页</a></li>
					<li><a _href="<?php echo U('Index/ser_list');?>" href="javascript:void(0)">一站式服务</a></li>
					<li><a _href="<?php echo U('Index/wubai_list');?>" href="javascript:void(0)">500强链接</a></li>
					<li><a _href="<?php echo U('Index/pro_dlist');?>" href="javascript:void(0)">友情链接</a></li>
				</ul>
			</dd>
		</dl>

		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe627;</i>关于我们<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/about_us');?>?type=1" href="javascript:void(0)">公司简介</a></li>		
					<li><a _href="<?php echo U('Index/about_us');?>?type=2" href="javascript:void(0)">管理团队</a></li>
					<li><a _href="<?php echo U('Index/about_us');?>?type=3" href="javascript:void(0)">组织架构</a></li>
					<li><a _href="<?php echo U('Index/about_us');?>?type=4" href="javascript:void(0)">孵化范围</a></li>
				</ul>
			</dd>
			
			<dt><i class="Hui-iconfont">&#xe627;</i> 创业导师<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>	
					<li><a _href="<?php echo U('Index/list_teacher');?>" href="javascript:void(0)">创业导师</a></li>
				</ul>
			</dd>
			
			<dt><i class="Hui-iconfont">&#xe627;</i> 服务支持<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>	
					<li><a _href="<?php echo U('Index/edit_service');?>?id=4" href="javascript:void(0)">产业基金</a></li>
					<li><a _href="<?php echo U('Index/edit_service');?>?id=5" href="javascript:void(0)">基础服务</a></li>
				</ul>
			</dd>
			
			<dt><i class="Hui-iconfont">&#xe627;</i> 团队与项目<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>	
					<li><a _href="<?php echo U('Index/list_team');?>?id=1" href="javascript:void(0)">入驻团队</a></li>
					<li><a _href="<?php echo U('Index/list_team');?>?id=2" href="javascript:void(0)">入驻项目</a></li>
				</ul>
			</dd>
			
			<dt><i class="Hui-iconfont">&#xe627;</i> 发起单位<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>	
					<li><a _href="<?php echo U('Index/list_company');?>" href="javascript:void(0)">发起单位</a></li>
				</ul>
			</dd>

			<dt><i class="Hui-iconfont">&#xe627;</i> 新闻资讯<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>	
					<li><a _href="<?php echo U('Index/list_news');?>" href="javascript:void(0)">新闻资讯</a></li>
				</ul>
			</dd>
			
			<dt><i class="Hui-iconfont">&#xe627;</i> 提交申请<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>	
					<li><a _href="<?php echo U('Index/list_apply');?>" href="javascript:void(0)">申请列表</a></li>
				</ul>
			</dd>
			
		</dl>
	</div>
</aside>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo U('Index/welcome');?>"></iframe>
		</div>
	</div>
</section>


<script type="text/javascript" src="/Public/Pangu/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/Validform/5.3.2/Validform.min.js"></script>  
<script type="text/javascript" src="/Public/Pangu/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/Public/Pangu/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.admin.js"></script> 

<script type="text/javascript">
/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
</script> 

</body>
</html>