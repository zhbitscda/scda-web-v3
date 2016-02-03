<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="__PUBLIC__/Images/logo.png" /> 
<title>新闻动态</title>
<link rel="stylesheet" href="__PUBLIC__/Css/news/layout.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.galleryview.setup.js"></script>
</head>
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
      <div class="fl_left"><h1><a href="#"><strong>新闻</strong>动态</a></h1></div>
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
 
<!-- ------------------------------------- container ------------------------------------------------- -->
<div class="wrapper">
   <div class="container">
      <div class="content">
         <div id="featured_slide">
            <ul id="featurednews">
               <!-- 1 -->
               <li>
                  <img src="#" alt=""/>
                  <div class="panel-overlay">
                     <h2>{}</h2>
                     <p>{}<br/><a href="#">详情 &raquo;</a></p>
                  </div>
               </li>
               <!-- 2 -->
               <li>
                  <img src="#" alt=""/>
                  <div class="panel-overlay">
                     <h2>{}</h2>
                     <p>{}<br/><a href="#">详情 &raquo;</a></p>
                  </div>
               </li>
               <!-- 3 -->
               <li>
                  <img src="#" alt=""/>
                  <div class="panel-overlay">
                     <h2>{}</h2>
                     <p>{}<br/><a href="#">详情 &raquo;</a></p>
                  </div>
               </li>
               <!-- 4 -->
               <li>
                  <img src="#" alt=""/>
                  <div class="panel-overlay">
                     <h2>{}</h2>
                     <p>{}<br/><a href="#">详情 &raquo;</a></p>
                  </div>
               </li>
               <!-- 5 -->
               <li>
                  <img src="#" alt=""/>
                  <div class="panel-overlay">
                     <h2>{}</h2>
                     <p>{}<br/><a href="#">详情 &raquo;</a></p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div class="column">
         <ul class="latestnews">
            <!-- 1 -->
            <li>
               <img src="#" alt="" height="100" width="140"/>
               <strong><a href="#">{}</a></strong><br><br>
               <p>{}</p>
            </li> 
            <!-- 2 -->
            <li>
               <img src="#" alt="" height="100" width="140"/>
               <strong><a href="#">{}</a></strong><br><br>
               <p>{}</p>
            </li>  
            <!-- 3 -->
            <li>
               <img src="#" alt="" height="100" width="140"/>
               <strong><a href="#">{}</a></strong><br><br>
               <p>{}</p>
            </li> 
         </ul>
      </div>
      <br class="clear" />
   </div>
</div>

<!-- ------------------------------------- adblock ------------------------------------------------- -->
<div class="wrapper">
   <div id="adblock">
      <div class="fl_left"><a href="#"><img src="__PUBLIC__/Images/demo/468x60.gif" alt="" /></a></div>
      <div class="fl_right"><a href="#"><img src="__PUBLIC__/Images/demo/468x60.gif" alt="" /></a></div>
      <br class="clear" />
  </div>
</div>

<!-- ------------------------------------- hpage_cats ---------------------------------------------- -->
<div class="wrapper">  
   <div id="hpage_cats">
   
      <!--------- 校园新闻 --------->
      <div class="fl">
         <h2><a href="#">校园新闻</a></h2>
         <!-- 1 -->
         <div class="kgup">
            <img src="#" alt="" height="100" width="140"/>
            <div class="inn">
               <p><strong><a href="#">{}</a></strong></p>
               <p>{}</p>
               <p>[{}]</p>
            </div>
         </div>
         <!-- 2 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 3 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 4 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 5 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 6 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
      </div>
      
      <!--------- 职协动态 --------->
      <div class="f2">
      <h2><a href="#">职协动态</a></h2>
         <!-- 1 -->
         <div class="kgup">
            <img src="#" alt="" height="100" width="140"/>
            <div class="inn">
               <p><strong><a href="#">{}</a></strong></p>
               <p>{}</p>
               <p>[{}]</p>
            </div>
         </div>
         <!-- 2 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 3 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 4 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 5 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 6 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
      </div>
      <br class="clear" />
      
      <!--------- 资格考试 --------->
      <div class="fl">
         <h2><a href="#">资格考试</a></h2>
         <!-- 1 -->
         <div class="kgup">
            <img src="#" alt="" height="100" width="140"/>
            <div class="inn">
               <p><strong><a href="#">{}</a></strong></p>
               <p>{}</p>
               <p>[{}]</p>
            </div>
         </div>
         <!-- 2 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 3 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 4 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 5 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 6 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
      </div>
      
      <!--------- 企业专访 --------->
      <div class="f2">
      <h2><a href="#">企业专访</a></h2>
         <!-- 1 -->
         <div class="kgup">
            <img src="#" alt="" height="100" width="140"/>
            <div class="inn">
               <p><strong><a href="#">{}</a></strong></p>
               <p>{}</p>
               <p>[{}]</p>
            </div>
         </div>
         <!-- 2 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 3 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 4 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 5 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
         <!-- 6 -->
         <div class="date"><p>[{}]</p></div>
         <div class="list"><li><a href="#">{}</a></li></div>
      </div>
   </div>
</div>

<!-- ------------------------------------- hpage_latest -------------------------------------------- -->
<div class="wrapper">
   <div class="container">
      <div class="content">
         <div id="hpage_latest">
            <h2>新闻播报</h2>
            <ul>
               <?php if(is_array($news_video)): foreach($news_video as $key=>$v): ?><li>
                 <img src="<?php echo ($v["pic_directory"]); ?>" alt="" height="130" width="190"/>
	              <h1><?php echo ($v["title"]); ?></h1>
                  <p><?php echo ($v["summary"]); ?></p>
                  <p class="readmore"><a href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($v["id"]); ?>&vid=<?php echo ($v["video_id"]); ?>">点击观看 &raquo;</a></p>
               </li>
               <div class="gekai"></div><?php endforeach; endif; ?>
            </ul>
         </div>
         
      </div>
      
      <div class='right'>
      <iframe width="300" height="400" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=300&height=450&fansRow=2&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=1&isFans=0&uid=1889063033&verifier=06903df6&dpc=1"></iframe>
      </div>
      <br class="clear" />
   </div>
</div>

<!-- ------------------------------------- footer ---------------------------------------------- -->

<!-- friend -->
<div class="wrapper friend">
<?php echo W('Friends');?>
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