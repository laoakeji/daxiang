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
  <form id="form2" method="post" class="form form-horizontal" id="form-article-add">

   <input type="hidden" name="type" value="<?php echo ($type); ?>"></input>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>标题：</label>
      <div class="formControls col-9">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["title"]); ?>" name="title" id="title">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>内容：</label>
      <div class="formControls col-9">
      <!-- 第二步：初始化 UDEITOR编辑器，更多的参数可以看说明文档-->
      <script type="text/javascript">
        UE.getEditor('myeditor')
      </script>
      <!-- 第三步：用于显示UDEITOR编辑器，可以是<textarea>，也可以是<script>... -->
      <textarea name="content" id="myeditor" style="width:90%px;height:500px"><?php echo ($list["content"]); ?></textarea>
      </div> 
    </div>

</div>
 
    <div class="row cl">
      <div class="col-10 col-offset-2">
        <button id="sub_form2" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>

        <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
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
          $.post("<?php echo U('Index/add_about');?>?id="+id,data,function(data){
			
            if (data.code>=1) {
              alert("添加成功");
              parent.location.reload();
          }else{
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