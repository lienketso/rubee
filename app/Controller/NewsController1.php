<?php

/**
 * Description of NewsController
 * @author : Trung Tong
 * @since Oct 19, 2012
 */
class NewsController extends AppController {

    public $name = 'News';
    public $uses = array('News','Catalogue');
 public function beforeFilter() {
        parent::beforeFilter();
		
    }
    public function index($id = null) {
 $typeName = $this->Catalogue->read(null, $id);
$this->set('typeName', $typeName);	
$this->set('title_for_layout',$typeName['Catalogue']['name']);
$this->set('keywords_for_layout', $typeName['Catalogue']['meta_key']);
        $this->set('description_for_layout', $typeName['Catalogue']['meta_des']);
$parmenu = $this->Catalogue->find('list', array(
            'conditions' => array(
                'Catalogue.parent_id' => $id,
                'Catalogue.status' => 1
            )
                ));
$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}
if($id!=null) {
// list all News
$this->paginate = array(
'conditions' => array(
'News.status' => 1,
'News.cat_id' => $mang
),
'order' => 'News.id DESC, News.modified DESC',
'limit' => '16'
);
}
else {
$this->paginate = array(
'conditions' => array(
'News.status' => 1,),
'order' => 'News.id DESC, News.modified DESC',
'limit' => '16'
);
}$listNews = $this->paginate('News');
$this->set('listNews', $listNews);
$this->Session->write('url','san-pham');
}

public function indextd($id = 62) {
 $typeName = $this->Catalogue->read(null, $id);
$this->set('typeName', $typeName);	
$this->set('title_for_layout',$typeName['Catalogue']['name']);
$this->set('keywords_for_layout', $typeName['Catalogue']['meta_key']);
        $this->set('description_for_layout', $typeName['Catalogue']['meta_des']);
$parmenu = $this->Catalogue->find('list', array(
            'conditions' => array(
                'Catalogue.parent_id' => $id,
                'Catalogue.status' => 1
            )
                ));
$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}
if($id!=null) {
// list all News
$this->paginate = array(
'conditions' => array(
'News.status' => 1,
'News.cat_id' => $mang
),
'order' => 'News.id DESC, News.modified DESC',
'limit' => '16'
);
}
else {
$this->paginate = array(
'conditions' => array(
'News.status' => 1,),
'order' => 'News.id DESC, News.modified DESC',
'limit' => '16'
);
}$listNews = $this->paginate('News');
$this->set('listNews', $listNews);
$this->Session->write('url','san-pham');
}

 public function blog($id = 38) {
 $typeName = $this->Catalogue->read(null, $id);
$this->set('typeName', $typeName);	
$this->set('title_for_layout',$typeName['Catalogue']['name']);
$this->set('keywords_for_layout', $typeName['Catalogue']['meta_key']);
        $this->set('description_for_layout', $typeName['Catalogue']['meta_des']);
$parmenu = $this->Catalogue->find('list', array(
            'conditions' => array(
                'Catalogue.parent_id' => $id,
               // 'Catalogue.status' => 1
            )
                ));
$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}
if($id!=null) {
// list all News
$this->paginate = array(
'conditions' => array(
'News.cat_id' => $mang
),
'order' => 'News.id DESC, News.modified ASC',
'limit' => '11'
);
}
else {
$this->paginate = array(
'conditions' => array(
'News.status' => 1,),
'order' => 'News.id DESC, News.modified DESC',
'limit' => '6'
);
}$listNews = $this->paginate('News');
$this->set('listNews', $listNews);
$this->Session->write('url','san-pham');
}


