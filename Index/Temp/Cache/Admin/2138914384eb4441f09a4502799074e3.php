<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
    <form action="<?php echo U(GROUP_NAME.'/Status/friendsHandle');?>" method="post">
        <table class="table">
            <tr>
                <th colspan="4">友情连接</th>
            </tr>
            <?php if(is_array($data)): foreach($data as $k=>$v): ?><tr>
                    <td align="right">名称:</td>
                    <input type='hidden' name='id[]' value="<?php echo ($v["id"]); ?>"/>
                    <td>
                        <input type="text" name="title[]" value="<?php echo ($v["title"]); ?>" size="40"/>
                    </td>
                    <td align="right">连接地址:</td>
                    <td>
                        <input type="text" name="more[]" value="<?php echo ($v["more"]); ?>" size="40"/>
                    </td>
                </tr><?php endforeach; endif; ?>
            <tr>
                <td colspan = '4' align="center">
                    <input type="submit" value="保存修改"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>