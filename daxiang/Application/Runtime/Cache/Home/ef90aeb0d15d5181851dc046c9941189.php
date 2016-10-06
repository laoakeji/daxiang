<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>创始合伙人-管理团队-UFO众创空间</title>
<meta content="UFO众创空间" name="keywords">
<meta content="UFO众创空间" name="description">
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
#sucai{width:690px;height:279px;padding-right:10px;overflow:hidden; float:left; margin-top:60px; margin-left:20px;}
#sucai{color:#999;font-size:12px;line-height:220%;text-align:left;text-indent:2em;}
.nicescroll-rails{ background:#f7f7f7;-webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
	        border-radius: 5px;}
.xiangxiaaa_tp{ float:left;width:184px; height:385px; padding-top:55px; padding-left:33px; padding-right:33px; background:#edae49;}
</style>
<link href="/Public/Home/css/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.nicescroll.js"></script>
</head>
<body>
<div class="xiangxiaaa_tp">
	<div class="tuandui_tu_shouye">
    	<img src="<?php echo ($list["image"]); ?>" width="120">
    </div>
</div>
<div id="sucai">
	<p>
	<span style="white-space:nowrap;"><?php echo ($list["title"]); ?>：</span>
</p>
<p>
	<span style="white-space:nowrap;"><?php echo ($list["content"]); ?></span>
</p>
</div>

<div class="shouye_shangxiage">
      <div class="shangyipian"><a href="<?php echo U('Home/Index/show');?>?id=<?php echo $list.id-1 ?>"></a></div>
       <div class="shangyipiana"><a href="<?php echo U('Home/Index/show');?>?id=<?php echo $list.id+1 ?>"></a></div>
      <div class="zhongwenming"><?php echo ($list["title"]); ?></div>
      <div class="zhongwenminga"> </div>
      <div class="xiahuaxian"></div>
      <div class="jieshao"> </div>
</div>
<script type="text/javascript">
$("#sucai").niceScroll({  
	cursorcolor:"#d3d3d3",  
	cursoropacitymax:1,  
	touchbehavior:false,  
	cursorwidth:"5px",  
	cursorborder:"0",  
	cursorborderradius:"5px"  
}); 
</script>
</body>
</html>