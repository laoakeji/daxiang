<?php if (!defined('THINK_PATH')) exit();?>﻿<!--<!DOCTYPE html>-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>中原影视孵化器有限公司</title>
<meta name="keywords" content="">
<meta name="description" content="中原影视孵化器有限公司">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<link href="/Public/Home/css/public.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/jquery.fancybox.css">
<link href="/Public/Home/css/css.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">


<!--<link href="/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css">-->
<script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.mousewheel.min.js"></script>

</head>
<body style="padding:0px;margin: 0px;">
<div class="actGotop">
  <div class="shouye_top_logo"><a href="index.html"><img src="/Public/Home/images/logo.png"><h2><!-- 北京五岳河环保科技有限公司 --></h2></a></div>
  <div class="shouye_top_nav">
    <div class="shouye_xiala fLe">
      <ul class="nav clearfix">
        <li id="m1" class="m">
          <h3><a href="<?php echo U('Home/Index/index');?>">首页</a></h3>          
        </li>

        <li id="m1" class="m">
          <h3><a href="<?php echo U('Home/Index/wlist');?>">关于我们</a></h3>
          <ul class="sub">      
				<li><a href="<?php echo U('Home/Index/wlist');?>?id=1">简介</a></li>
				<li><a href="<?php echo U('Home/Index/wlist');?>?id=2">管理团队</a></li>
				<li><a href="<?php echo U('Home/Index/wlist');?>?id=3">组织架构</a></li>
				<li><a href="<?php echo U('Home/Index/wlist');?>?id=4">孵化范围</a></li>
				<li><a href="<?php echo U('Home/Index/index');?>">发起单位</a></li>
				<li><a href="<?php echo U('Home/Index/index');?>">创业导师</a></li>
				<li><a href="<?php echo U('Home/Index/service');?>?id=4">服务支持</a></li>
          </ul>
        </li>

        <li id="m1" class="m">
			<h3><a href="<?php echo U('Home/Index/team');?>?id=1">入驻团队与项目</a></h3>
        </li>

         <li id="m1" class="m">
			<h3><a href="<?php echo U('Home/Index/news');?>">新闻资讯</a></h3>
        </li>

        <li id="m1" class="m">
			<h3><a href="<?php echo U('Home/Index/apply');?>">申请入驻</a></h3>
        </li>
      </ul>
    </div>
    <script type="text/javascript">
        jQuery(".nav").slide({
            type: "menu",
            titCell: ".m",
            targetCell: ".sub",
            effect: "slideDown",
            delayTime: 300,
            triggerTime: 0,
            returnDefault: true 
        });
    </script>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<!--top-->
<!--top-->




<!--内容-->
<div class="neiye_banner" style="background:url(/Public/Home/images/apply_head.png) no-repeat center center;background-size: cover; width:100%; height:450px; position:relative;">
<div class="clear"></div>
<div class="neiye_dabiaoti" style="width:280px;">申请入驻</div>
<!-- <div class="guanjiancicci">以人为本，服务社会，共建和谐，合作共赢</div> -->
	<div class="neiye_navq">
    </div>
</div>

<link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css">

