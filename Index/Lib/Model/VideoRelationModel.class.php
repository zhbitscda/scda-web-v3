<?php

class VideoRelationModel extends RelationModel{

    Protected $tableName = 'video';

    Protected $_link = array(
        'video_cate' => array(
            'mapping_type' => BELONGS_TO,
            'mapping_name' => 'cate',
            'foreign_key' => 'cid',
            'mapping_fields' => 'name,color',
            'as_fields' => 'name:cate,color:color'
            )

        );

    public function getBlogs ($type = 0 , $limit){
        $field = array('del');
        $where = array('del' => $type);
        return $this->field($field,true)->where($where)->relation(true)->limit($limit)->order('time desc')->select();
    }

}



?>