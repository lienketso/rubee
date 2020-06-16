<?php

class Cataloguesrec extends AppModel {

    var $name = 'Cataloguesrec';
    var $displayField = 'name';
   public $actsAs = array('Tree','Translate' => array('name' => 'nameTranslation', 'shortdes' => 'shortdesTranslation', 'content' => 'contentTranslation'));
  var $belongsTo = array(
        'ParentCat' => array(
            'className' => 'Cataloguesrec',
            'foreignKey' => 'parent_id'
        )
    );
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
    var $hasMany = array(
        'Recruitment' =>
        array('className' => 'Recruitment',
            'conditions' => array('Recruitment.status' => 1),
            'order' => '',
            'limit' => '',
            'foreignKey' => 'cat_id',
            'dependent' => true,
            'exclusive' => false,
            'finderQuery' => '',
            'fields' => '',
            'offset' => '',
            'counterQuery' => ''
        )
    );

}

?>
