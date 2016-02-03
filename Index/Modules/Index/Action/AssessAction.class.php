<?php
/*
 *前台职业测评控制器
 */
class AssessAction extends Action{
    
    //视图显示
    public function index(){
        import('ORG.Util.Page');
        $this->name = 'Assess';    //控制器名称

        //查询列表信息
        $field = array('content'); //除去的内容
        $where = array('del' => 0);//非删除的内容
        $count = M('assess')->where($where)->count();
        $page = new Page($count,10);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->data = M('assess')->field($field,true)->limit($limit)->order('time desc')->where($where)->select();
        $this->page = $page->show();
        $this->display();

    }

    public function show(){
        $this->name = 'Assess';    //控制器名称
        $id = $_GET['id'];
        $this->data = M('assess')->field('summary',true)->find($id);
        $this->display();
    }

}

?>