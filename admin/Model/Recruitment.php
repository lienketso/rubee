<?php

class Recruitment extends AppModel {

    var $name = 'Recruitment';
    var $displayField = 'name';
    
   public $actsAs = array('Translate' => array('name' => 'nameTranslation', 'shortdes' => 'shortdesTranslation', 'content' => 'contentTranslation'));
    var $validate = array(
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
        'title' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng di?n thông tin',
                'allowEmpty' => false,
                'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'catNew_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng di?n thông tin',
                'allowEmpty' => false,
                'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    var $belongsTo = array(
        'Cataloguesrec' => array(
            'className' => 'Cataloguesrec',
            'foreignKey' => 'cat_id'
        )
    );
    

}

?>
