<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Document</title>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
<body>
    <table class='table'>
        <tr>
            <th>ID</th>
            <th>用户名称</th>
            <th>上次登录时间</th>
            <th>上一次登录IP</th>
            <th>锁定状态</th>
            <th>操作</th>
        </tr>

        <?php if(is_array($nowUser)): foreach($nowUser as $key=>$v): ?><tr>
                <td><?php echo ($v["username"]); ?></td>
                <td><?php echo ($v["name"]); ?></td>
                <td><?php echo (date('y-m-d H:i',$v["logintime"])); ?></td>
                <td><?php echo ($v["loginip"]); ?></td>
                <td>
                    <?php if($v["lock"]): ?>锁定<<?php else: ?>非锁定<?php endif; ?>
                </td>
                <td>
                    <a href="">锁定</a>&nbsp;
                    <a href="">强制下线</a>
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
</body>
</html>