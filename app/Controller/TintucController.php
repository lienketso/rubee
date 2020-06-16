<?php

/**
 * Description of NewsController
 * @author : Trung Tong
 * @since Oct 19, 2012
 */
class TintucController extends AppController {

    public $name = 'Tintuc';
    public $uses = array('Tintuc','Danhmuc','News','Product');

   public function beforeFilter() {
        parent::beforeFilter();
		     
       
    }
		 public function search_tag($id=null) {
	 
 	 	$this->set('title_for_layout', 'Tìm kiếm Tags');
		$keyword=$id; 
        $this->set('keyword', $keyword);

        // list all product

		$count=$this->Product->find('count',array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE' => '%' . $keyword . '%',
            )));
			
			
		$this->set('count', $count);

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'Product.id DESC, Product.modified DESC',

            'limit' => '9'

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

		$this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,

                'Tintuc.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'Tintuc.id DESC, Tintuc.modified DESC',

            'limit' => '9'

        );

        $listNews = $this->paginate('Tintuc');

        $this->set('listNews', $listNews);
		
		//end tin tức
		
	
				
		$this->paginate = array(

            'conditions' => array(

                'News.status' => 1,

                'News.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'News.id DESC, News.modified DESC',

            'limit' => '9'

        );

        $listtin = $this->paginate('News');

        $this->set('listtin', $listtin);

    }
	
	public function index($id = null) {

        $typeName = $this->Danhmuc->read(null, $id);

        $this->set('typeName', $typeName);		
	
		  $this->set('title_for_layout', $typeName['Danhmuc']['name']);
        $this->set('keywords_for_layout', $typeName['Danhmuc']['meta_key']);
        $this->set('description_for_layout', $typeName['Danhmuc']['meta_des']);
		if($typeName['Danhmuc']['parent_id']==null)
		$this->set('id',$id);
		else $this->set('id',$typeName['Danhmuc']['parent_id']);
		$parmenu = $this->Danhmuc->find('list', array(
            'conditions' => array(
                'Danhmuc.parent_id' => $id,
                'Danhmuc.status' => 1
            )
                ));
		
		$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}

		if($id!=null) {

        // list all Tintuc

        $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,

                'Tintuc.cat_id' => $mang

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',
			'limit'=>5


        );

		

		}

		else {

		       $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,

                

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',
'limit'=>5

        );

		

		}

		

        $listProduct = $this->paginate('Tintuc');

        $this->set('listProduct', $listProduct);

		$this->Session->write('url','dich-vu.html');

		

    }
	  public function search() {

		$keyword='';

        if(isset($_POST['txtsearch'])) {

		$keyword=$_POST['txtsearch'];$this->Session->write('txtsearch',$keyword);

		}

		elseif($this->Session->check('keyword')){$keyword=$this->Session->read('txtsearch');  }

        $this->set('keyword', $keyword);

        // list all Tintuc

		$count=$this->Tintuc->find('count',array(

            'conditions' => array(

                'Tintuc.status' => 1,

                'Tintuc.name LIKE' => '%' . $keyword . '%',
            )));
		$this->set('count', $count);

        $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,

                'Tintuc.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',

            'limit' => '9'

        );

        $listProduct = $this->paginate('Tintuc');

        $this->set('listProduct', $listProduct);

		 $this->Session->write('url','tim-kiem.html');

    }
	public function index1($id = null) {

        $typeName = $this->Danhmuc->read(null, $id);
		$this->set('id',$id);
        $this->set('typeName', $typeName);
		
		  $this->set('title_for_layout', $typeName['Danhmuc']['name']);
        $this->set('keywords_for_layout', $typeName['Danhmuc']['meta_key']);
        $this->set('description_for_layout', $typeName['Danhmuc']['meta_des']);
		$parmenu = $this->Danhmuc->find('list', array(
            'conditions' => array(
                'Danhmuc.parent_id' => $id,
                'Danhmuc.status' => 1
            )
                ));
		
		$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}

		if($id!=null) {

        // list all Tintuc

        $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,
				'Tintuc.cat_id'=>35,

                'Tintuc.cat_id' => $mang

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',


        );

		

		}

		else {

		       $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,
	'Tintuc.cat_id'=>35,
                

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',


        );

		

		}

		

        $listProduct = $this->paginate('Tintuc');

        $this->set('listProduct', $listProduct);

		$this->Session->write('url','danh-sach-tin');

		

    }
	public function index2() {

        // list all dichvu

        $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',

            'limit' => '6'

        );

        $listProduct = $this->paginate('Tintuc');

        $this->set('listProduct', $listProduct);

    }
	public function index3($id = null) {

        $typeName = $this->Danhmuc->read(null, $id);

        $this->set('typeName', $typeName);
		
		$parmenu = $this->Danhmuc->find('list', array(
            'conditions' => array(
                'Danhmuc.parent_id' => $id,
                'Danhmuc.status' => 1
            )
                ));
		
		$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}

		if($id!=null) {

        // list all Tintuc

        $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,
				'Tintuc.cat_id'=>36,

                'Tintuc.cat_id' => $mang

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',


        );

		

		}

		else {

		       $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,
	'Tintuc.cat_id'=>36,
                

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',



        );

		

		}

		

        $listProduct = $this->paginate('Tintuc');

        $this->set('listProduct', $listProduct);

		$this->Session->write('url','danh-sach-tra-cu');

		

    }

   
  public function detail($id = null) {

        $detailNews = $this->Tintuc->findById($id);

        $this->set('detailNews', $detailNews);



		  $this->set('title_for_layout', $detailNews['Tintuc']['name']);
        $this->set('keywords_for_layout', $detailNews['Tintuc']['meta_key']);
        $this->set('description_for_layout', $detailNews['Tintuc']['meta_des']);
		 $typeName = $this->Danhmuc->read(null, $detailNews['Tintuc']['cat_id']);

		 $this->set('typeName', $typeName);
		 if($typeName['Danhmuc']['parent_id']==null)
		 $this->set('id', $detailNews['Tintuc']['cat_id']);
		else $this->set('id',$typeName['Danhmuc']['parent_id']);

		

		  // list all Tintuc

        $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1,

                'Tintuc.cat_id' => $detailNews['Tintuc']['cat_id'],

				'Tintuc.id <>' => $id,

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',

            'limit' => '6'

        );
	
		
		
        $listNews = $this->paginate('Tintuc');

        $this->set('listNews', $listNews);

		$this->Session->write('url','chi-tiet-dich-vu/'.$id.$detailNews['Tintuc']['slug'].'.html');

		

    }
	public function listNews() {

        // list all Tintuc

        $this->paginate = array(

            'conditions' => array(

                'Tintuc.status' => 1

            ),

            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',

            'limit' => '6'

        );

        $listNews = $this->paginate('Tintuc');

        $this->set('listNews', $listNews);

    }

  
  
    
     public function doitac($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'Tintuc.status' => 1,
               'Tintuc.cat_id' => 4
            ),
            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('Tintuc');
        $this->set('listNews', $listNews);
    }
    public function timhieutra($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'Tintuc.status' => 1,
               'Tintuc.cat_id' => 37
            ),
            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('Tintuc');
        $this->set('listNews', $listNews);
    }
     public function thuongthuctra($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'Tintuc.status' => 1,
               'Tintuc.cat_id' => 38
            ),
            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('Tintuc');
        $this->set('listNews', $listNews);
    }
    public function news_2() {

        $duan = $this->Tintuc->find('all', array(
            'conditions' => array(
                'Tintuc.status' => 1,'Tintuc.cat_id'=>12
            ),
            'order' => 'Tintuc.id DESC', 'limit' => 4
                ));
        return $duan;
    }
    
    public function dichvu($id = null) {
        $this->paginate = array(
            'conditions' => array(
                'Tintuc.status' => 1,
                'Tintuc.cat_id' => 17
            ),
            'order' => 'Tintuc.pos DESC, Tintuc.modified DESC',
            'limit' => '6'
        );
        $listNews = $this->paginate('Tintuc');
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