<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

</head>
<body>
    <table class='table'>
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>所属分类</th>
            <th>连接地址</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>

        <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                <td width="8%"><?php echo ($v["id"]); ?></td>
                <td width="23%"><?php echo ($v["title"]); ?></td>
                <td width="8%">[<?php echo ($v["cate_name"]); ?>]</td>
                <td><?php echo ($v["more"]); ?></td>
                <td width="15%"><?php echo (date('Y-m-d H:i',$v["time"])); ?></td>
                <td width="13%">
                    <?php if(ACTION_NAME == "index" ): ?>[<a href=''>修改</a>]
                        [<a href="<?php echo U(GROUP_NAME . '/IndexBoard/toTrach',array('id' => $v['id'],'type' => 1));?>">删除</a>]
                    <?php else: ?>
                        [<a href="<?php echo U(GROUP_NAME . '/IndexBoard/toTrach',array('id' => $v['id'],'type' => 0));?>">还原</a>]
                        [<a href="<?php echo U(GROUP_NAME . '/IndexBoard/delete',array('id' => $v['id']));?>">彻底删除</a>]<?php endif; ?>
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
    <p><?php echo ($page); ?></p>
</body>
</html>