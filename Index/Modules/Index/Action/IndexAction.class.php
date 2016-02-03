<?php
/*
 *前台首页控制器
 */
class IndexAction extends Action{
    
    //视图显示
    public function index(){
        $limit = 3; //首页聚焦显示的条数
        $this->top = D('IndexBoardRelation')->show($limit ,1)->select();
        $this->upLeft = D('IndexBoardRelation')->show(1 ,2)->find();
        $this->upMiddle= D('IndexBoardRelation')->show(1 ,3)->find();
        $this->upRight = D('IndexBoardRelation')->show(1 ,4)->find();
        $this->downLeft = D('IndexBoardRelation')->show(1 ,5)->find();
        $this->downMiddle= D('IndexBoardRelation')->show(1 ,6)->find();
        $this->downRight = D('IndexBoardRelation')->show(1 ,7)->find();
        $this->display();
    }

}

?>