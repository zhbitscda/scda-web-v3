<?php
Class CommonAction extends Action{
    
    public function _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect(GROUP_NAME . '/Login/index' );
        }

        $data = array(
            'id'=>$_SESSION['uid'],
            'logintime' => time(),
        );
        M('user')->save($data);

        $nothAuth = in_array(MODULE_NAME,explode(',', C('NOT_AUTH_MODULE')))||in_array(ACTION_NAME,explode(',', C('NOT_AUTH_ACTION')));

        if(C('USER_AUTH_ON')){
            import('ORG.Util.RBAC');
            RBAC::AccessDecision(GROUP_NAME) || $this->error('没有权限');
        }
    }
}
?>