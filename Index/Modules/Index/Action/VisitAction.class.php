<?php
/*
 *前台企业参观控制器
 */
class VisitAction extends Action{
    
    //视图显示
    public function index(){
        $this->name = 'Visit'; //控制器名称
        $this->display();
    }

}

?>