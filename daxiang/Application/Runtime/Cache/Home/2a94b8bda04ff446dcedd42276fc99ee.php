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
				<li><div id="menuNav"><a href="#fqdw">发起单位</a></div></li>
				<li><div id="menuNav"><a href="#cyds">创业导师</a></div></li>		
				<li><div id="menuNav"><a href="#fwzc">服务支持</a></div></li>
          </ul>
        </li>

        <li id="m1" class="m">
			<h3><div id="menuNav"><a href="#tdxm">入驻团队与项目</a></div></h3>
        </li>

         <li id="m1" class="m">
			<h3><div id="menuNav"><a href="#xwzx">新闻资讯</a></div></h3>
        </li>

        <li id="m1" class="m">
			<h3><div id="menuNav"><a href="#sqrz">申请入驻</a></div></h3>
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
  .shouye_qiehuan_xinwe .bd ul li{width: 300px;height: 520px!important;    padding-top: 0;}
  .shouye_qiehuan_xinwe .bd ul li .pic img{width: 100%;}
  .huiyuan_qiehuan .hd ul li {cursor: pointer;display: inline-block;zoom: 1;width: 10px;height: 4px;margin: 1px;overflow: hidden;background: #252729;border: 1px solid #7b7b7b;filter: alpha(opacity=50);opacity: 0.9;line-height: 999px;}
  .huiyuan_qiehuan .hd ul .on { background: #8aa201; border: 1px solid #8aa201; }
</style>
<!--引导图-->
<div class="huiyuan_qiehuan">
  <div id="header">
    <div class="xiajianniu" id="menuNav"> <a href="#zuopin"></a> </div>
  </div>
  <div class="bd">
    <ul class="ui">

    <li >
		<div class="neiye_banner" style="background:url(/Public/Home/images/t1.jpg) no-repeat center center;background-size: cover; width:100%; height:971px; position:relative;">
		<div class="dabiaotiss" style="color:#FCFCFC !important;">专注于做影视行业创新创业载体</div><br><br>
		<div class="jiaru"><a href="<?php echo U('Home/Index/apply');?>"><em style="font-size:20px;">加入我们 / JION US</em></a></div>
    </li>
	
	<li >
		<div class="neiye_banner" style="background:url(/Public/Home/images/t2.jpg) no-repeat center center;background-size: cover; width:100%; height:971px; position:relative;">
		<div class="dabiaotiss" style="color:#FCFCFC !important;">搭建中国中部影视产业全方位创新创业服务平台</div>
    </li>
	
	<li >
		<div class="neiye_banner" style="background:url(/Public/Home/images/t3.jpg) no-repeat center center;background-size: cover; width:100%; height:971px; position:relative;">
		<div class="dabiaotiss" style="color:#FCFCFC !important;">集结中国中部有志影视人，孵化精品影视剧</div>
    </li>
    </ul>
  </div>
  <div class="hd">
    <ul><li class="on">1</li><li class="">2</li><li class="">3</li></ul>
  </div>
  <span class="prev"></span> <span class="next"></span> </div>
<script type="text/javascript">
		jQuery(".huiyuan_qiehuan").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		jQuery(".huiyuan_qiehuan").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
			startFun:function(i){
				var curLi = jQuery(".huiyuan_qiehuan .bd li").eq(i);
				if( !!curLi.attr("_src") ){
					curLi.css("background-image",curLi.attr("_src")).removeAttr("_src")
				}
			}
		});
	</script>
<!--引导图-->

<!--关于我们-->
<div id="zuopin" class="colTitBar colTitBar1">
  <h2 class="tit1" title="zuopin"></h2>
</div>
<div class="shouye_guanyu_biaoti"> <em>关于我们</em><br>
  <span>ABOUT US</span>
</div>
<!--<div><img src="..\..\..\Public\Home\images\webslogan.png" style="margin: 10px auto;"></div>-->
<br>
<div class="shouye_guanyu_xiangxi js-about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
	中原影视孵化器，由河南电影电视制作集团有限公司和河南华隆股权投资基金管理有限公司、河南金犁风险投资管理有限公司、河南大象影视制片有限公司、河南易元置业有限公司、河南省悦汇文化传播有限公司、河南中财创业投资管理有限公司、河南哲思出版传媒股份有限公司为主要发起人联合发起创办，是在国家深入实施创新驱动发展战略和适应经济发展新常态的大背景下，是在全国影视行业的迅猛发展，中国社会对影视文化产业飞速提升的需求，影视行业创业拥有了巨大的发展空间的大环境里，组建的专注于全方位助推影视产业创新创业的孵化平台。
