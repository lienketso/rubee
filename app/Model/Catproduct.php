<?php

class Catproduct extends AppModel {

    var $name = 'Catproduct';
    var $displayField = 'name';
    var $actsAs = array('Tree', 'Translate' => array('name'));

}

?>
