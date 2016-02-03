<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
        <table class="table">
            <tr >
                <th colspan="2">个人信息</th>
            </tr>
            <tr height="50px">
                <td align="right" width="45%">学号:</td>
                <td>
                    <p><?php echo ($person["username"]); ?></p>
                </td>
            </tr>
            <tr height="50px">
                <td align="right">姓名:</td>
                <td>
                    <p><?php echo ($person["plname"]); ?></p>
                </td>
            </tr>
            <tr height="50px">
                <td align="right">学院:</td>
                <td>
                    <p><?php echo ($person["pldept"]); ?></p>
                </td>
            </tr>
            <tr height="50px">
                <td align="right">专业:</td>
                <td>
                    <p><?php echo ($person["plmajor"]); ?></p>
                </td>
            </tr>             
            <tr height="50px">
                <td align="right">生日:</td>
                <td>
                    <p><?php echo ($person["plbirthday"]); ?></p>
                </td>
            </tr>
            <tr height="50px">
                <td align="right">籍贯:</td>
                <td>
                    <p><?php echo ($person["plorigo"]); ?></p>
                </td>
            </tr>
            <tr height="50px">
                <td align="right" >部门:</td>
                <td>
                    <ul>
                        <?php if(is_array($person["department"])): foreach($person["department"] as $key=>$v): ?><li><?php echo ($v["name"]); ?>&nbsp;&nbsp;--&nbsp;&nbsp;<?php echo ($v["post"]); ?></li><?php endforeach; endif; ?>
                    </ul>
                </td>
            </tr>
        </table>
</body>
</html>