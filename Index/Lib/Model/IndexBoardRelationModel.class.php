<?php

class IndexBoardRelationModel extends RelationModel{

    Protected $tableName = 'index';

    Protected $_link = array(
        'index_cate' => array(
            'mapping_type' => BELONGS_TO,
            'mapping_name' => 'index_cate',
            'foreign_key' => 'cate_id',
            'mapping_fields' => 'name',
            'as_fields' => 'name:cate_name'
        ),
        'upload' => array(
            'mapping_type' => BELONGS_TO,
            'mapping_name' => 'upload',
            'foreign_key' => 'pic_id',
            'mapping_fields' => 'directory,name',
            'as_fields' => 'directory:pic_directory,name:pic_name'
        )

    );

    public function getIndexes ($type = 0 , $limit){
        
        $field = array('del');
        $where = array('del' => $type);
        return $this->field($field,true)->where($where)->relation(true)->limit($limit)->order('time desc')->select();
    }

    public function show ($limit, $cate_id,$type = 0 ){
        
        $field = array('del');
        $where = array('del' => $type,'cate_id' => $cate_id);
        return $this->field($field,true)->where($where)->relation(true)->limit($limit)->order('time desc');
    }


}



?>