国内首家影视行业细分孵化器——中原影视孵化器位于郑东高铁核心，新客站南，与郑东CBD、CGD、大学城相邻，交通和生活便利，科技和文化资源丰富，便于创新资源和创业者集聚，固定办公场地一期投入使用面积2400平方米。

<div class="shouye_chakangengduo"><a href="<?php echo U('Home/Index/wlist');?>?id=1">点击查看更多</a></div></div>
<!--关于我们-->


<!--发起单位-->
<div class="shouye_guanyu_biaoti" id="fqdw"> <em></em><br><br>
<div class="shouye_guanyu_biaoti" id="fqdw"> <em>发起单位</em><br>
  <span>SERVICES</span>
</div>

<div class="danwei_shouye_tu_liebiao">
  <ul>

	<?php if(is_array($list_company)): $i = 0; $__LIST__ = $list_company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li onclick="javascript:location.href='<?php echo U('Home/Index/detail_com');?>?id=<?php echo ($vo["id"]); ?>';">
		  <div class="shouye_fenlei_bg2">
			<div class="fenlei_bg2"></div>
			<div class="fenlei_tu2">
			  <a href="<?php echo U('Home/Index/detail_team');?>?id=<?php echo ($vo["id"]); ?>">
				<div >
					<img src="<?php echo ($vo["image"]); ?>" style="width:100%; height:100%!important;">
				</div>
			  </a>
			</div>
			<div class="fenlei_bai_bg2"></div>
			<div class="fenlei_wem2"><span><?php echo ($vo["title"]); ?></span><p style="margin-top: 33px;color: #fff;font-size: 14px;padding: 0 20px;"></p></div>        
		  </div>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>

    <div class="clear"></div>
    </ul>
</div>
<!--<div class="shouye_chakangengduo" style="margin-bottom: 50px;"><a href="wlist (9).html?id=4">点击查看更多</a></div>-->

<!--发起单位-->





<!--创业导师-->
<div class="shouye_guanyu_biaoti" id="cyds"> <em></em><br><br>
<div class="shouye_guanyu_biaoti"> <em>创业导师</em><br>
  <span>PARTNER</span>
</div>
<div class="shouye_par2_cen cyds">
<div class="bd">
  <ul style="list-style-type:none">
    <?php if(is_array($list_teacher)): $i = 0; $__LIST__ = $list_teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="margin-top:0px;">
		  <div class="shouye_fenlei_bg">
			<!--<div class="fenlei_bg"><a href="javascript:"></a></div>-->
			<div class="fenlei_tu"><a href="javascript:"><img src="<?php echo ($vo["image"]); ?>" style="width:180px;hegiht:180px;"></a></div>
			<div class="fenlei_bai_bg" style="display: block; opacity: 0;"><a href="javascript:"></a></div>
			<div class="fenlei_wem" style="display: block; opacity: 0;"><a class="fancybox" href="#inline<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?><span> </span><em><img src="/Public/Home/images/6.png" width="37" height="37"></em></a></div>
		  </div>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  
	<?php if(is_array($list_teacher)): $i = 0; $__LIST__ = $list_teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="inline<?php echo ($vo["id"]); ?>" style="width:1283px; height:382px;display: none;">
	<!--    <div class="tuandui_tu_shouye fLe"><img src="/upload/201508/17/201508171757546634.jpg" width="180" /></div>-->    
			<div class="shouye_tuandui_wen fLe">
				<iframe allowtransparency="true" src="<?php echo U('Home/Index/show');?>?id=<?php echo ($vo["id"]); ?>" style=" width:100%; height:100%;" frameborder="no" border="0">&lt;/&gt;</iframe>
			</div>    
			<div class="clear"></div>
	  </div><?php endforeach; endif; else: echo "" ;endif; ?>
  
  
</div>
<!--
<div class="shouye_chakangengduo" style="margin-bottom: 50px;"><a href="wlist (7).html?id=15">点击查看更多</a></div>
-->
</div>

<script type="text/javascript">
  jQuery(".cyds").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:8,interTime:50});
</script>


<!--团队与项目-->
<style>

</style>
<div class="shouye_xinwen">
<div class="clear"></div>
<div class="shouye_guanyu_biaoti" id="tdxm"><br>
<div class="shouye_guanyu_biaoti"> <em>团队与项目</em><br>
  <span>PATENTS</span>
</div>
<br>
<div class="beijing">
	<div class="shouye_liucheng">
    	<a href="<?php echo U('Home/Index/team');?>?id=1"><span>入驻团队</span><em style="width:274px">BE SETTLED IN THE TEAM</em></a>
    </div>
    <div class="shouye_tijiao" >
    	<a href="<?php echo U('Home/Index/team');?>?id=2"><span>孵化项目</span><em style="width:274px">INCUBATION PROJECT</em></a>
    </div>
	<img src="/Public/Home/images/apply.png" style="width:100%; height:100%;">
