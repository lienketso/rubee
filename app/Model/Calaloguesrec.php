<?php

class Cataloguesrec extends AppModel {

    var $name = 'Cataloguesrec';
    var $displayField = 'name';
     public $actsAs = array('Tree', 'Translate' => array('name' => 'nameTranslation', 'shortdes' => 'shortdesTranslation', 'content' => 'contentTranslation'));

}

?>
