<?php

class VipRelationModel extends RelationModel{

    Protected $tableName = 'personnel';

    Protected $_link = array(
        'department' => array(
            'mapping_type' => MANY_TO_MANY,
            'mapping_name' => 'department',
            'foreign_key' => 'pers_id',
            'relation_foreign_key' =>'depa_id',
            'relation_table' => 'pers_depa_post',
            'mapping_fields' => 'name',
            ),
        'post' => array(
            'mapping_type' => MANY_TO_MANY,
            'mapping_name' => 'post',
            'foreign_key' => 'pers_id',
            'relation_foreign_key' =>'post_id',
            'relation_table' => 'pers_depa_post',
            'mapping_fields' => 'name',
            )

        );

}
     


?>