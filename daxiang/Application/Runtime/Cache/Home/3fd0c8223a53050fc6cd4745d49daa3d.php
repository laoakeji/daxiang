<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>北京五岳河环保科技有限公司</title>
<meta name="keywords" content="环保技术,环保工程,环保设备及药剂,纯净水处理工程,市政管道工程,纯净水处理设备,配件及耗材">
<meta name="description" content="北京五岳河环保科技有限公司">
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

<link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css">

<div class="neiye_cen">

		<div id="ufoApply">
		<form id="applyForm" method="POST" data-reactid=".0">
			<div class="home-width form-two text-center" style="margin-top:100px;" data-reactid=".0.0">
			
				<div data-reactid=".0.0.0">
					<h2 data-reactid=".0.0.0.0">申请</h2>
					<p data-reactid=".0.0.0.1">
						<small data-reactid=".0.0.0.1.0">(附：带有* 为必填项目，请您仔细填写)</small>
					</p>
				</div>
			
				<div class="container  form-two" data-reactid=".0.0.1">
					
					<div class="col-md-6 col-sm-6" data-reactid=".0.0.1.0">
						
						<div class="form-group" data-reactid=".0.0.1.1.0">
							<input type="text" name="name" class="form-control" placeholder="产品/项目名称*" data-tv-valid="true" data-tv-notnull="产品/项目名称不能为空" data-reactid=".0.0.1.1.0.0" value="<?php echo ($list["name"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.0.1.1.2">
							<input type="text" name="status" class="form-control" placeholder="项目目前情况 (需单选) *" data-tv-valid="true" data-tv-notnull="项目目前情况不能为空" data-reactid=".0.0.1.1.2.0" value="<?php echo ($list["status"]); ?>">
						</div>
					</div>
					
					<div class="col-md-6 col-sm-6" data-reactid=".0.0.1.1">
						<div class="form-group" data-reactid=".0.0.1.0.0">
							<input type="text" name="desc" class="form-control" placeholder="一句话介绍你的产品/项目*" data-tv-valid="true" data-tv-notnull="产品/项目不能为空" data-reactid=".0.0.1.0.0.0" value="<?php echo ($list["desc"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.0.1.0.2">
							<input type="text" name="address" class="form-control" placeholder="公司地址*" data-tv-valid="true" data-tv-notnull="公司地址不能为空" data-reactid=".0.0.1.0.2.0" value="<?php echo ($list["address"]); ?>">
						</div>
						
					</div>
					
				</div>
				<div class="container" data-reactid=".0.0.2">
					<div class="col-md-12 col-sm-12" data-reactid=".0.0.2.0">
						<div class="form-group" data-reactid=".0.0.2.0.0">
							<textarea name="detail" class="form-control" placeholder="项目详细介绍（300——800字） * " data-tv-valid="true" data-tv-notnull="项目详细介绍（300——800字）" data-reactid=".0.0.2.0.0.0"><?php echo ($list["detail"]); ?></textarea>
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
							<input type="text" name="founder" class="form-control" placeholder="创始人姓名*" data-tv-valid="true" data-tv-notnull="创始人姓名不能为空" data-reactid=".0.1.1.0.0.0" value="<?php echo ($list["founder"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.1">
							<input type="text" name="phone" class="form-control" placeholder="电话*" data-tv-valid="true" data-tv-notnull="电话不能为空" data-reactid=".0.1.1.0.1.0" value="<?php echo ($list["phone"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.2">
							<input type="text" name="wechat" class="form-control" placeholder="微信" data-reactid=".0.1.1.0.2.0" value="<?php echo ($list["wechat"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.3">
							<textarea name="background" class="form-control" placeholder="核心创始团队成员背景，分别用1-2句话展示各自能力优势。* " data-tv-valid="true" data-tv-notnull="核心创始团队背景不能为空" data-reactid=".0.1.1.0.3.0"><?php echo ($list["background"]); ?></textarea>
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.4">
							<textarea name="superiority" class="form-control" data-tv-valid="true" data-tv-notnull="团队特色不能为空" placeholder="团队特色* " data-reactid=".0.1.1.0.4.0"><?php echo ($list["superiority"]); ?></textarea>
						</div>
					</div>
				
					<div class="col-md-6 col-sm-6" data-reactid=".0.1.1.1">
						<div class="form-group" data-reactid=".0.1.1.1.0">
							<input type="text" name="birthday" class="form-control" placeholder="出生日期和时间*" data-tv-valid="true" data-tv-notnull="出生日期不能为空" data-reactid=".0.1.1.1.0.0" value="<?php echo ($list["birthday"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.1">
							<input type="text" name="email" class="form-control" placeholder="Email*" data-tv-valid="true" data-tv-notnull="Email不能为空" data-reactid=".0.1.1.1.1.0" value="<?php echo ($list["email"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.2">
							<input type="text" name="teamcount" class="form-control" placeholder="目前团队人数*" data-tv-valid="true" data-tv-notnull="目前团队人数不能为空" data-reactid=".0.1.1.1.2.0" value="<?php echo ($list["teamcount"]); ?>">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.3">
							<textarea name="experience" class="form-control" placeholder="创业经历 " data-reactid=".0.1.1.1.3.0"><?php echo ($list["experience"]); ?></textarea>
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.4">
							<textarea name="ideal" class="form-control" placeholder="公司主要业务方向、愿景及理想 " data-reactid=".0.1.1.1.4.0"><?php echo ($list["ideal"]); ?></textarea>
						</div>
					</div>
			</div
	</div>
    </div>


<div class="actGotopq">
  <a href="javascript:;" title="返回顶部"></a>
</div>


<script type="text/javascript" src="/Public/Home/js/index.js"></script>
</body>
</html>