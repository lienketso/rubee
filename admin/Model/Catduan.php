<?php

class Catduan extends AppModel {

    public $name = 'Catduan';
	public $actsAs = array('Tree','Sluggable' => array('label' => 'name'));
    public $belongsTo = array(
        'ParentCat' => array(
            'className' => 'Catduan',
            'foreignKey' => 'parent_id'
        )
    );
    public $validate = array(
        'id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng điền thông tin',
                'allowEmpty' => false,
                'required' => true,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    // public $hasMany = array(
        // 'Duan' =>
        // array('className' => 'Duan',
            // 'conditions' => array('Duan.status' => 1),
            // 'order' => '',
            // 'limit' => '',
            // 'foreignKey' => 'cat_id',
            // 'dependent' => true,
            // 'exclusive' => false,
            // 'finderQuery' => '',
            // 'fields' => '',
            // 'offset' => '',
            // 'counterQuery' => ''
        // )
    // );

}

?>
