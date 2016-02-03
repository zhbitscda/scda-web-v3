<?php
/*
 *首页模块控制器
 */
class IndexBoardAction extends CommonAction{
    
    /*列表显示*/
    public function index(){
        import('ORG.Util.Page');
        $limit = 15;
        $count = M('index')->where(array('del' => 0))->count();
        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();
        $this->data = D('IndexBoardRelation')->getIndexes(0,$limit);
        $this->display();
    }

    public function addMessages(){
        $this->cate = M('index_cate')->select();
        $this->display();
    }

    public function addMeassagesHandle(){
        //去除超链接中前面的"http://"用于判断
        $more = $str=substr($_POST['more'],7);//去除前面
        //条件判断
        if(!$_POST['title']){
            $this->error('标题不能为空');
        }else if(!$_POST['content']){
            $this->error('内容介绍不能为空');
        }else if(!$_POST['cate']){
            $this->error('所属分类不能为空');
        }else if(!$more){
            $this->error('超级连接不能为空或填写错误');
        }else{
            //如果使用聚焦图就上传图片文件
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

            //组合index表的数据结构
            $data = array(
                'cate_id' => (int)$_POST['cate'],
                'pic_id' => (int)$pic_id,
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'flag' => $_POST['flag'],
                'time' => time(),
                'more' => $_POST['more'],
                );
            //添加到news表
            if($bid = M('index')->add($data)){
                $this->success("添加成功",U(GROUP_NAME.'/IndexBoard/index'));
            }else{
                $this->error('添加失败');
            }
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
        if(M('index')->save($update)){
            $this->success($msg.'成功',U(GROUP_NAME . '/IndexBoard/index'));
        }else{
            $this->error($msg.'失败');
        }
    }

    //回收站
    public function trash(){
        import('ORG.Util.Page');
        $limit = 15;
        $count = M('index')->where(array('del' => 1))->count();
        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();
        $this->data = D('IndexBoardRelation')->getIndexes(1,$limit);
        $this->display('index');
    }

    //删除
    public function delete(){
        $id = (int)$_GET['id'];
        if(M('index')->delete($id)){
            $this->success('删除成功',U(GROUP_NAME . '/IndexBoard/trash'));
        }else{
            $this->error('删除失败');
        }
    }
}

?>