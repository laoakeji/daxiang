<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="/Public/Pangu/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="/Public/Pangu/lib/web2/webuploader.css" />
<link rel="stylesheet" type="text/css" href="/Public/Pangu/lib/web2/style.css" />

<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/Public/UEditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/UEditor/ueditor.all.js"></script>

<script type="text/javascript" src="/Public/calander/js/laydate.js"></script>
<link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/Public/Home/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript" src="/Public/Home/js/jquery.mousewheel.min.js"></script>

<style type="text/css">
*{margin:0;padding:0;list-style:none;}
html{background-color:#E3E3E3; font-size:14px; color:#000; font-family:'微软雅黑'}
h2{line-height:30px; font-size:20px;}
a,a:hover{ text-decoration:none;}
pre{font-family:'微软雅黑'}
.box{width:970px; padding:10px 20px; background-color:#fff; margin:10px auto;}
.box a{padding-right:20px;}
.demo1,.demo2,.demo3,.demo4,.demo5,.demo6{margin:25px 0;}
h3{margin:10px 0;}
.layinput{height: 22px;line-height: 22px;width: 150px;margin: 0;}
</style>

<title>编辑</title>
</head>
<body>
<div class="pd-20">
  
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
							<input type="text" name="name" class="form-control" placeholder="产品/项目名称*" data-tv-valid="true" data-tv-notnull="产品/项目名称不能为空" data-reactid=".0.0.1.1.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.0.1.1.2">
							<input type="text" name="status" class="form-control" placeholder="项目目前情况 (需单选) *" data-tv-valid="true" data-tv-notnull="项目目前情况不能为空" data-reactid=".0.0.1.1.2.0">
						</div>
					</div>
					
					<div class="col-md-6 col-sm-6" data-reactid=".0.0.1.1">
						<div class="form-group" data-reactid=".0.0.1.0.0">
							<input type="text" name="desc" class="form-control" placeholder="一句话介绍你的产品/项目*" data-tv-valid="true" data-tv-notnull="产品/项目不能为空" data-reactid=".0.0.1.0.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.0.1.0.2">
							<input type="text" name="address" class="form-control" placeholder="公司地址*" data-tv-valid="true" data-tv-notnull="公司地址不能为空" data-reactid=".0.0.1.0.2.0">
						</div>
						
					</div>
					
				</div>
				<div class="container" data-reactid=".0.0.2">
					<div class="col-md-12 col-sm-12" data-reactid=".0.0.2.0">
						<div class="form-group" data-reactid=".0.0.2.0.0">
							<textarea name="detail" class="form-control" placeholder="项目详细介绍（300——800字） * " data-tv-valid="true" data-tv-notnull="项目详细介绍（300——800字）" data-reactid=".0.0.2.0.0.0"></textarea>
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
							<input type="text" name="founder" class="form-control" placeholder="创始人姓名*" data-tv-valid="true" data-tv-notnull="创始人姓名不能为空" data-reactid=".0.1.1.0.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.1">
							<input type="text" name="phone" class="form-control" placeholder="电话*" data-tv-valid="true" data-tv-notnull="电话不能为空" data-reactid=".0.1.1.0.1.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.2">
							<input type="text" name="wechat" class="form-control" placeholder="微信" data-reactid=".0.1.1.0.2.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.3">
							<textarea name="background" class="form-control" placeholder="核心创始团队成员背景，分别用1-2句话展示各自能力优势。* " data-tv-valid="true" data-tv-notnull="核心创始团队背景不能为空" data-reactid=".0.1.1.0.3.0"></textarea>
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.0.4">
							<textarea name="superiority" class="form-control" data-tv-valid="true" data-tv-notnull="团队特色不能为空" placeholder="团队特色* " data-reactid=".0.1.1.0.4.0"></textarea>
						</div>
					</div>
				
					<div class="col-md-6 col-sm-6" data-reactid=".0.1.1.1">
						<div class="form-group" data-reactid=".0.1.1.1.0">
							<input type="text" name="birthday" class="form-control" placeholder="出生日期和时间*" data-tv-valid="true" data-tv-notnull="出生日期不能为空" data-reactid=".0.1.1.1.0.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.1">
							<input type="text" name="email" class="form-control" placeholder="Email*" data-tv-valid="true" data-tv-notnull="Email不能为空" data-reactid=".0.1.1.1.1.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.2">
							<input type="text" name="teamcount" class="form-control" placeholder="目前团队人数*" data-tv-valid="true" data-tv-notnull="目前团队人数不能为空" data-reactid=".0.1.1.1.2.0">
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.3">
							<textarea name="experience" class="form-control" placeholder="创业经历 " data-reactid=".0.1.1.1.3.0"></textarea>
						</div>
						
						<div class="form-group" data-reactid=".0.1.1.1.4">
							<textarea name="ideal" class="form-control" placeholder="公司主要业务方向、愿景及理想 " data-reactid=".0.1.1.1.4.0"></textarea>
						</div>
					</div>
			</div>
	</div>
  </form>
</div>

<script type="text/javascript" src="/Public/Pangu/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.admin.js"></script> 

  <script type="text/javascript">
      $(function(){
        $('#sub_form2').click(function(){
          var data=$("#form2").serialize();
          var id="<?php echo ($id); ?>";

          $.post("<?php echo U('Index/do_edit');?>?table=company&id="+id,data,function(data){
            if (data>=1) {
              //layer.msg("修改成功");
              alert("修改成功");
              parent.location.reload();
          }else{
            //alert('失败'+data);
            alert('失败'+data);
          };
          })
        })
      })
    </script>

<script type="text/javascript">
$(function(){
  $('.skin-minimal input').iCheck({
    checkboxClass: 'icheckbox-blue',
    radioClass: 'iradio-blue',
    increaseArea: '20%'
  });
});
</script>

<script type="text/javascript" src="/Public/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
  $(function(){
    $('#file_upload1').uploadify({
      //'debug' : true,
      'buttonText':'上传',
      // 'width':'130',
      // 'height':'40',
      // 'buttonImage':'<<?php echo ($templets); ?>>/images/sc_03_06.jpg',
      'queueID'  : 'some_file_queue',//取消上传进度显示
      'swf'      : "/Public/uploadify/uploadify.swf",
      //'uploader' : "/index.php/home/reg/upload_img",
      'uploader' : "<?php echo U('Home/Other/upload');?>",
      'onFallback':function(){
        alert("您未安装FLASH控件，无法上传图片！请安装FLASH控件后再试。");
      },
      "onUploadSuccess":function(file, data, response){
        if (data!=-1) {
          $('#img1').attr('src',data);
          $('#image').val(data);   
        }else{
          alert('上传失败，请重新上传');
        }
      }
    });


  })
</script>


</body>
</html>