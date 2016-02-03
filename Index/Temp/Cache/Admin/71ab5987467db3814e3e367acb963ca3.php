<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
    <form enctype="multipart/form-data" action="<?php echo U(GROUP_NAME.'/IndexBoard/addMeassagesHandle');?>" method="post">
        <table class="table">
            <tr>
                <th colspan="2">添加信息</th>
            </tr>
            <tr>
                <td align="right" width="150px">标题:</td>
                <td>
                    <input type="text" name="title" size="40" style="color:black" />
                </td>
            </tr>
            <tr>
                <td align="right">内容介绍:</td>
                <td>
                    <input type="text" name="content" size="120" style="color:black"/>
                </td>
            </tr>
            <tr>
                <td align="right">显示区域:</td>
                <td>
                    <?php if(is_array($cate)): foreach($cate as $key=>$v): if($key == 0): ?><input type="radio" value="<?php echo ($v["id"]); ?>" checked="checked" name="cate"/><?php echo ($v["name"]); ?>&nbsp;
                        <?php else: ?>
                            <input type="radio" value="<?php echo ($v["id"]); ?>" name="cate"/><?php echo ($v["name"]); ?>&nbsp;<?php endif; endforeach; endif; ?>
                </td>
            </tr>
            <tr>
                <td align='right'>图片说明:</td>
                <td>
                    <p style="color:red">注意:</p>
                    <p style="color:red">顶 部 图：最优尺寸:640x320&nbsp;正常比例:16:9</p>
                    <p style="color:red">其 它 图：最优尺寸:1200x600&nbsp;正常比例:4:3</p>
                </td>
            </tr>    
            <tr>
                <td align='right'>上传图片:</td>
                <td>
                    <input id='pic' type='file' name='pic'style="color:black" />
                </td>
            </tr>
            <tr>
                <td align="right">超链接地址:</td>
                <td>
                    <input type="text" name="more" size="50" value="http://" style="color:black"/>
                </td>
            </tr>
            <tr>
                <td colspan = '2' align="center">
                    <input type="submit" value="保存添加"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>