<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="__PUBLIC__/Images/logo.png" /> 
<title>调研报告</title>
<link rel="stylesheet" href="__PUBLIC__/Css/report/layout.css" type="text/css" />
<body id="top">

<!-- ------------------------------------- header ------------------------------------------------- -->
<div class="wrapper">
   <div id="headerup">
      <div id="logo">
         <div id="logo1"><img src="__PUBLIC__/Images/logo.png" width="60" height="60" /></div>
         <div id="logo2"><p>大学生职业发展协会</p></div>
      </div>
   </div>

   <div id="header">
      <div class="fl_left"><h1><a href="#"><strong>调研</strong>报告</a></h1></div>
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

<<!-- picture(960X80) -->
<div class="wrapper">
   <div class=container>
      <div class="middlead"><a href="#"><img src="__PUBLIC__/Images/960X80px.png" alt="" /></a></div>
   </div>
</div>

<!------------- container ------------->
<div class="wrapper">
   <div class="container">
      <div class="content">
         <div class="place"><img src="__PUBLIC__/Images/home.png" />&nbsp;您当前的位置:北理珠大学生职业发展协会网站&gt;调研报告</div>
         <div class="inframe">
         <!-----  upcontent  ----->
         <div class="upcontent">
            <!----- tittle ----->
            <div class="title">
               <h2><?php echo ($title); ?></h2>
            </div>
            <!----- time author from ----->
            <div class="taf">
               <p>时间:<?php echo ($date); ?>&nbsp;&nbsp;<?php echo ($time); ?>&nbsp;&nbsp;&nbsp;&nbsp;作者：<?php echo ($author); ?>&nbsp;&nbsp;&nbsp;&nbsp;来源：<?php echo ($from); ?></p>
            </div>
         </div>
         <!------ downcontent ------->
         <div class="downcontent">
            <?php echo ($content); ?>
         </div>
      </div>
      <div class="rightcon">
         <div class="place">
         </div>
      </div>
      <br class="clear" />
   </div>
   <br class="clear" />
</div>

<!-- ------------------------------------- footer ---------------------------------------------- -->

<!-- friend -->
<div class="wrapper friend">
<?php echo W('Friends');?>
</div>

<!-- copyright -->
<div class="wrapper copyright">
<div id="copyright">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">北京理工大学珠海学院大学生职业发展协会</a></p>
    <p class="fl_right">Design by <a href="#" title="Free Website Templates">职协网络组</a></p>
    <br class="clear" />
</div>
</div>

</body>
</html>