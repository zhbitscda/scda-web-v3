<?php

class StatusRelationModel extends RelationModel{

    Protected $tableName = 'user';

    Protected $_link = array(
        'personnel' => array(
            'mapping_type' => BELONGS_TO,
            'foreign_key' => 'pid',
            'mapping_fields' => 'plname',
            'as_fields' => 'plname:name'
            )

        );

}
     


?>