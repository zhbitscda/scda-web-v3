<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="__PUBLIC__/Images/logo.png" /> 
<title>大学生职业发展协会-影视频道</title>
<link rel="stylesheet" href="__PUBLIC__/Css/video/layout.css" type="text/css" />
<link type="text/css" href="__PUBLIC__/Css/video/jiaoju.css" rel="stylesheet" />
<link rel="shortcut icon" href="__PUBLIC__/Images/logo.png" /> 
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/fade.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/focus.js"></script>
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

<!------------- container ------------->
<div class="wrapper">
   <div class="container">
   <!-- left -->
      <div class="left">
         <div id="ifocus">
            <div id="ifocus_pic">
		       <div id="ifocus_piclist" style="left:0; top:0;">
	              <ul>
                 <?php if(is_array($video_focus)): foreach($video_focus as $key=>$v): ?><li><a href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($v["id"]); ?>&vid=<?php echo ($v["video_id"]); ?>" target="_blank"><img src="<?php echo ($v["pic_directory"]); ?>" alt="" /></a></li><?php endforeach; endif; ?>
		          </ul>
	           </div>
		       <div id="ifocus_opdiv"><img src="__PUBLIC__/Images/video/playicon3.png" /></div>
		       <div id="ifocus_tx">
		          <ul>
                  <?php if(is_array($video_focus)): foreach($video_focus as $key=>$v): ?><li class="current"><?php echo (msubstr($v["summary"],0,25)); ?></li><?php endforeach; endif; ?>
                  </ul>
	           </div>
	        </div>
	        <div id="ifocus_btn">
	           <ul>
                  <?php if(is_array($video_focus)): foreach($video_focus as $key=>$v): ?><li class="current"><h2><?php echo ($v["title"]); ?></h2></li><?php endforeach; endif; ?>
               </ul>
            </div>
         </div>
         
         <!--- Introduction of the activity --->
         <div class="title"><h2>活动简介</h2></div>
         <div class="activityin">
            <div class="boxleftup">
               <h2>诚信日</h2>
               <div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($video_intro[0]["id"]); ?>&vid=<?php echo ($video_intro[0]["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($video_intro[0]["pic_directory"]); ?>" /></div>
                  </a>
               </div>
            </div>
            <div class="boxeleup">
               <h2>梦想对话</h2>
               <div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($video_intro[1]["id"]); ?>&vid=<?php echo ($video_intro[1]["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($video_intro[1]["pic_directory"]); ?>" /></div>
                  </a>
               </div>
            </div>
            <div class="boxeleup">
               <h2>外联精英挑战赛</h2>
               <div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($video_intro[2]["id"]); ?>&vid=<?php echo ($video_intro[2]["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($video_intro[2]["pic_directory"]); ?>" /></div>
                  </a>
               </div>
            </div>
            <div class="boxleftdown">
               <h2>职业风向标</h2>
               <div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($video_intro[3]["id"]); ?>&vid=<?php echo ($video_intro[3]["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($video_intro[3]["pic_directory"]); ?>" /></div>
                  </a>
               </div>
            </div>
            <div class="boxeledown">
               <h2>简历制作大赛</h2>
               <div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($video_intro[4]["id"]); ?>&vid=<?php echo ($video_intro[4]["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($video_intro[4]["pic_directory"]); ?>" /></div>
                  </a>
               </div>
            </div>
            <div class="boxeledown">
               <h2>职业规划大赛</h2>
               <div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($video_intro[5]["id"]); ?>&vid=<?php echo ($video_intro[5]["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($video_intro[5]["pic_directory"]); ?>" /></div>
                  </a>
               </div>
            </div>
         </div>

      </div>
      
      <!-- right -->
      <div class="right">
         <div class="place">
            <h2>点击排行榜</h2>
         </div>
         <div class="billboard">

            <!--排行榜列表-->
            <?php if(is_array($video_hot)): foreach($video_hot as $k=>$v): if($k < 9): ?><div class="list_2">
                  <div class="num"><?php echo ($k+1); ?></div>
                  <a href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($v["id"]); ?>&vid=<?php echo ($v["video_id"]); ?>"><?php echo ($v["title"]); ?></a>
               </div>
            <?php else: ?>
               <div class="list_2ele">
                  <div class="numelse"><?php echo ($k+1); ?></div>
                  <a href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($v["id"]); ?>&vid=<?php echo ($v["video_id"]); ?>"><?php echo ($v["title"]); ?></a>
            </div><?php endif; endforeach; endif; ?>

            <!--10
            <div class="list_2ele">
               <div class="numelse">10</div>
               <a href="#">麦德龙集团招聘会</a>
            </div>  -->     
         </div>

         <div class="place">
            <h2>广告</h2>
         </div>
         <div class="box">
            
         </div>
         
      </div>
   </div>
   <br class="clear" /><br>
</div>

<!---- middle ---->
<div class="wrapper">
   <div class="middle">
      <div class="container">
      <div class="word">
         <h2>关注职协</h2>
         <p>获取更多比赛信息</p>
      </div>
      <img src="__PUBLIC__/Images/video/photow.png">
      </div>
   </div>
   <br class="clear" />
</div>

<div class="wrapper">
   <div class="container">
      <!------- 现场录像 ---------->
      <div class="title"><h2>现场录像</h2></div>
      <div class="details color1">
         <div class="box">
            <?php if(is_array($video_scene)): foreach($video_scene as $k=>$v): ?><div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($v["id"]); ?>&vid=<?php echo ($v["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($v["pic_directory"]); ?>" /></div>
                  </a>
                  <div class="word">
                     <p><?php echo ($v["title"]); ?></p>
                  </div>
               </div>
               <div class="gekai"></div><?php endforeach; endif; ?>

         </div>      
      </div>
      <br class="clear" />
      
      <!------- 新闻播报 ---------->
      <div class="title"><h2>新闻播报</h2></div>
      <div class="details color2">
         <div class="box">
            <?php if(is_array($video_news)): foreach($video_news as $k=>$v): ?><div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($v["id"]); ?>&vid=<?php echo ($v["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($v["pic_directory"]); ?>" /></div>
                  </a>
                  <div class="word">
                     <p><?php echo ($v["title"]); ?></p>
                  </div>
               </div>
               <div class="gekai"></div><?php endforeach; endif; ?>      
         </div>      
      </div>
      <br class="clear" />
      
      <!------- 其他视频 ---------->
      <div class="title"><h2>其他视频</h2></div>
      <div class="details color3">
         <div class="box">
            <?php if(is_array($video_others)): foreach($video_others as $k=>$v): ?><div class="ts-display-pf-img">
                  <a class="image" href="<?php echo U(Group_name.'/Index/Video/show');?>?id=<?php echo ($v["id"]); ?>&vid=<?php echo ($v["video_id"]); ?>" >
                     <span class="rollover"></span>
                     <div class="boxpic"><img src="<?php echo ($v["pic_directory"]); ?>" /></div>
                  </a>
                  <div class="word">
                     <p><?php echo ($v["title"]); ?></p>
                  </div>
               </div>
               <div class="gekai"></div><?php endforeach; endif; ?>       
         </div>      
      </div>
      
   </div>
</div>
<br class="clear" />




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