public function khachhang($id = 36) {
 $typeName = $this->Catalogue->read(null, $id);
$this->set('typeName', $typeName);	
$this->set('title_for_layout',$typeName['Catalogue']['name']);
$this->set('keywords_for_layout', $typeName['Catalogue']['meta_key']);
        $this->set('description_for_layout', $typeName['Catalogue']['meta_des']);
$parmenu = $this->Catalogue->find('list', array(
            'conditions' => array(
                'Catalogue.parent_id' => $id,
               // 'Catalogue.status' => 1
            )
                ));
$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}
if($id!=null) {
// list all News
$this->paginate = array(
'conditions' => array(

'News.cat_id' => $mang
),
'order' => 'News.id DESC, News.modified ASC',
'limit' => '16'
);
}
else {
$this->paginate = array(
'conditions' => array(
'News.status' => 1,),
'order' => 'News.id DESC, News.modified DESC',
'limit' => '6'
);
}$listNews = $this->paginate('News');
$this->set('listNews', $listNews);
$this->Session->write('url','san-pham');
}
	public function index11($id = null) {
     $typeName = $this->Catalogue->read(null, $id);
		$this->set('id',$typeName['Catalogue']['parent_id']);
        $this->set('typeName', $typeName);
		$this->set('title_for_layout',$typeName['Catalogue']['name']);
        $this->paginate = array(
            'conditions' => array(
                'News.status' => 1,
           
            ),
            'order' => 'News.id DESC, News.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('News');
        $this->set('listNews', $listNews);
//        print_r($listNews);die;
        
    }

 public function detail($id = null) {

        $detailNews = $this->News->findById($id);

        $this->set('detailNews', $detailNews);

		
$this->set('title_for_layout',$detailNews['News']['name']);
$this->set('keywords_for_layout', $detailNews['News']['meta_key']);
        $this->set('description_for_layout', $detailNews['News']['meta_des']);
		 $typeName = $this->Catalogue->read(null, $detailNews['News']['cat_id']);

		 $this->set('typeName', $typeName);

		 

		  // list all News

        $this->paginate = array(

            'conditions' => array(

                'News.status' => 1,

                'News.cat_id' => $detailNews['News']['cat_id'],

			
            ),

            'order' => 'RAND()',

            'limit' => '6'

        );
	
		
		
        $listNews = $this->paginate('News');

        $this->set('listNews', $listNews);

		$this->Session->write('url','chi-tiet-dich-vu/'.$id.$detailNews['News']['slug'].'.html');

		

    }
    

 public function detailblog($id = null) {

        $detailNews = $this->News->findById($id);

        $this->set('detailNews', $detailNews);

		
$this->set('title_for_layout',$detailNews['News']['name']);
$this->set('keywords_for_layout', $detailNews['News']['meta_key']);
        $this->set('description_for_layout', $detailNews['News']['meta_des']);
		 $typeName = $this->Catalogue->read(null, $detailNews['News']['cat_id']);

		 $this->set('typeName', $typeName);

		 

		  // list all News

        $this->paginate = array(

            'conditions' => array(

                'News.status' => 1,

                'News.cat_id' => $detailNews['News']['cat_id'],

			
            ),

            'order' => 'News.id DESC, News.modified DESC',

            'limit' => '12'

        );
	
		
		
        $listNews = $this->paginate('News');

        $this->set('listNews', $listNews);

		$this->Session->write('url','chi-tiet-dich-vu/'.$id.$detailNews['News']['slug'].'.html');

		
		
		
        $this->paginate = array(

            'conditions' => array(

                'News.status' => 1,

             //   'News.cat_id' => $detailNews['News']['cat_id'],

			
            ),

            'order' => 'News.id DESC, News.modified DESC',

            'limit' => '6'

        );
	
		
		
        $listNews1 = $this->paginate('News');

        $this->set('listNews1', $listNews1);

		//$this->Session->write('url','chi-tiet-dich-vu/'.$id.$detailNews['News']['slug'].'.html');


    }
    
     public function doitac($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'News.status' => 1,
               'News.cat_id' => 4
            ),
            'order' => 'News.id DESC, News.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('News');
        $this->set('listNews', $listNews);
    }
    public function tinvan($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'News.status' => 1,
               'News.cat_id' => 18
            ),
            'order' => 'News.id DESC, News.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('News');
        $this->set('listNews', $listNews);
    }
     public function dichvuluatsu($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'News.status' => 1,
               'News.cat_id' => 19
            ),
            'order' => 'News.id DESC, News.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('News');
        $this->set('listNews', $listNews);
    }
    public function news_2() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,'News.cat_id'=>12
            ),
            'order' => 'News.id DESC', 'limit' => 4
                ));
        return $duan;
    }
    
    public function dichvu($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'News.status' => 1,
                'News.cat_id' => 17
            ),
            'order' => 'News.id DESC, News.modified DESC',
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