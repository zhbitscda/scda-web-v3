<?php
/*
 *后台登入控制器
 */
class LoginAction extends Action{

    public function _initialize(){
        if(isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect(GROUP_NAME.'/Admin/index');
        }
    }
    
    //视图显示
    public function index(){
        $this->display();
    }

    //登录表单操作
    public function login(){

        //判断是否使用post方法传值
        if(!IS_POST) halt('页面错误');

        //读取数据库账号信息
        $db = M('user');
        $user = $db->where(array('username'=>I('username')))->find();

        if (!$user || $user['password']!= I('password')){
            $this->error('账号或密码错误');
        }

        //更新最后一次登录时间与IP
        $data = array(
            'id'=>$user['id'],
            'logintime' => time(),
            'loginip' => get_client_ip(),
        );
        $db->save($data);

        //设置session
        session(C('USER_AUTH_KEY'),$user['id']);
        session('username',$user['username']);
        session('logintime',date('Y-m-d H:i:s',$user['logintime']));
        session('loginip',$user['loginip']);

        //超级管理员识别
        if($user['username'] == C('RBAC_SUPPERADMIN')){
            session(C('ADMIN_AUTH_KEY'),true);
        }

        //读取用户权限
        import('ORG.Util.RBAC');
        RBAC::saveAccessList();

        redirect(__GROUP__);

    }
}

?>