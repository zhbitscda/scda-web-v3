<?php
/*
 *前台就业信息控制器
 */
class JobAction extends Action{
    
    //视图显示
    public function index(){
        import('ORG.Util.Page');
        $this->name = 'Job';    //控制器名称

        //查询列表信息
        $field = array('content'); //除去的内容
        $where = array('del' => 0);//非删除的内容
        $count = M('job')->where($where)->count();
        $page = new Page($count,10);
        $limit = $page->firstRow . ',' . $page->listRows;
        $this->data = M('job')->field($field,true)->limit($limit)->order('time desc')->where($where)->select();
        $this->page = $page->show();
        $this->display();

    }

    public function show(){
        $this->name = 'Job';    //控制器名称
        $id = $_GET['id'];
        $this->data = M('job')->field('summary',true)->find($id);
        $this->display();
    }

}

?>