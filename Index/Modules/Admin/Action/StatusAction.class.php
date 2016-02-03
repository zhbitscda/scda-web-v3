<?php
/*
 *网站状态控制器
 */
class StatusAction extends CommonAction{


    /*在线用户列表显示*/
    public function index(){
        $nowUser = array();
        $count = D('StatusRelation')->relation(true)->select();
        foreach($count as $v){
            if(time()-$v['logintime'] < 1440){
                if($v['username'] == 'admin'){
                    $v['name'] = '超级管理员';
                }
                $nowUser[] = $v;
            }
        }
        $this->nowUser = $nowUser;
        $this->display();
    }

    /*友情连接列表*/
    public function friends(){
        $this->setsql = array();
        $limit = 10; //显示条数
        $this->data = M('friends')->limit($limit)->select();
        $this->display();
    }

    /*友情连接表单处理*/
    public function friendsHandle(){
        //组合数据结构 (*可再优化)
        $data = array();
        foreach($_POST['id'] as $k => $v ){
            $data[$k]['id'] = $v; 
        }
        foreach($_POST['title'] as $k => $v ){
            $data[$k]['title'] = $v; 
        }
        foreach($_POST['more'] as $k => $v ){
            $data[$k]['more'] = $v; 
        }
        foreach($data as $v){
            M('friends')->save($v);
        }
        $this->success("修改成功");
    }
}

?>