<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>大学生职业发展协会-影视频道</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="__PUBLIC__/Css/video_details/layout.css" type="text/css" />
<script type="text/javascript" src="__ROOT__/Data/ckplayer/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript" src="__PUBLIC__/Js/offlights.js"></script>
<link rel="shortcut icon" href="__PUBLIC__/Images/logo.png" /> 
</head>

<body id="top">

<!-- ------------------------------------- header ------------------------------------------------- -->
<div class="wrapper">
   <div id="headerup">
      <div id="logo">
         <div id="logo1"><img src="__PUBLIC__/Images/logo.png" width="60" height="60"/></div>
         <div id="logo2"><p>大学生职业发展协会</p></div>
      </div>
   </div>

   <div id="header">
      <div class="fl_left"><h1><a href="#"><strong>影视</strong>频道</a></h1></div>
      <div class="fl_right"><a href="#"><img src="__PUBLIC__/Images/demo/468x60.gif" alt="" /></a></div>
      <br class="clear" />
   </div>
</div>

<!-- ------------------------------------- nav --------------------------------------------------- -->
<div class="wrapper">
   <div id="topbar">
      <div id="topnav">
         <ul>
    <li><a href="<?php echo U(GROUP_NAME . '/Index/index');?>">网站首页</a></li>
    <li <?php if($name == "News"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/News/index');?>">新闻动态</a></li>
    <li <?php if($name == "Report"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/Report/index');?>">调研报告</a></li>
    <li <?php if($name == "Direct"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/Direct/index');?>">就业指导</a></li>
    <li <?php if($name == "Visit"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/Visit/index');?>">企业观光</a></li>
    <li <?php if($name == "Assess"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/Assess/index');?>">职业测评</a></li>
    <li <?php if($name == "Job"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/Job/index');?>">就业信息</a></li>
    <li <?php if($name == "Video"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/Video/index');?>">影视频道</a></li>
    <li <?php if($name == "About"): ?>class="active"<?php endif; ?>><a href="<?php echo U(GROUP_NAME . '/About/index');?>">关于职协</a></li>
    <li><a href="<?php echo U('Admin/Index/index');?>">后台管理</a></li>
</ul> 
      </div>
      <br class="clear" />
   </div>
</div>
  
<!-- ------------------------------------- container ---------------------------------------------- -->
<!-- picture(960X80) -->
<div class="wrapper">
   <div class="container">
      <div class="place"><div id="tt" style="margin:0 atuo;"><img src="__PUBLIC__/Images/home.png" /><p>您所在的位置:北理珠职协&nbsp;>&nbsp;影视频道&nbsp;>&nbsp;<?php echo ($intro["title"]); ?></p></div></div>

      <div id="video" style="position:relative;z-index: 100;width:960px;height:540px;float: left;"><div id="a1"></div></div>
      <script type="text/javascript">
         var flashvars={
            f:'<?php echo ($video["directory"]); ?>',
            c:0,
            b:1
            };
         var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always'};
         CKobject.embedSWF('__ROOT__/Data/ckplayer/ckplayer.swf','a1','ckplayer_a1','960','540',flashvars,params);
         /*
         CKobject.embedSWF(播放器路径,容器id,播放器id/name,播放器宽,播放器高,flashvars的值,其它定义也可省略);
         下面三行是调用html5播放器用到的
         */
         var video=['<?php echo ($video["directory"]); ?>->video/mp4'];
         var support=['iPad','iPhone','ios','android+false','msie10+false','webKit'];
         CKobject.embedHTML5('video','ckplayer_a1',960,520,video,flashvars,support);
      </script>

   </div>
</div>


<!-- ------------------------------------- footer ------------------------------------------------ -->

<!-- friend -->
<div class="wrapper">
   <div class="footerblackground">
<?php echo W('Friends');?>
   </div>
   <br class="clear" />
</div>

<!-- copyright -->
<div class="wrapper copyright">
<div id="copyright">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved -北京理工大学珠海学院大学生职业发展协会</p>
    <p class="fl_right">Design by 职协网络组&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ver&nbsp;0.1</p>
    <br class="clear" />
</div>
</div>


</body>
</html>