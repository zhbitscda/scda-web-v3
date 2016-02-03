<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="<?php echo U('Index/Index/index');?>">网站首页</a>
			<a href="<?php echo U('Index/News/index');?>">新闻动态</a>
			<a href="<?php echo U('Index/Report/index');?>">调研报告</a>
			<a href="<?php echo U('Index/Direct/index');?>">就业指导</a>
			<a href="<?php echo U('Index/Visit/index');?>">企业观光</a>
            <a href="<?php echo U('Index/Assess/index');?>">职业测评</a>
            <a href="<?php echo U('Index/Job/index');?>">就业信息</a>
            <a href="<?php echo U('Index/Video/index');?>">视频频道</a>
		</div>
		<div class="exit">
			<a href="<?php echo U(GROUP_NAME. '/Index/logout');?>" target="_self">退出</a>
		</div>
	</div>
	<div id="left">
        <dl>
            <dt>会员系统</dt>
            <dd><a href="<?php echo U(GROUP_NAME . '/Vip/index');?>">个人信息</a></dd>
            <dd><a href="#">部门名单</a></dd>
            <dd><a href="#">协会相片</a></dd>
            <dd><a href="#">协会视频</a></dd>
        </dl>
        <dl>
            <dt>首页模块</dt>
            <dd><a href="<?php echo U(GROUP_NAME . '/IndexBoard/index');?>">首页模块</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/IndexBoard/addMessages');?>">添加信息</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/IndexBoard/trash');?>">回收站</a></dd>
        </dl>
		<dl>
			<dt>新闻动态</dt>
			<dd><a href="<?php echo U(GROUP_NAME. '/News/index');?>">新闻列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME. '/News/addNews');?>">添加新闻</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME. '/News/cate');?>">分类列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/News/trash');?>">回收站</a></dd>
		</dl>
		<dl>
			<dt>调研报告</dt>
			<dd><a href="<?php echo U(GROUP_NAME. '/Report/index');?>">报告列表</a></dd>
			<dd><a href="<?php echo U(GROUP_NAME. '/Report/addReport');?>">添加报告</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Report/trash');?>">回收站</a></dd>
		</dl>
		<dl>
			<dt>就业指导</dt>
			<dd><a href="<?php echo U(GROUP_NAME. '/Direct/index');?>">指导列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Direct/addDirect');?>">添加指导</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Direct/trash');?>">回收站</a></dd>
		</dl>
        <dl>
            <dt>企业观光</dt>
            <dd><a href="<?php echo U(GROUP_NAME. '/Visit/index');?>">观光列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Visit/addVisit');?>">添加观光</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Visit/trash');?>">回收站</a></dd>
            <dd><a href="#">报名列表</a></dd>
            <dd><a href="#">添加报名</a></dd>
        </dl>
        <dl>
            <dt>职业测评</dt>
            <dd><a href="<?php echo U(GROUP_NAME. '/Assess/index');?>">测评列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Assess/addassess');?>">添加测评</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Assess/trash');?>">回收站</a></dd>
        </dl>
        <dl>
            <dt>就业信息</dt>
            <dd><a href="<?php echo U(GROUP_NAME. '/Job/index');?>">信息列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Job/addJob');?>">添加信息</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Job/trash');?>">回收站</a></dd>
        </dl>
        <dl>
            <dt>影视频道</dt>
            <dd><a href="<?php echo U(GROUP_NAME. '/Video/index');?>">视频列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Video/addVideo');?>">添加视频</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Video/cate');?>">分列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Video/trash');?>">回收站</a></dd>
        </dl>
        <dl>
            <dt>RBAC</dt>
            <dd><a href="<?php echo U(GROUP_NAME. '/Rbac/index');?>">用户列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Rbac/role');?>">角色列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Rbac/node');?>">节点列表</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Rbac/addUser');?>">添加用户</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Rbac/addRole');?>">添加角色</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME. '/Rbac/addNode');?>">添加节点</a></dd>
        </dl>
        <dl>
            <dt>网站状态</dt>
            <dd><a href="<?php echo U(GROUP_NAME . '/Status/index');?>">在线用户</a></dd>
            <dd><a href="<?php echo U(GROUP_NAME . '/Status/friends');?>">友情连接</a></dd>
            <dd><a href="#">网站信息</a></dd>
        </dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="#"></iframe>
	</div>
</body>
</html>