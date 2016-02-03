<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="__PUBLIC__/Images/logo.png" /> 
<title>大学生职业发展协会</title>
<link rel="stylesheet" href="__PUBLIC__/Css/index/layout.css" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.jcarousel.setup.js"></script>
</head>

<body id="top">
  <div class="wrapper col1">
    <div id="headerup">
      <div id="logo">
        <div id="logo1">
        <img src="__PUBLIC__/Images/bigLogo3.png" width="480" height="96" />
        </div>
        <!--<div id="logo1">
          <img src="__PUBLIC__/Images/logo.png" width="60" height="60" />
        </div>
        <div id="logo2">
          <p>大学生职业发展协会</p>
        </div>-->
        <br /><br /><br /><br />
        <div id="topnav">
          <ul>
            <li class="active"><a href="index.html">首页</a></li>
            <li>
              <a href="#">栏目</a>
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
            </li>
            <li><a href="#">关于我们</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <br /><br /><br /><br />
    

<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
        <?php if(is_array($top)): foreach($top as $key=>$v): ?><li><img src="<?php echo ($v["pic_directory"]); ?>" alt="" />
          <div class="floater">
              <h2><?php echo ($v["title"]); ?></h2>
              <p class="readcontent"><?php echo ($v["content"]); ?></p>
              <p class="readmore"><a href="<?php echo ($v["more"]); ?>">更多详情 &raquo;</a></p>
            </div>
          </li><?php endforeach; endif; ?>
      </ul>
    </div>
    <!--<a href="javascript:void(0);" id="featured-item-prev"><img src="__PUBLIC__/Images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a>--> 
    </div>
</div>

<div class="wrapper col3">
  <div id="container">
    <div class="homepage">
    <div class="left">
    <h2>了解</h2>
    <ul>
      <li><a href="#">办公室</a></li>
      <li><a href="#">调查研究部</a></li>
      <li><a href="#">职业规划部</a></li>
      <li><a href="#">讲座交流部</a></li>
      <li><a href="#">外联部</a></li>
      <li><a href="#">宣传部</a></li>
      <li><a href="#">新闻组</a></li>
      <li><a href="#">网络组</a></li>
      <li><a href="#">主持组</a></li>
      <li><a href="#">培训组</a></li>
     </ul>
    </div>
    <div class="right">
    <div class="rightword"><h2>职协动态</h2></div>
      <ul>
        <li>
          <h2><img src="<?php echo ($upLeft["pic_directory"]); ?>" alt="" /></h2>
            <div class="consword"><a href="<?php echo ($upLeft["more"]); ?>"><font color='green'>[新闻动态]</font><?php echo ($upLeft["content"]); ?></a></div>
            <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>-->
        </li>
        <li>
          <h2><img src="<?php echo ($upMiddle["pic_directory"]); ?>" alt="" /></h2>
            <div class="consword"><a href="<?php echo ($upMiddle["more"]); ?>"><font color='green'>[调研报告]</font><?php echo ($upMiddle["content"]); ?></a></div>
            <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>-->
        </li>
        <li class="last">
          <h2><img src="<?php echo ($upRight["pic_directory"]); ?>" alt="" /></h2>
          <div class="consword"><a href="<?php echo ($upRight["more"]); ?>"><font color='green'>[就业指导]</font><?php echo ($upRight["content"]); ?></a></div>
          <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>-->
        </li>
      </ul>
      <ul>
        <li>
          <h2><img src="<?php echo ($downLeft["pic_directory"]); ?>" alt="" /></h2>
            <div class="consword"><a href="<?php echo ($downLeft["more"]); ?>"><font color='green'>[视频频道]</font><?php echo ($downLeft["content"]); ?></a></div>
            <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>-->
        </li>
        <li>
          <h2><img src="<?php echo ($downMiddle["pic_directory"]); ?>" alt="" /></h2>
            <div class="consword"><a href="<?php echo ($downMiddle["more"]); ?>"><font color='green'>[企业观光]</font><?php echo ($downMiddle["content"]); ?></a></div>
            <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>-->
        </li>
        <li class="last">
          <h2><img src="<?php echo ($downRight["pic_directory"]); ?>" alt="" /></h2>
          <div class="consword"><a href="<?php echo ($downRight["more"]); ?>"><font color='green'>[职业信息]</font><?php echo ($downRight["content"]); ?></a></div>
          <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>-->
        </li>
      </ul>
      </div>
      <br class="clear" />
    </div>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper friend">
<?php echo W('Friends');?>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
<div id="copyright">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved -北京理工大学珠海学院大学生职业发展协会</p>
    <p class="fl_right">Design by 职协网络组&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ver&nbsp;0.1</p>
    <br class="clear" />
</div>
</div>
</body>
</html>