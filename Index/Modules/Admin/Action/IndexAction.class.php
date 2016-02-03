<?php
/*
 *后台首页控制器
 */
class IndexAction extends CommonAction{
    
    //视图显示
    public function index(){
        $this->display();
    }

    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect(GROUP_NAME. '/Login/index');
    }
}

?>