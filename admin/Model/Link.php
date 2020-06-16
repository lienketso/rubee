<?php

class Link extends AppModel {

    var $name = 'Link';
    var $displayField = 'name';
     public $actsAs = array('Translate' => array('name' => 'nameTranslation'));

    var $validate = array(
        'id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
        ),
        'title' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng điền thông tin',
                'allowEmpty' => false,
                'required' => false,
            ),
        ),
        'catPost_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng điền thông tin',
                'allowEmpty' => false,
                'required' => false,
 
            ),
        ),
    );


}

?>
