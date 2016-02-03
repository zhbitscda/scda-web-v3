<?php
/*
 *新闻频道控制器
 */
class NewsAction extends CommonAction{
    
    /*新闻列表显示*/
    public function index(){
        import('ORG.Util.Page');
        $limit = 15;
        $count = M('news')->where(array('del' => 0))->count();
        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();
        $this->news = D('NewsRelation')->getBlogs(0,$limit);
        $this->display();
    }

    /*添加新闻视图*/
    public function addNews(){
        $this->cate = M('news_cate')->select();
        $this->display();
    }

    /*添加新闻表单*/
    public function addNewsHandle(){
        //条件判断
        if(!$_POST['title']){
            $this->error('标题不能为空');
        }else if(!$_POST['summary']){
            $this->error('摘要不能为空');
        }else if(!$_POST['author']){
            $this->error('作者不能为空');
        }else if(!$_POST['cid']){
            $this->error('所属分类不能为空');
        }else if(!$_POST['content']){
            $this->error('内容不能为空');
        }else{
            //如果使用聚焦图就上传图片文件
            if($_POST['flag'] == 1){
                import('ORG.Net.UploadFile');
                $date = date('Ym',time());
                $upload = new UploadFile();
                $upload->allowExts = array('jpg', 'png', 'jpeg', 'bmp','gif'); 
                $upload->savePath = './Uploads/pic/'. $date .'/';
                if(!$upload->upload()){
                    //上传失败打印信息
                    $this->error($upload->getErrorMsg());
                 }else{
                    //上传成功打印信息
                    $info = $upload->getUploadFileInfo();
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
                }
            }


            //组合news表的数据结构
            $data = array(
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'summary' => $_POST['summary'],
                'pic_id' => $pic_id,
                'flag' => $_POST['flag'],
                'author' => $_POST['author'],
                'time' => time(),
                'click' => (int)$_POST['click'],
                'cid' => (int)$_POST['cid'],
                );
            //添加到news表
            if($bid = M('news')->add($data)){
                $this->success("添加成功",U(GROUP_NAME.'/News/index'));
            }else{
                $this->error('添加失败');
            }
        }
    }

    /*新闻分类列表*/
    public function cate(){
        $this->cate = M('news_cate')->select();
        $this->display();
    }

    /*新闻分类修改视图*/
    public function changeCate(){
        $id = (int)$_GET['id'];
        $this->cateDetails = M('news_cate')->find($id);
        $this->display();
    }

    /*新闻分类修改表单*/
    public function changeCateHanle(){
         if(M('news_cate')->save($_POST)){
            $this->success("修改成功",U(GROUP_NAME . '/News/cate'));
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
        if(M('news')->save($update)){
            $this->success($msg.'成功',U(GROUP_NAME . '/News/index'));
        }else{
            $this->error($msg.'失败');
        }
    }

    //回收站
    public function trash(){
        import('ORG.Util.Page');
        $limit = 15;
        $count = M('news')->where(array('del' => 1))->count();
        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();
        $this->news = D('NewsRelation')->getBlogs(1,$limit);
        $this->display('index');
    }

    //删除
    public function delete(){
        $id = (int)$_GET['id'];
        if(M('news')->delete($id)){
            $this->success('删除成功',U(GROUP_NAME . '/News/trash'));
        }else{
            $this->error('删除失败');
        }
    }

    //编辑器图片上传处理
    public function upload(){
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
        $upload->autoSub = true;
        $upload->subType = 'date';
        $upload->dateFormat = 'Ym';

        if($upload->upload('./Uploads/pic/')){
            $info = $upload->getUploadFileInfo();
            // import("ORG.Util.Image");
            // Image::water('./Uploads/'.$info[0]['savename'],'./Data/logo.png');
            //import('Class.Image',APP_PATH);
            //Image::water('./Uploads/'.$info[0]['savename']);
            //去掉文件名的后缀
            $filename = $info[0]['name'];
            $filetype = strrchr($filename, ".");
            $filename = str_replace($filetype,"",$filename);

            $type = $info[0]['extension'];
            if($type == 'jpg'){
                $type = 'image/jpeg';
            }else if($type == 'png'){
                $type = 'image/png';
            }else if($type == 'gif'){
                $type = 'image/gif';
            }else if($type == 'bmp'){
                $type = 'image/bmp';
            }else{
                $type = 'unknow';
            }

            $savePath = __ROOT__.'/Uploads/pic/'. $date .'/'.$info[0]['savename'];
            //组合成upload表的数据结构
            $uploadData = array(
                'name' => $filename,
                'time' => time(),
                'directory' => $savePath,
                'type' => $info[0]['type'],
            );
            //添加到upload表
            M('upload')->add($uploadData);

            echo json_encode(array(
                'url' => $info[0]['savename'],
                'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
                'original' => $info[0]['name'],
                'state' => 'SUCCESS'
                ));
        }else{
            echo json_encode(array(
                'state' => $upload->getErrorMsg()
                ));
        }
     }

}



?>