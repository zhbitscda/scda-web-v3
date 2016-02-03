<?php
/*
 *视频频道控制器
 */


class VideoAction extends CommonAction{


    /*视频列表显示*/
    public function index(){
        import('ORG.Util.Page');
        $limit = 15;
        $count = M('video')->where(array('del' => 0))->count();
        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();
        $this->video = D('VideoRelation')->getBlogs(0,$limit);
        $this->display();
    }

    /*添加视频视图*/
    public function addVideo(){
        $this->cate = M('video_cate')->select();
        $this->id = md5(uniqid(rand(), true)); 
        $this->display();
    }

    /*添加视频表单*/
    public function addVideoHandle(){
        import ( "ORG.Net.UploadFile" );
        if(!$_POST['title']){
            $this->error('标题不能为空');
        }else if(!$_POST['summary']){
            $this->error('摘要不能为空');
        }else if(!$_POST['author']){
            $this->error('作者不能为空');
        }else if(!$_POST['cid']){
            $this->error('所属分类不能为空');
        }else if(!$_POST['pic']){
            $this->error('图片不能为空');
        }else if(isset($_SESSION['fileDir'])){
            $upload1 = new UploadFile ();
            $upload1->allowExts = array('jpg', 'jpeg', 'png', 'gif','bmg'); 
            $upload1->savePath = './Uploads/pic/';
             if (! $upload1->upload ()) {
                echo 11;
                $this->error($upload1->getErrorMsg());
             }
             // 上传成功 获得上传文件信息
            $info = $upload1->getUploadFileInfo ();
            $dir = $info[0]['savepath'].$info[0]['savename'];
            //去掉文件名的后缀
            $filename = $info[0]['name'];
            $filetype = strrchr($filename, ".");
            $filename = str_replace($filetype,"",$filename);

            $savePath = __ROOT__.'/Uploads/pic/'. $date .'/'.$info[0]['savename'];
            //组合成upload表的数据结构
            $uploadData = array(
                'name' => $filename,
                'time' => time(),
                'directory' => $savePath,
                'type' => $info[0]['type'],
            );
            //添加到upload表
            $pic_id = M('upload')->add($uploadData);
            $data = array(
                'title' => $_POST['title'],
                'type' => (int)$_POST['type'],
                'summary' => $_POST['summary'],
                'pic_id' => $pic_id,
                'video_id' => $_SESSION['videoid'],
                'time' => time(),
                'author' => $_POST['author'],
                'click' => (int)$_POST['click'],
                'cid' => (int)$_POST['cid'],
            );
            session('videoid',null);
            session('fileDir',null);
            session('fileName',null);
            if(M('video')->add($data)){
                $this->success('视频发布成功',U(GROUP_NAME . '/Video/index'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $this->error('没有上传文件');
        }
    }

    /*上传视频表单*/
    public function upVideoHandle(){
        set_time_limit(600);  
        if($_SERVER['REQUEST_METHOD']=='POST') {
            import ( "ORG.Net.UploadFile" );
            // 实例化上传类
            $upload = new UploadFile (); 
             // 讴置附件上传类型
            $upload->allowExts = array('avi', 'flv', 'wmv', 'mp4','mov'); 
            $upload->savePath = './Uploads/vid/';
            if (! $upload->upload ()) { 
                echo "<p>格式不对，请格式化后再上传！</p><p>5秒后跳转...</p>";
                echo "<script>
                        setTimeout(function(){
                            window.location.href='" . U(GROUP_NAME . '/Video/button') ."';
                        },5000);
                      window.parent.endProgress();
                      </script>";
            } else { 
                // 上传成功 获得上传文件信息
                $info = $upload->getUploadFileInfo ();
                $dir = $info[0]['savepath'].$info[0]['savename'];
                //去掉文件名的后缀
                $filename = $info[0]['name'];
                $filetype = strrchr($filename, ".");
                $filename = str_replace($filetype,"",$filename);

                $savePath = __ROOT__.'/Uploads/vid/'. $date .'/'.$info[0]['savename'];
                //组合成upload表的数据结构
                $uploadData = array(
                    'name' => $filename,
                    'time' => time(),
                    'directory' => $savePath,
                    'type' => $info[0]['type'],
                );
                //添加到upload表
                $video_id = M('upload')->add($uploadData);
                session('videoid',$video_id);
                session('fileDir',$dir);
                session('fileName',$this->info[0]['name']);
                echo "<p>  " . $_SESSION['fileName'] ."  上传成功</p>";
            }
       }
    }

    /*form表单显示*/
    public function button(){
        if(!isset($_SESSION['fileDir'])){
            $id = $_GET['id'];
            $html = '<form enctype="multipart/form-data" id="upload_form" name="form1" action="'. U(GROUP_NAME.'/Video/upVideoHandle') .'" method="POST">';  
            $html .= '<input type="hidden" name="APC_UPLOAD_PROGRESS" id="progress_key"  value="' . $id .'"/> ';
            $html .= '<input type="file" id="test_file" name="test_file" /><br/><br/>';  
            $html .= '<input onclick="window.parent.startProgress(); return true;" type="submit" value="上传"/> </form>';
            echo $html;
        }else{
            $html = "<p>已上传的视频  " . $_SESSION['fileName'] . "</p>";
            $html .= '<form enctype="multipart/form-data" id="form2" name="form2" action="'. U(GROUP_NAME.'/Video/delete_file') .'" method="POST">'; 
            $html .= '<input type="submit" value="清除文件" />';
            $html .= '</form>';
            echo $html;
        }
        
    }

    /*清除已上传未处理文件*/
    public function delete_file(){
        if(unlink($_SESSION['fileDir'])){
            session('videoid',null);
            session('fileDir',null);
            session('fileName',null);
            $this->redirect(GROUP_NAME.'/Video/button');
        }else{
            echo "<p>删除失败</p>";
        }
    }

    /*进度条*/
    public function place(){
        session_start();  
        if(isset($_GET['progress_key'])) {  
            $status = apc_fetch('upload_'.$_GET['progress_key']);  
            echo ($status['current']/$status['total'])*100;  
        }  
    }

    /*视频分类列表*/
    public function cate(){
        import('Class.Category',APP_PATH);
        $cate = M('video_cate')->order('sort ASC')->select();
        $this->cate = Category::unlimitedForLevel($cate,'&nbsp;&nbsp;&nbsp;---&nbsp;');
        $this->display();
    }

    //修改分类排序处理
    public function sortCate(){
        $db = M('video_cate');
        foreach($_POST as $id => $sort){
            $db->where(array('id'=> $id))->setField('sort',$sort);
        }
        $this->redirect(GROUP_NAME.'/Video/cate');
    }

    /*视频分类修改视图*/
    public function changeCate(){
        $id = (int)$_GET['id'];
        $this->cateDetails = M('video_cate')->find($id);
        $this->display();
    }

    /*视频分类修改表单*/
    public function changeCateHanle(){
         if(M('video_cate')->save($_POST)){
            $this->success("修改成功",U(GROUP_NAME . '/Video/cate'));
         }else{
            $this->error("修改失败");
         }
    }

    //删除到回收站
    public function toTrach($type){
        $type = (int)$_GET['type'];
        $msg = $type ? '删除' : '还原';
        $id = (int)$_GET['id'];
        $update = array(
            'id' => (int)$_GET['id'],
            'del' => $type
            );
        if(M('video')->save($update)){
            $this->success($msg.'成功',U(GROUP_NAME . '/Video/index'));
        }else{
            $this->error($msg.'失败');
        }
    }

    //回收站
    public function trash(){
        import('ORG.Util.Page');
        $limit = 15;
        $count = M('video')->where(array('del' => 1))->count();
        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();
        $this->video = D('VideoRelation')->getBlogs(1,$limit);
        $this->display('index');
    }

    //删除
    public function delete(){
        $id = (int)$_GET['id'];
        if(M('Video')->delete($id)){
            $this->success('删除成功',U(GROUP_NAME . '/Video/trash'));
        }else{
            $this->error('删除失败');
        }
    }

}



?>