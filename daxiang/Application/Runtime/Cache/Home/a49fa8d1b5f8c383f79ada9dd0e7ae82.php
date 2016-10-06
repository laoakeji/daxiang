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


<style>
.dabiaotiss { font-family: "微软雅黑"; font-size: 53px; color: #fff; font-weight: bold; padding-top: 15%; text-align: center; width: 100%;margin-top: 30px; }
</style>
<!--内容-->
<div class="neiye_banner" style="background:url(/Public/Home/images/team_head.jpg) no-repeat center center;background-size: cover; width:100%; height:450px; position:relative;">
<div class="clear"></div>
<div class="dabiaotiss" style="color:#f6881b !important;">团队与项目</div>
<!-- <div class="guanjiancicci">以人为本，服务社会，共建和谐，合作共赢</div> -->
	<div class="neiye_navq">
		
		<div class="clear"></div>      
    </div>
</div>
<div class="neiye_cen">
<div class="clear"></div>
<div class="shouye_guanyu_biaoti"> <em>项目介绍</em><br>
  <!-- <span>ABOUT US</span> -->
</div>
<div class="shouye_guanyu_xiangxi lin">
    <style>span{background-color: transparent!important;}</style>
    <h4 style="text-align:center;font-size: 33px"><?php echo ($list["desc"]); ?></h4>
    <div class="clear" style="height:30px;"></div>
    <div style="margin-top:5px;margin-bottom:20px;"><div><b> </b></div></div>
		<div class="content">
			<?php echo ($list["content"]); ?>
		</div>
</div>
</div>
<!--内容-->



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