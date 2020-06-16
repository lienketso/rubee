<?php

class Duan extends AppModel {

    public $name = 'Duan';
    public $displayField = 'name';
	public $actsAs = array( 'Sluggable' => array('label' => 'name'));
    public $validate = array(
        'id' => array(
            'notempty' => array(
                'rule' => array('notempty')
            ),
        ),
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng điền thông tin',
                'allowEmpty' => false,
                'required' => false
            ),
        ),
        'cat_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng điền thông tin',
                'allowEmpty' => false,
                'required' => false
            ),
        ),
    );
    public $belongsTo = array(
        'Catduan' => array(
            'className' => 'Catduan',
            'foreignKey' => 'cat_id'
        )
    );

}

?>
