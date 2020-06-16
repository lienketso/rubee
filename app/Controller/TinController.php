<?php

/**
 * Description of NewsController
 * @author : Trung Tong
 * @since Oct 19, 2012
 */
class TinController extends AppController {

    public $name = 'Tin';
    public $uses = array('Tin','Tintuc','Catalogue','Danhmuctui');
	  public function beforeFilter() {
       $this->layout='index';
    }
    public function index3($id = null) { 
        $this->paginate = array(
            'conditions' => array(
                'Tin.status' => 1,
             
            ),
            'order' => 'Tin.pos DESC, Tin.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('Tin');
        $this->set('listNews', $listNews);
//        print_r($listNews);die;
        
    }

   // public function detail($id = null) {
//	$this->set('detailNews',$this->Tui->findById($id));
	
  //  }
  public function index() {

        // list all Tin

        $this->paginate = array(

            'conditions' => array(

                'Tin.status' => 1

            ),

            'order' => 'Tin.id DESC, Tin.modified DESC',

            'limit' => '4'

        );

        $listNews = $this->paginate('Tin');

        $this->set('listNews', $listNews);

    }
  public function detail($id = null) {
		
        $detailNews = $this->Tin->findById($id);
        $this->set('detailNews', $detailNews);

		

		 $typeName = $this->Tin->read(null, $detailNews['Tin']['cat_id']);

		 $this->set('typeName', $typeName);

		 

		  // list all Tin

        $this->paginate = array(

            'conditions' => array(

                'Tin.status' => 1,

                'Tin.cat_id' => $detailNews['Tin']['cat_id'],

				'Tin.id <>' => $id,

            ),

            'order' => 'Tin.pos DESC, Tin.modified DESC',

            'limit' => '1'

        );

        $listNews = $this->paginate('Tin');

        $this->set('listNews', $listNews);

		$this->Session->write('url','chi-tiet-so-luoc/'.$id.$detailNews['Tin']['slug'].'.html');

		

    }
	public function listNews() {

        // list all Tin

        $this->paginate = array(

            'conditions' => array(

                'Tin.status' => 1

            ),

            'order' => 'Tin.pos DESC, Tin.modified DESC',

            'limit' => '6'

        );

        $listNews = $this->paginate('Tin');

        $this->set('listNews', $listNews);

    }

  
    
	
	public function ketnoidoanhnghiep($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'News.status' => 1,
               'News.cat_id' => 25
            ),
            'order' => 'News.pos DESC, News.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('News');
        $this->set('listNews', $listNews);
    }
//    
//    public function baogia($id = null) {
//        $this->paginate = array(
//            'conditions' => array(
//                'News.status' => 1,
//                'News.cat_id' => 5
//            ),
//            'order' => 'News.pos DESC, News.modified DESC',
//            'limit' => '12'
//        );
//        $listNews = $this->paginate('News');
//        $this->set('listNews', $listNews);
//    }

}