<?php
/*
 *前台新闻动态控制器
 */
class NewsAction extends Action{
    

    //视图显示
    public function index(){
        $this->name = 'News'; //控制器名称

        //新闻播报
        $field = array('author'); //除去的内容
        $where = array('del' => 0, 'cid' => 3); //非删除的内容
        $limit = 3; //显示的条数
        $this->news_video = D('VideoDisplayRelation')->relation(true)->limit($limit)->field($field,true)->order('time desc')->where($where)->select();
        //p($this->news_video);
        //die;
        $this->display();
    }

}

?>