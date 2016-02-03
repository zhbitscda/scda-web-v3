<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>企业观光</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/visit_details/layout.css" type="text/css" />
<link rel="shortcut icon" href="images/logo.png" /> 
</head>

<body id="top">

<!-- ------------------------------------- header ------------------------------------------------- -->
<div class="wrapper">
   <div id="headerup">
      <div id="logo">
         <div id="logo1"><img src="images/logo.png" width="60" height="60" /></div>
         <div id="logo2"><p>大学生职业发展协会</p></div>
      </div>
   </div>

   <div id="header">
      <div class="fl_left"><h1><a href="#"><strong>企业</strong>观光</a></h1></div>
      <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
      <br class="clear" />
   </div>
</div>

<!-- ------------------------------------- nav --------------------------------------------------- -->
<div class="wrapper">
   <div id="topbar">
      <div id="topnav">
         <ul>
            <li><a href="{:U(GROUP_NAME . '/Index/index')}">网站首页</a></li>
            <li><a href="{:U(GROUP_NAME . '/News/index')}">新闻动态</a></li>
      	    <li><a href="{:U(GROUP_NAME . '/Report/index')}">调研报告</a></li>
            <li><a href="{:U(GROUP_NAME . '/Direct/index')}">就业指导</a></li>
            <li class="active"><a href="{:U(GROUP_NAME . '/Visit/index')}">企业观光</a></li>
            <li><a href="{:U(GROUP_NAME . '/Assess/index')}">职业测评</a></li>
            <li><a href="{:U(GROUP_NAME . '/Job/index')}">就业信息</a></li>
            <li><a href="{:U(GROUP_NAME . '/Video/index')}">影视频道</a></li>
            <li><a href="{:U(GROUP_NAME . '/About/index')}">关于职协</a></li>
            <li><a href="{:U('Admin/Index/index')}">后台管理</a></li>
         </ul>
      </div>
      <br class="clear" />
   </div>
</div>
  
<!-- ------------------------------------- container ---------------------------------------------- -->
<!-- picture(960X80) -->
<div class="wrapper">
   <div class=container>
      <div class="middlead"><a href="#"><img src="images/960X80px.png" alt="" /></a></div>
   </div>
   <br class="clear" />
</div>

<!------------- container ------------->
<div class="wrapper">
   <div class="container">
      <!------- content ------->
      <div class="content">
         <!-----  place  ----->
         <div class="place">
            <img src="images/home.png" />
            <div class="s1">您当前的位置:</div>
            <div class="s2">北理珠大学生职业发展协会网站&nbsp;&gt;&nbsp;就业指导&nbsp;&gt;&nbsp;正文</div>
         </div>
         <!-----  upcontent  ----->
         <div class="upcontent">
            <!----- tittle ----->
            <div class="title">
               <h2>{$title}</h2>
            </div>
            <!----- time author from ----->
            <div class="taf">
               <p>时间:{$date}&nbsp;&nbsp;{$time}&nbsp;&nbsp;&nbsp;&nbsp;作者：{$author}&nbsp;&nbsp;&nbsp;&nbsp;来源：{$from}</p>
            </div>
         </div>
         <!------ downcontent ------->
         <div class="downcontent">
            {$content}
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

<!-- ------------------------------------- footer ------------------------------------------------ -->

<!-- friend -->
<div class="wrapper">
   <div class="footerblackground">
      <div id="footer">
         <div class="flybox1">
            <div class="leftbox1">
               <h2>关注职协</h2>
               <p>获得更多动态</p>
               <p>微博<a href="http://weibo.com/zhbitscda">@北理工珠海学院职协</a></p>
            </div>
         </div>
         <div class="flybox2">
            <h2>友情链接:</h2>
         </div>
         <div class="flybox3">
            <!-- left -->
            <div class="leftfriend">
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">北京理工大学珠海学院官网</a></div>
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">北理珠招生办</a></div> 
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">北理珠青年志愿者协会</a></div> 
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">京涛海纳</a></div> 
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">海贝TV</a></div>  
            </div>
    
            <!-- right -->
            <div class="rightfriend">
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">暨南大学大学生职业发展协会</a></div>
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">中山大学大学生职业发展协会</a></div> 
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">广东工业大学大学生职业发展协会</a></div> 
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">北师珠大学生职业发展协会</a></div> 
               <div class="friend"><img src="" alt="" width="26" height="30"/><a href="#">征集中...</a></div> 
            </div>
         </div>
      </div>
   </div>
   <br class="clear" />
</div>

<!-- copyright -->
<div class="wrapper">
   <div id="copyright">
     <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">北京理工大学珠海学院大学生职业发展协会</a></p>
     <p class="fl_right">Design by <a href="http://www.os-templates.com/" title="Free Website Templates">职协网络组</a></p>
     <br class="clear" />
   </div>
</div>


</body>
</html>
