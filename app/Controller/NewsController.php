<?php

/**
 * Description of NewsController
 * @author : Trung Tong
 * @since Oct 19, 2012
 */
class NewsController extends AppController {

    public $name = 'News';
    public $uses = array('News','Catalogue', 'Administrator', 'Doitac', 'news_related');
    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function price($input) {
    	return strrev(wordwrap(strrev($input),3,'.',true));
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
        'order' => 'News.pos DESC',
        'limit' => '16'
        );
        }
        else {
        $this->paginate = array(
        'conditions' => array(
        'News.status' => 1,
        ),
        'order' => 'News.pos DESC',
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
                    )));
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
        }
        $listNews = $this->paginate('News');
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
        // if($id!=null) {
        //     // list all News
        //     $this->paginate = array(
        //     'conditions' => array(
        //     'News.cat_id' => $mang
        //     ),
        //     'order' => 'News.id DESC, News.modified ASC',
        //     'limit' => '11'
        //     );
        // }
        if($id!=null) {
            // list all News
            // $this->paginate = array('conditions' => array('News.cat_id' => $mang), 'order' => 'News.id DESC, News.modified ASC','limit' => '11');
            $this->paginate = array(
                'fields' => array('User.fullname', 'News.*'),
                'conditions' => array('News.cat_id' => $mang),
                'joins' => array(
                    array(
                        'alias' => 'User',
                        'table' => 'administrators',
                        'type' => 'INNER',
                        'conditions' => '`User`.`id` = `News`.`auth_id`'
                    )
                ),
                'limit' => 16,
                'order' => 'News.id DESC , News.modified ASC'
            );
        }
        else {
            $this->paginate = array(
            'conditions' => array(
            'News.status' => 1,),
            'order' => 'News.id DESC, News.modified DESC',
            'limit' => '6'
            );
        }
        $newsAuth = $this->Administrator->find('first', array('joins' => array(
                                                        array(
                                                            'table' => 'news',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.auth_id = Administrator.id', 'Administrator.id'=>4
                                                            )
                                                        )
                                                    )));
        $this->set('newsAuth', $newsAuth);
        
        $listNews = $this->paginate('News');
        // debug($listNews);
        // die();

            
        $this->set('listNews', $listNews);
        $this->Session->write('url','san-pham');
    }

    public function tags($slug = '', $id = 0) {
        $tagTite = $this->Doitac->find('first', array('conditions' => array('id'=>$id)));
        $this->set('typeName', $tagTite);  
        $this->set('title_for_layout', $tagTite['Doitac']['name']);
       
        if($id!=null) {
            // list all News
            // $this->paginate = array('conditions' => array('News.cat_id' => $mang), 'order' => 'News.id DESC, News.modified ASC','limit' => '11');
            $find_news_relation_id = $this->news_related->find('all', array('conditions'=>array('news_related.tag_id'=>$id, 'news_related.type' => 'BLOG')));
            $list_news_relation_id = array();
            foreach ($find_news_relation_id as $row) {
                $list_news_relation_id[] = $row['news_related']['news_id'];
            }
            // debug($list_news_relation_id);
            // die();
            $this->paginate = array(
                'fields' => array('User.fullname', 'News.*'),
                'conditions' => array('News.id' => $list_news_relation_id),
                'joins' => array(
                    array(
                        'alias' => 'User',
                        'table' => 'administrators',
                        'type' => 'INNER',
                        'conditions' => '`User`.`id` = `News`.`auth_id`'
                    )
                ),
                'limit' => 11,
                'order' => 'News.id DESC , News.modified ASC'
            );
        }
        else {
            $this->paginate = array(
            'conditions' => array(
            'News.status' => 1,),
            'order' => 'News.id DESC, News.modified DESC',
            'limit' => '6'
            );
        }
        $newsAuth = $this->Administrator->find('first', array('joins' => array(
                                                        array(
                                                            'table' => 'news',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.auth_id = Administrator.id', 'Administrator.id'=>4
                                                            )
                                                        )
                                                    )));
        $this->set('newsAuth', $newsAuth);
        
        $listNews = $this->paginate('News');
        // debug($listNews);
        // die();

            
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
        'order' => 'News.pos ASC, News.modified ASC',
        'limit' => '32'
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
    // print_r($listNews);die;
    }

    public function detail($id = null) {
        $detailNews = $this->News->findById($id);
        $this->set('detailNews', $detailNews);
    
        $newsAuth = $this->Administrator->find('first', array('joins' => array(
                                                        array(
                                                            'table' => 'news',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.auth_id = Administrator.id', 'NewsJoin.id'=>$id
                                                            )
                                                        )
                                                    )));
    
        $this->set('newsAuth', $newsAuth);

        $newsCat = $this->Catalogue->find('first', array('joins' => array(
                                                        array(
                                                            'table' => 'news',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.cat_id = Catalogue.id', 'NewsJoin.id'=>$id
                                                            )
                                                        )
                                                    )));
    
        $this->set('newsCat', $newsCat);

        $auth_id = $newsAuth['Administrator']['id'];
        $news_count = $this->Administrator->find('count', array('joins' => array(
                                                        array(
                                                            'table' => 'news',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.auth_id = Administrator.id', 'Administrator.id'=>$auth_id
                                                            )
                                                        )
                                                    )));
    
        $this->set('news_count', $news_count);
		
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

            'limit' => '6'
        );
	
		$this->News->id = $detailNews['News']['id'];
        if($this->News->id)
        {
           $this->News->saveField('view', $detailNews['News']['view'] + 1 );
        }
		
        $listNews = $this->paginate('News');

        $tagRalation = $this->Doitac->find('all', array('joins' => array(
                                                        array(
                                                            'table' => 'news_relateds',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.tag_id = Doitac.id', 'NewsJoin.news_id'=>$id
                                                            )
                                                        )
                                                    )));
    
        $this->set('tagRalation', $tagRalation);
        // debug($tagRalation);
        // die();

        $list_news_id_relation = array();

        foreach ($tagRalation as $value) {
            $newsRalation = $this->news_related->find('all', array('joins' => array(
                                                        array(
                                                            'table' => 'doitacs',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'news_related.tag_id = NewsJoin.id', 'NewsJoin.id'=>$value['Doitac']['id']
                                                            )
                                                        )
                                                    )));
            foreach ($newsRalation as $row) {
                if($row['news_related']['news_id'] != $id)
                    $list_news_id_relation[] = $row['news_related']['news_id'];
            }

        }
        $list_news_id_relation = array_unique ($list_news_id_relation);

        $list_news_relation = $this->News->find('all', array('conditions'=>array('News.id'=>$list_news_id_relation,'News.status' => 1), 'limit'=>10));
        $this->set('list_news_relation', $list_news_relation);

        $this->set('listNews', $listNews);

		$this->Session->write('url','chi-tiet-dich-vu/'.$id.$detailNews['News']['slug'].'.html');	
    }

    public function chitiettd($id = null) {
        $detailNews = $this->News->findById($id);
        $this->set('detailNews', $detailNews);
        
        $newsAuth = $this->Administrator->find('first', array('joins' => array(
                                                        array(
                                                            'table' => 'news',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.auth_id = Administrator.id', 'NewsJoin.id'=>$id
                                                            )
                                                        )
                                                    )));
    
        $this->set('newsAuth', $newsAuth);
        
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

            'limit' => '6'
        );
    
        $this->News->id = $detailNews['News']['id'];
        if($this->News->id)
        {
           $this->News->saveField('view', $detailNews['News']['view'] + 1 );
        }
        
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
   
    // public function baogia($id = null) {
    //     $this->paginate = array(
    //        'conditions' => array(
    //            'News.status' => 1,
    //            'News.cat_id' => 5
    //        ),
    //        'order' => 'News.pos DESC, News.modified DESC',
    //        'limit' => '12'
    //     );
    //     $listNews = $this->paginate('News');
    //     $this->set('listNews', $listNews);
    // }

     public function search() {

        $keyword='';

        if(isset($_POST['txtsearch'])) {

        $keyword=$_POST['txtsearch'];$this->Session->write('txtsearchnews',$keyword);

        }

        elseif($this->Session->check('keyword')){$keyword=$this->Session->read('txtsearchnews');  }

        $this->set('keyword', $keyword);

        $count=$this->News->find('count',array(

            'conditions' => array(

                'News.status' => 1,

                'News.name LIKE' => "%" . $keyword . "%",
            )));
        $this->set('count', $count);
        $newsAuth = $this->Administrator->find('first', array('joins' => array(
                                                        array(
                                                            'table' => 'news',
                                                            'alias' => 'NewsJoin',
                                                            'type' => 'INNER',
                                                            'conditions' => array(
                                                                'NewsJoin.auth_id = Administrator.id', 'Administrator.id'=>4
                                                            )
                                                        )
                                                    )));
        $this->set('newsAuth', $newsAuth);
        $this->paginate = array(

            'conditions' => array(

                'News.status' => 1,
                'News.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'News.id DESC , News.modified ASC',

            'limit' => '24'

        );

        $listNews = $this->paginate('News');

        $this->set('listNews', $listNews);

         $this->Session->write('url','tim-kiem-tin.html');

    }
}