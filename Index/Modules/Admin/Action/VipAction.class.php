<?php
/*
 *会员系统控制器
 */
class VipAction extends CommonAction{
    
    /*个人信息视图*/
    public function index(){
        $id = $_SESSION[C('USER_AUTH_KEY')]; //取得用户的ID
        $where = array('id' => $id);
        $field = array('pid,username');
        $user= M('user')->where($where)->field($field)->find(); //在user表里取得pid和username
        $pid = $user['pid'];
        $username = $user['username'];
        if($pid == 0){
            echo "<P>超级管理员</p>";
        }else{
            $where = array('id' => $pid);
            $person = D('VipRelation')->where($where)->relation(true)->find();
            foreach($person['post'] as $k=>$v){
                    $person['department'][$k]['post'] = $v['name'];
            }
            $person['username'] = $username;
            $this->person = $person;
            $this->display();
        }
    }

}

?>