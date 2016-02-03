<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    window.UEDITOR_HOME_URL = '__ROOT__/Data/ueditor';
    window.onload = function(){
        window.UEDITOR_CONFIG.initialFrameHeight = 500;
        window.UEDITOR_CONFIG.initialFrameWidth = 1040;
        window.UEDITOR_CONFIG.imageUrl = "<?php echo U(GROUP_NAME.'/Job/upload');?>";            
        window.UEDITOR_CONFIG.imagePath = '__ROOT__/Uploads/pic/'; 

        UE.getEditor('content');
    }
</script>
</head>
<body>
    <form action="<?php echo U(GROUP_NAME.'/Job/addJobHandle');?>" method="post">
        <table class="table">
            <tr>
                <th colspan="2">就业信息发布</th>
            </tr>
            <tr>
                <td align="right">标题:</td>
                <td>
                    <input type="text" name="title" />
                </td>
            </tr>
            <tr>
                <td align="right">作者:</td>
                <td>
                    <input type="text" name="author" />
                </td>
            </tr>
            <tr>
                <td align="right">摘要:</td>
                <td>
                    <input type="text" name="summary" size="100" />
                </td>
            </tr>            
            <tr>
                <td align="right">点击次数:</td>
                <td>
                    <input type="text" name="click" value="100" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="content" id="content" align="center"></textarea>
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