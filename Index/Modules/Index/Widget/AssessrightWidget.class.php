<?php

class AssessrightWidget extends Widget{

    public function render($data){
        //查询部门介绍
        $field = array('introduce');
        $where = array('name'=>'职业测评');
        $data['intro'] = M('program')->where($where)->field($field)->find();

        //查询热门信息
        $field = array('id,title,click,del'); //除去的内容
        $where = array('del' => 0);//非删除的内容
        $data['hot'] = M('assess')->field($field)->limit(10)->order('click desc')->where($where)->select();


        return $this->renderFile('',$data);
    }
}

?>