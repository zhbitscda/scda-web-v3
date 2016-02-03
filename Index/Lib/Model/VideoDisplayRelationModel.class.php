<?php

class VideoDisplayRelationModel extends RelationModel{

    Protected $tableName = 'video';

    Protected $_link = array(
        'upload' => array(
            'mapping_type' => BELONGS_TO,
            'foreign_key' => 'pic_id',
            'mapping_fields' => 'directory',
            'as_fields' => 'directory:pic_directory'
        )

    );

}



?>