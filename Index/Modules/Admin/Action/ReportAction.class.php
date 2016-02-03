<?php
/*
 *调研报告控制器
 */
class ReportAction extends CommonAction{
    
    /*调研报告列表显示*/
    public function index(){
        import('ORG.Util.Page');
        $limit = 15; //显示条数
        $where = array('del' => 0); //显示回收站
        $count = M('report')->where($where)->count(); //计算总共条数

        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();
        
        $this->report = M('report')->limit($limit)->where($where)->order('time desc')->select();
        $this->display('index');
    }

    /*添加调研报告视图*/
    public function addReport(){
        $this->display();
    }

    /*添加调研报告表单*/
    public function addReportHandle(){
        $data = array(
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'summary' => $_POST['summary'],
            'author' => $_POST['author'],
            'time' => time(),
            'click' => (int)$_POST['click'],
            );

       if($bid = M('report')->add($data)){
            $this->success("添加成功",U(GROUP_NAME.'/Report/index'));
       }else{
            $this->error('添加失败');
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
        if(M('report')->save($update)){
            $this->success($msg.'成功',U(GROUP_NAME . '/Report/index'));
        }else{
            $this->error($msg.'失败');
        }
    }

    //回收站
    public function trash(){
        import('ORG.Util.Page');
        $limit = 15; //显示条数
        $where = array('del' => 1); //显示回收站
        $count = M('report')->where($where)->count(); //计算总共条数

        $page = new Page($count,$limit);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->page = $page->show();

        $this->report = M('report')->limit($limit)->where($where)->order('time desc')->select();
        $this->display('index');
    }

    //删除
    public function delete(){
        $id = (int)$_GET['id'];
        if(M('report')->delete($id)){
            $this->success('删除成功',U(GROUP_NAME . '/Report/trash'));
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