<div class="neiye_cen">
<div class="shouye_guanyu_xiangxi lin">
	<div class="content" style="word-break:break-all;">
		
		<div id="ufoApply">
		<form id="applyForm" method="POST" data-reactid=".0">
			<div class="home-width form-two text-center" style="margin-top:100px;" data-reactid=".0.0">
				<div data-reactid=".0.0.0">
					<h2 data-reactid=".0.0.0.0">提交申请</h2>
					<p data-reactid=".0.0.0.1">
						<small data-reactid=".0.0.0.1.0">(附：带有* 为必填项目，请您仔细填写)</small>
					</p>
				</div>
				<div class="container  form-two" data-reactid=".0.0.1">
					<div class="col-md-6 col-sm-6" data-reactid=".0.0.1.0">
						
						<div class="form-group" data-reactid=".0.0.1.1.0">
							<input type="text" id="name" name="name" class="form-control" placeholder="产品/项目名称*" data-tv-valid="true" data-tv-notnull="产品/项目名称不能为空" data-reactid=".0.0.1.1.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.0.1.1.2">
							<input type="text" id="status" name="status" class="form-control" placeholder="项目目前情况 (需单选) *" data-tv-valid="true" data-tv-notnull="项目目前情况不能为空" data-reactid=".0.0.1.1.2.0">
						</div>
					</div>
					
					<div class="col-md-6 col-sm-6" data-reactid=".0.0.1.1">
						<div class="form-group" data-reactid=".0.0.1.0.0">
							<input type="text" id="desc" name="desc" class="form-control" placeholder="一句话介绍你的产品/项目*" data-tv-valid="true" data-tv-notnull="产品/项目不能为空" data-reactid=".0.0.1.0.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.0.1.0.2">
							<input type="text" id="address" name="address" class="form-control" placeholder="公司地址*" data-tv-valid="true" data-tv-notnull="公司地址不能为空" data-reactid=".0.0.1.0.2.0">
						</div>
						
					</div>
					
				</div>
				<div class="container" data-reactid=".0.0.2">
					<div class="col-md-12 col-sm-12" data-reactid=".0.0.2.0">
						<div class="form-group" data-reactid=".0.0.2.0.0">
							<textarea name="detail" id="detail" class="form-control" placeholder="项目详细介绍（300——800字） * " data-tv-valid="true" data-tv-notnull="项目详细介绍（300——800字）" data-reactid=".0.0.2.0.0.0"></textarea>
						</div>
					</div>
				</div>
				
			</div>
			<div class="home-width form-two text-center" data-reactid=".0.1">
				<div data-reactid=".0.1.0">
					<h2 data-reactid=".0.1.0.0">团队信息</h2>
					<p data-reactid=".0.1.0.1">
						<small data-reactid=".0.1.0.1.0">(附：带有* 为必填项目，请您仔细填写)</small>
					</p>
				</div>
				<div class="container  form-two" data-reactid=".0.1.1">
					<div class="col-md-6 col-sm-6" data-reactid=".0.1.1.0">
						<div class="form-group" data-reactid=".0.1.1.0.0">
							<input type="text" id="founder"  name="founder" class="form-control" placeholder="创始人姓名*" data-tv-valid="true" data-tv-notnull="创始人姓名不能为空" data-reactid=".0.1.1.0.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.1">
							<input type="text" id="phone" name="phone" class="form-control" placeholder="电话*" data-tv-valid="true" data-tv-notnull="电话不能为空" data-reactid=".0.1.1.0.1.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.2">
							<input type="text" id="wechat" name="wechat" class="form-control" placeholder="微信" data-reactid=".0.1.1.0.2.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.3">
							<textarea name="background" id="background" class="form-control" placeholder="核心创始团队成员背景，分别用1-2句话展示各自能力优势。* " data-tv-valid="true" data-tv-notnull="核心创始团队背景不能为空" data-reactid=".0.1.1.0.3.0"></textarea>
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.4">
							<textarea name="superiority" id="superiority" class="form-control" data-tv-valid="true" data-tv-notnull="团队特色不能为空" placeholder="团队特色* " data-reactid=".0.1.1.0.4.0"></textarea>
						</div>
					</div>
				
					<div class="col-md-6 col-sm-6" data-reactid=".0.1.1.1">
						<div class="form-group" data-reactid=".0.1.1.1.0">
							<input type="text" id="birthday" name="birthday" class="form-control" placeholder="出生日期和时间*" data-tv-valid="true" data-tv-notnull="出生日期不能为空" data-reactid=".0.1.1.1.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.1">
							<input type="text" id="email" name="email" class="form-control" placeholder="Email*" data-tv-valid="true" data-tv-notnull="Email不能为空" data-reactid=".0.1.1.1.1.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.2">
							<input type="text" id="teamcount" name="teamcount" class="form-control" placeholder="目前团队人数*" data-tv-valid="true" data-tv-notnull="目前团队人数不能为空" data-reactid=".0.1.1.1.2.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.3">
							<textarea name="experience" id="experience" class="form-control" placeholder="创业经历 " data-reactid=".0.1.1.1.3.0"></textarea>
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.4">
							<textarea name="ideal" id="ideal" class="form-control" placeholder="公司主要业务方向、愿景及理想 " data-reactid=".0.1.1.1.4.0"></textarea>
						</div>
					</div>
			</div>

		<div class="container form-banner-dwon" data-reactid=".0.1.4">
			<div class="col-md-12 col-sm-12" data-reactid=".0.1.4.0">
				<button type="button" id="apply" class="btn btn-warning btn-lg btn-block" data-reactid=".0.1.4.0.0">马上提交</button>
			</div>
			<p id="applyFormMessage" style="color:red;" data-reactid=".0.1.4.1"></p>
		</div>
	</div>
    </div>
