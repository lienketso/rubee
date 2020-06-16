<?php

class SlidenivoController extends AppController {

    public $uses = array(
        'Slideshow',
    );

    public function index() {
        $this->autoRender = TRUE;       
        $slideshow = $this->Slideshow->find('all',
            array(
                'fields'=>array(
                    'Slideshow.name',
                    'Slideshow.images',
                    'Slideshow.link',
                ),
                'condtions'=>array(
                    'Slideshow.status'=>1,
                ),
                'order' => 'Slideshow.pos ASC'
            )
        );
        $this->set("slideshow",$slideshow);
    }

}
