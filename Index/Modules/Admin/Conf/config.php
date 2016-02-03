<?php
return array(

    'RBAC_SUPPERADMIN' => 'admin',     //超级管理员名称
    'ADMIN_AUTH_KEY' => 'superadmin',  //超级管理员识别
    'USER_AUTH_ON' => true,            //是否开启验证
    'USER_AUTH_TYPE' => 2,             //验证类型（1：登录验证，2：时时验证)
    'USER_AUTH_KEY' => 'uid',          //用户认证识别号
    'NOT_AUTH_MODULE' => 'Index',           //无需认证的控制器
    'NOT_AUTH_ACTION' => 'addUserHandle,addNewsHandle,changeCateHanle,upload,changeCate,toTrach,delete,upVideoHandle,addVideoHandle,button,delete_file,place',           //无需认证的动作方法
    'RBAC_ROLE_TABLE' => 'role',       //角色表名称
    'RBAC_USER_TABLE' =>  'role_user', //角色与用户的中间表名称
    'RBAC_ACCESS_TABLE' => 'access',   //权限表名称
    'RBAC_NODE_TABLE' => 'node',       //节点表名称

    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/' . APP_NAME . '/Modules/' . GROUP_NAME . '/Tpl/Public'

    ),

    'URL_HTML_SUFFIX' => '',
);

?>