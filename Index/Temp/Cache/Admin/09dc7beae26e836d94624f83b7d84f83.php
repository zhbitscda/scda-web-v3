<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
    <form action="<?php echo U(GROUP_NAME.'/News/changeCateHanle');?>" method="post">
        <table class="table">
            <tr>
                <th colspan="2">新闻分类修改</th>
            </tr>
            <tr>
                <td align="right">分类名称:</td>
                <td>
                    <input type="text" name="name" value="<?php echo ($cateDetails["name"]); ?>"/>
                </td>
            </tr>
            <tr>
                <td align="right">分类颜色:</td>
                <td>
                    <input type="text" name="color" value="<?php echo ($cateDetails["color"]); ?>" />
                </td>
            </tr>
            <tr>
                <td colspan = '2' align="center">
                    <input type="hidden" name="id" value='<?php echo ($cateDetails["id"]); ?>' />
                    <input type="submit" value="保存修改"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>