</div>
</div>
<!--内容-->

<script type="text/javascript">
$(function(){
  $("#apply").click(function(){
	var name = $("#name").val();
	if(name==""){alert("请填写项目名称");return;}
	
	var status = $("#status").val();
	if(status==""){alert("请填写项目状态");return;}
	
	var desc = $("#desc").val();
	if(desc==""){alert("请填写项目介绍");return;}
	
	var address = $("#address").val();
	if(address==""){alert("请填写公司地址");return;}
	
	var detail = $("#detail").val();
	if(detail==""){alert("请填写项目介绍");return;}
	
	var founder = $("#founder").val();
	if(founder==""){alert("请填写创始人姓名");return;}
	
	var phone = $("#phone").val();
	if(phone==""){alert("请填写联系电话");return;}
	
	var wechat = $("#wechat").val();
	if(wechat==""){alert("请填写微信号");return;}
	
	var superiority = $("#superiority").val();
	if(superiority==""){alert("请填写团队特色");return;}
	
	var birthday = $("#birthday").val();
	if(birthday==""){alert("请填写出生日期");return;}
	
	var email = $("#email").val();
	if(email==""){alert("请填写邮箱");return;}
	
	var teamcount = $("#teamcount").val();
	if(teamcount==""){alert("请填写团队人数");return;}
	
      var data=$("#applyForm").serialize();
      $.post("<?php echo U('Home/Index/do_apply');?>",data,function(result){
        if (result.code>0) {
          alert(result.msg);location.reload()
        }else{
          alert(result.msg);alert(result);
        }
      })
  })


})

</script>




<!--页脚-->
<!--页脚-->
<div class="shouye_dibu">
<div class="clear"></div>
  

  <div class="shouye_dibu_logo"><a href="index.html">
	<center>
	<div style="width:320px; height:60px;">
		<img src="/Public/Home/images/logo.png" style="width:100%; height:100%;">
	</div>
	</center>
  </div>
    <div class="dibu_sanjuhua">
      <!-- <ul>
          <li><big style='font-size:30px'>成</big> 为中国领先的创新创业空间解决方案提供者。</li>
            <li><big style='font-size:30px'>成</big> 们提供与众不同的高品质创业空间和服务。</li>
            <li><big style='font-size:30px'>成</big> 得我们的用户拥有愉悦的创业体验、实现创业的梦想。</li>
            <div class="clear"></div>
        </ul> -->
    </div>
    <div class="shouye_xinjia fLe">
    <div class="dibu_nav">
		<a href="<?php echo U('Home/Index/index');?>">首页</a>
		<a href="<?php echo U('Home/Index/wlist');?>?id=1">关于我们</a>
		<a href="<?php echo U('Home/Index/team');?>?id=1">入驻团队与项目</a>
		<a href="<?php echo U('Home/Index/news');?>">新闻资讯</a>
		<a href="<?php echo U('Home/Index/apply');?>">申请入驻</a>
    <div class="ewm" style="margin: 0 auto;display: inline-block;vertical-align: bottom;margin-right: 20px;">
        <div style="text-align: center;float: left;color: #fff;margin-right: 20px;line-height: 80%;">
            <img src="/Public/Home/images/erweima.png" width="120" height="120" border="0" alt="微信" style="margin: 0 auto;width: 100px;height: 100px;position: absolute;margin-left: 100px;margin-top: -20px;">
        </div>
    </div>
    <!-- erweima -->
    </div>
	<!-- <div class="dibu_baiss">中原影视孵化器有限公司</div> -->
    <div class="dibu_baiss">公司地址：河南省郑州市商都路心怡路易元国际大厦B座24楼</div>
    <div class="dibu_baiss">电话：037155525171</div><br><br>
    </div>
    <div class="clear"></div>
</div>
<!--页脚-->

<div class="actGotopq">
  <a href="javascript:;" title="返回顶部"></a>
</div>

<script type="text/javascript">           
$(function(){
  $(".suspend").mouseover(function() {
        $(this).stop();
        $(this).animate({width: 160}, 400);
    });
    $(".suspend").mouseout(function() {
        $(this).stop();
        $(this).animate({width: 40}, 400);
    });
});
</script>
<script type="text/javascript" src="/Public/Home/js/index.js"></script>
</body>
</html>