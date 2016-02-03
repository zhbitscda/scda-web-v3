<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="__PUBLIC__/Css/login.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
<!--<script type="text/javascript" src="__PUBLIC__/scripts/login.js"></script>-->
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
</div>


<!------------- container ------------->
<div class="wrapper">
   <div class="container">
      <div class="login">
         <div class="kj">
           <form id="form" action="<?php echo U(GROUP_NAME.'/Login/login/');?>" method="POST" name="myform">
               <div class="username"><input name="username" id="username" type="text" size="15" /></div>
               <br class="clear" />
               <div class="password"><input name="password" id="password"  type="password" size="15" /></div>
               <br class="clear" />
               <div class="lgi"><input type="submit" name="submit" value="登入"/></div>
            </form>
            <div class="forget"><a href="#">忘记密码？</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('./Index/Index/index');?>">返回首页</a></div>
         </div>
      </div>
   </div>
   
</div>


<!-- ------------------------------------- footer ------------------------------------------------ -->

<!-- copyright -->
<div class="wrapper bg">
   <div id="copyright">
     <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - 北京理工大学珠海学院大学生职业发展协会</p>
     <p class="fl_right">Design by 职协网络组</p>
     <br class="clear" />
   </div>
</div>


</body>
</html>