</div>
<!--团队与项目-->


<!--服务支持-->
<style>

</style>
<div class="shouye_xinwen">
<div class="clear"></div>
<div class="shouye_guanyu_biaoti" id="fwzc"><br>
<div class="shouye_guanyu_biaoti"> <em>服务支持</em><br>
  <span>PATENTS</span>
</div>
<br>
<div class="beijing">
	<div class="shouye_liucheng">
    	<a href="<?php echo U('Home/Index/service');?>?id=4"><span>产业基金</span><em style="width:274px">INDUSTRIAL FUND</em></a>
    </div>
    <div class="shouye_tijiao" >
    	<a href="<?php echo U('Home/Index/service');?>?id=5"><span>基础服务</span><em style="width:274px">BASIC SERVICE</em></a>
    </div>
	<img src="/Public/Home/images/service.png" style="width:100%; height:100%;">
</div>
<!--服务支持-->


<!--资讯-->
<div class="shouye_xinwen" style="background-color:#fff;">
<div class="clear"></div>
<div class="shouye_guanyu_biaoti" id="xwzx"><br>
<div class="shouye_guanyu_biaoti"> <em>新闻资讯</em><br>
  <span>NEWS</span>
</div>
<div class="shouye_qiehuan_xinwe js-news">
  <div class="bd">
    <ul class="picList">
		 <?php if(is_array($list_news)): $i = 0; $__LIST__ = $list_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<div class="pic"><a href="<?php echo U('Home/Index/detail_news');?>?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo ($vo["image"]); ?>"></a></div>
				<div class="title">
					<div class="xinwen_biaoti_shouye"><a href="<?php echo U('Home/Index/detail_news');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></div>
					<div class="xinwen_shijian">2016-08-31</div>
					<div class="xinwenmiaosu_shouye"><a href="<?php echo U('Home/Index/detail_news');?>?id=<?php echo ($vo["id"]); ?>" class="aq"><?php echo ($vo["desc"]); ?></a></div>
				</div>
			 </li><?php endforeach; endif; else: echo "" ;endif; ?>

	</ul>
  </div>
	<div class="hd"> 
		
		<a class="next"><img src="/Public/Home/images/next.png"></a>
			<ul></ul>
		<a class="prev"><img src="/Public/Home/images/prev.png"></a> 
	</div>
    <div class="shouye_chakangengduo"><a href="<?php echo U('Home/Index/news');?>">点击查看更多</a></div>
</div>
<script type="text/javascript">
		jQuery(".js-news").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:false,vis:5,trigger:"click"});
    // {titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:false,vis:5,trigger:"click"}
		</script>
</div>
<!--资讯-->




<!--服务支持-->
<style>

</style>
<div class="shouye_xinwen">
<div class="clear"></div>
<div class="shouye_guanyu_biaoti" id="sqrz"><br>
<div class="shouye_guanyu_biaoti"> <em>申请入驻</em><br>
  <span>PATENTS</span>
</div>
<!--服务支持-->
<center>
<div class="services" id="services">
				<div class="container">
					<div class="service-grids">
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon" aria-hidden="false" style="font-family:微软雅黑;">一</i>
							</div>
							<div class="ser-right">
								<h4 style="font-family:微软雅黑;">入驻咨询</h4>
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon" aria-hidden="true" style="font-family:微软雅黑;">二</i>
							</div>
							<div class="ser-right">
								<h4 style="font-family:微软雅黑;" style="font-family:微软雅黑;">项目申请</h4>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon" aria-hidden="true" style="font-family:微软雅黑;">三</i>
							</div>
							<div class="ser-right">
								<h4 style="font-family:微软雅黑;" style="font-family:微软雅黑;">初步评审</h4>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="service-grids">
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon" aria-hidden="true" style="font-family:微软雅黑;">四</i>
							</div>
							<div class="ser-right">
								<h4 style="font-family:微软雅黑;">专家评审</h4>
								<p></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon" aria-hidden="true" style="font-family:微软雅黑;">五</i>
							</div>
							<div class="ser-right">
								<h4 style="font-family:微软雅黑;">签订协议</h4>
								<p></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4 ser-grid">
							<div class="ser-left">
								<i class="glyphicon" aria-hidden="true" style="font-family:微软雅黑;">六</i>
							</div>
							<div class="ser-right">
								<h4 style="font-family:微软雅黑;">正式入驻</h4>
								<p></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="shouye_chakangengduo"><a href="<?php echo U('Home/Index/apply');?>">点击申请</a></div>
				</div>
			</div>
		

		</center>
		
<!--部分客户-->


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