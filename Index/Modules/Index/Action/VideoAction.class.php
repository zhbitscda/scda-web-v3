<?php
/*
 *前台视频频道控制器
 */
class VideoAction extends Action{
    
    //视图显示
    public function index(){
        $this->name = 'Video'; //控制器名称

        /*读取焦距*/
        $field = array('author'); //除去的内容
        $where = array('del' => 0 ,'type' => 1); //非删除的内容
        $limit = 5; //焦距显示的条数
        $this->video_focus = D('VideoDisplayRelation')->relation(true)->field($field,true)->order('time desc')->where($where)->select();

        /*读取简介*/
        $field = array('summary','author'); //除去的内容
        $where = array('del' => 0, 'cid' => 5); //非删除的内容
        $video_intro[] = D('VideoDisplayRelation')->relation(true)->field($field,true)->order('time desc')->where($where)->find();
        $where = array('del' => 0, 'cid' => 6); //非删除的内容
        $video_intro[] = D('VideoDisplayRelation')->relation(true)->field($field,true)->order('time desc')->where($where)->find();
        $where = array('del' => 0, 'cid' => 7); //非删除的内容
        $video_intro[] = D('VideoDisplayRelation')->relation(true)->field($field,true)->order('time desc')->where($where)->find();
        $where = array('del' => 0, 'cid' => 8); //非删除的内容
        $video_intro[] = D('VideoDisplayRelation')->relation(true)->field($field,true)->order('time desc')->where($where)->find();
        $where = array('del' => 0, 'cid' => 9); //非删除的内容
        $video_intro[] = D('VideoDisplayRelation')->relation(true)->field($field,true)->order('time desc')->where($where)->find();
        $where = array('del' => 0, 'cid' => 10); //非删除的内容
        $video_intro[] = D('VideoDisplayRelation')->relation(true)->field($field,true)->order('time desc')->where($where)->find();
        $this->video_intro = $video_intro;

        /*读取现场录像*/
        $field = array('summary','author'); //除去的内容
        $where = array('del' => 0,'cid' => 2); //非删除的内容
        $limit = 4; //焦距显示的条数
        $this->video_scene = D('VideoDisplayRelation')->relation(true)->field($field,true)->limit($limit)->order('time desc')->where($where)->select();

        /*读取新闻播报*/
        $field = array('summary','author'); //除去的内容
        $where = array('del' => 0,'cid' => 3); //非删除的内容
        $limit = 4; //焦距显示的条数
        $this->video_news = D('VideoDisplayRelation')->relation(true)->field($field,true)->limit($limit)->order('time desc')->where($where)->select();

        /*读取其他视频*/
        $field = array('summary','author'); //除去的内容
        $where = array('del' => 0,'cid' => 4); //非删除的内容
        $limit = 4; //焦距显示的条数
        $this->video_others = D('VideoDisplayRelation')->relation(true)->field($field,true)->limit($limit)->order('time desc')->where($where)->select();
        
        /*读取点击排行*/
        $field = array('summary','author'); //除去的内容
        $where = array('del' => 0); //非删除的内容
        $limit = 10; //焦距显示的条数
        $this->video_hot = M('video')->field($field,true)->limit($limit)->order('click desc')->where($where)->select();

        $this->display();
    }

    public function show()
    {
    	$this->name = 'Video'; //控制器名称

    	$id = $_GET['id'];
    	$vid = $_GET['vid'];
    	$this->intro = M('video')->find($id);
    	$this->video = M('upload')->find($vid);
    	$this->display();
    }

}

?>