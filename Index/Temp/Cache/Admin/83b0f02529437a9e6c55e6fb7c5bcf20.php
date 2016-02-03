<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<script src="__PUBLIC__/Js/jquery-1.4.4.min.js" language="javascript"></script>
<script language="javascript"> 
    var proNum=0;  
    var loop=0;  
    var progressResult; 
    function sendURL() {  
                $.ajax({  
                            type : 'GET',  
                            url : "<?php echo U(GROUP_NAME . '/Video/place');?>?progress_key=<?php echo ($id); ?>",  
                            async : true,  
                            cache : false,  
                            dataType : 'json',  
                            data: "progress_key=<?php echo ($id); ?>",  
                            success : function(e) {  
                                         progressResult = e;  
                                          proNum=parseInt(progressResult);  
                                          document.getElementById("progressinner").style.width = proNum+"%";  
                                          document.getElementById("showNum").innerHTML = proNum+"%";  
                                          if ( proNum < 100){  
                                            setTimeout("getProgress()", 100);  
                                          }   
                                       
                            }  
                });  
        
    }  
      
    function getProgress(){  
     loop++;  
      
     sendURL();  
    }  

    var interval; 

    function startProgress(){  
        document.getElementById("progressouter").style.display="block";  
        setTimeout("getProgress()", 100);  
    }

    function endProgress(){
        proNum=0;  
        document.getElementById("progressouter").style.display="none";
        document.getElementById("showNum").style.display="none";
    }


    </script>
</head>
<body>
    <form enctype="multipart/form-data" action="<?php echo U(GROUP_NAME.'/Video/addVideoHandle');?>" method="post">
        <table class="table">
            <tr>
                <th colspan="2">视频发布</th>
            </tr>
            <tr>
                <td align="right" width="10%">所属分类:</td>
                <td>
                    <select name='cid'>
                        <option value="">=== 请选择分类 ===</option>
                        <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">标题:</td>
                <td>
                    <input type="text" name="title" size='50'/>
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
                    <input type="text" name="click" id="a" value="100" />
                </td>
            </tr>
            <tr>
                <td align="right">聚焦:</td>
                <td>
                    <input type="radio" value="0" checked="checked" name="focus" />否(图片比例180x100)
<input type="radio" value="1" name="focus" />是(480x250)
                </td>
            </tr>
            <tr>
                <td align="right">图片:</td>
                <td>
                    <input type='file' name='pic'/>
                </td>
            </tr>
            <tr>
                <td align="right">视频比例:</td>
                <td>
                    <input type="radio" value="0" checked="checked" name="type" />4:3(正常)
<input type="radio" value="1" name="type" />16:9(宽屏)
                </td>
            </tr>  
            <tr>
                <td align="right">视频上传:</td>
                <td>
                    <iframe id="theframe" name="theframe" src="<?php echo U(GROUP_NAME . '/Video/button');?>?id=<?php echo ($id); ?>" style="border: 0; height: 100px; width: 400px;" >   
                    </iframe>
                    <div id="progressouter" style="width: 500px; height: 20px; border: 6px solid Silver; display:none;">  
                        <div id="progressinner" style="position: relative; height: 20px; background-color: #990000; width: 0%; "></div>  
                    </div>  
                    <div id='showNum'></div><br>  
                    <div id='showNum2'></div><br>
                    <div></div>
                    <p>(*注意：只支持FLV、WMV格式)</p>
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