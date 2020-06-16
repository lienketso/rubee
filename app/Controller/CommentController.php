<?php

/**
 * Description of CommentController
 * @author : Trung Tong
 * @since Oct 19, 2012
 */
class CommentController extends AppController {

    public $name = 'Comment';
    public $uses = array('Comment','Post','Catalogue','Hang', 'Doitac','News', 'Slideshow','CatProduct', 'Link','Support', 'Partner','Banner', 'Tin','Setting','Danhmuc','Tintuc', 'Advertisement', 'Catproduct', 'Recruitment','Post','Cataloguesrec','Product');
 public function listtag() {

        $duan = $this->Doitac->find('all', array(
            'conditions' => array(
                'Doitac.status' => 1,
			
				 
            ),
            'order' => 'Doitac.id DESC','Doitac.id DESC','Doitac.modified DESC',
		
                ));
        return $duan;
    }
	
	function dichvu1($id = null) {
        return $this->Cataloguesrec->find('all', array('conditions' => array('Cataloguesrec.status' => 1,'Cataloguesrec.parent_id' => $id,'Cataloguesrec.status' => 1,), 'order' => 'Cataloguesrec.pos ASC','Cataloguesrec.modified DESC','limit'=>9));
    }
	function dichvu2($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Cataloguesrec ->find('all', array('conditions' => array('Cataloguesrec.status' => 1, 'Cataloguesrec.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Cataloguesrec']['id'];
        }
        return $this->Recruitment->find('all', array('conditions' => array('Recruitment.view' => 0, 'Recruitment.cat_id' => $cat1),'order' => 'Recruitment.modified DESC','limit'=>15 ));
    }
	function duantieubieu($id = null) {
        return $this->Tintuc->find('all', array('conditions' => array('Tintuc.status' => 1,), 'order' => 'Tintuc.id DESC','Tintuc.modified DESC','limit'=>16));
    }
		function duantieubieu2($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Danhmuc ->find('all', array('conditions' => array('Danhmuc.status' => 1, 'Danhmuc.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Danhmuc']['id'];
        }
        return $this->Tintuc->find('all', array('conditions' => array('Tintuc.status' => 1, 'Tintuc.cat_id' => $cat1),'order' => 'Tintuc.modified DESC','limit'=>10 ));
    }
	 public function menu_list_sp($id=null) {
        $mnleft = $this->Catproduct->find('threaded', array(
            'conditions' => array(
                'Catproduct.status' => 1,
				'Catproduct.parent_id'=> $id,
            ),
            'order' => 'Catproduct.id DESC'
                ));
        return $mnleft;
    }
 public function dmdichvu($id=null) {
        $mnleft = $this->Cataloguesrec->find('threaded', array(
            'conditions' => array(
                'Cataloguesrec.status' => 1,
				'Cataloguesrec.parent_id'=> $id,
            ),
            'order' => 'Cataloguesrec.id DESC'
                ));
        return $mnleft;
    }
 
	public function tinblog() {
        
        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				'News.cat_id != ' => 36, 
                'OR' => array('News.cat_id !=' => 62) 
                // 'News.cat_id !=' => 36,
            ),
            'order' => 'News.id DESC','News.modified DESC',
			'limit'=>4
        ));
        return $duan;
    }
		public function tintuc() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				//'News.hot'=>1,
				'News.cat_id'=>38,
					
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>'5'
                ));
        return $duan;
    }
    public function tintuckh() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				//'News.hot'=>1,
				'News.cat_id'=>36,
					
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>'2'
                ));
        return $duan;
    }
	public function dmdichvu1($id=null) {
        $mnleft = $this->Cataloguesrec->find('threaded', array(
            'conditions' => array(
                'Cataloguesrec.status' => 1,
				'Cataloguesrec.parent_id'=> $id,
            ),
            'order' => 'Cataloguesrec.pos ASC',
			'limit'=>3
                ));
        return $mnleft;
    }

	function dmdichvu2($catId = null) {
            $cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Cataloguesrec ->find('all', array('conditions' => array('Cataloguesrec.status' => 1, 'Cataloguesrec.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Cataloguesrec']['id'];
        }
        return $this->Recruitment->find('all', array('conditions' => array('Recruitment.status' => 1, 'Recruitment.cat_id' => $cat1),'order' => 'Recruitment.modified DESC','limit'=>20 ));
    }
function tinblog1($catId = 38) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Catalogue ->find('all', array('conditions' => array('Catalogue.status' => 1, 'Catalogue.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Catalogue']['id'];
        }
        return $this->News->find('all', array('conditions' => array('News.status' => 1, 'News.cat_id' => $cat1),'order' => 'News.modified ASC','limit'=>6 ));
    }
	function getProduct4($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Catproduct ->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Catproduct']['id'];
        }
        return $this->Product->find('all', array('conditions' => array('Product.status' => 1, 'Product.cat_id' => $cat1),'order' => 'Product.modified DESC','limit'=>10 ));
    }
	function get_hang(){
		return $hang=$this->Hang->find('all',array('conditions'=>array('Hang.status'=>1),'order'=>'Hang.pos ASC','Hang.id DESC'));
		
	}
public 	function get_comment($id=null) {
	return $this->Comment->find('all',array('conditions'=>array('Comment.status'=>1,'Comment.product_id'=>$id),'limit'=>20,'order'=>'Comment.id DESC'));
	
	}
	function get_catproduct_id($id=null){
	return $this->Catproduct->findById($id);
	}
	function hang($id=null) {
     $hang1 = $this->Hang->findById($id);
	 return $hang1['Hang']['name'];
}
	  public function get_catproduct_first() {
	return $this->Catproduct->find('first',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>null,),'order'=>'Catproduct.pos ASC'));
	
	}
	public function doitac_bottom() {

        $doitac = $this->Product->find('all', array(
             'conditions' => array(
                'Product.status' => 1
            ),
            'order' => 'Product.modified DESC'
          ));
        return $doitac;
        }
		public function quanlygioithieu() {

        $doitac = $this->Post->find('all', array(
             'conditions' => array(
                'Post.status' => 1
            ),
            'order' => 'Post.pos ASC'
          ));
        return $doitac;
        }
		
		
		function getRecruitment($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Cataloguesrec ->find('all', array('conditions' => array('Cataloguesrec.status' => 1, 'Cataloguesrec.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Cataloguesrec']['id'];
        }
        return $this->Product->find('all', array('conditions' => array('Product.status' => 1, 'Product.cat_id' => $cat1)));
    }
	public function listvideo() { 
		$setting = $this->Tin->find('all', array(
            'conditions' => array(
                'Tin.status' => 1,
				
            ),
            'order' => 'Tin.id DESC',
    
            ));
        return $setting;
	}
	
	 function menu_product($id = null) {
        return $this->Danhmuc->find('all', array('conditions' => array('Danhmuc.status' => 1, 'Danhmuc.parent_id' => $id), 'order' => 'Danhmuc.pos ASC'));
	}
	public function video() { 
		$setting = $this->Tin->find('all', array(
            'conditions' => array(
                'Tin.status' => 1,
				
            ),
            'order' => 'Tin.id DESC',
            'limit' => 1,
            ));
        return $setting;
	}
function loai($id1) {
     $loai1 = $this->Catproduct->findById($id1); return $loai1['Catproduct']['name'];
}function listpro() {
        //return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
        return $this->Product->find('all', array('conditions' => array('Product.status' => 1,'Product.setoff'=>1), 'order' => 'Product.id DESC'));
    }
    // Menu left
   
	public function quangcao_trai() { 
		$qcao = $this->Advertisement->find('all', array(
            'conditions' => array(
                'Advertisement.status' => 1,
                'Advertisement.display' => 1
				
            ),
            'order' => 'Advertisement.pos ASC',
            'limit' => 2,
            ));
        return $qcao;
	}
 public function quangcao_phai() { 
  $qcao = $this->Advertisement->find('all', array(
            'conditions' => array(
                'Advertisement.status' => 1,
                'Advertisement.display' => 2
				
            ),
            'order' => 'Advertisement.pos ASC',
            'limit' => 2,
            ));
        return $qcao;
 }
    // Quang cao
    public function quangcao() {
        $qcao = $this->Advertisement->find('all', array(
            'conditions' => array(
                'Advertisement.status' => 1
            ),
            'order' => 'Advertisement.pos ASC',
            
                ));
        return $qcao;
    }
	 public function gioithieu() {
        $duan = $this->Post->find('all', array(
            'conditions' => array(
                'Post.status' => 1
            ),
            'order' => 'Post.id DESC', 'limit' => 1
                ));
        return $duan;
    }
     function quangcao_left() {
        return $this->Advertisement->find('all', array('conditions' => array('Advertisement.display' => 1, 'Advertisement.status' => 1, ), 'order' => 'Advertisement.id DESC', 'limit' => 1));
    }

    function quangcao_right() {
      return $this->Advertisement->find('all', array('conditions' => array('Advertisement.display' => 2, 'Advertisement.status' => 1, ), 'order' => 'Advertisement.id DESC', 'limit' => 1));

        }
public function getdoitac() {

        $doitac = $this->Doitac->find('all', array(
             'conditions' => array(
                'Doitac.status' => 1, 'Doitac.display' => 1,
				
            ),
            'order' => 'Doitac.id DESC','limit'=>1
          ));
        return $doitac;
        }
		
	public function getdoitac2() {

        $doitac = $this->Doitac->find('all', array(
             'conditions' => array(
                'Doitac.status' => 1,
				 'Doitac.display' => 2,
				
            ),
            'order' => 'Doitac.id DESC','limit'=>15
          ));
        return $doitac;
        }	

    // Cau hinh website
    public function setting() {
        $setting = $this->Setting->find('first');
        return $setting;
    }

    // Banner
     function banner() {
  
        return $this->Banner->find('all', array('conditions' => array('Banner.status' => 1), 'order' => 'Banner.id DESC', 'limit' => 1));
    }
  
    // SLide show
    public function slideshow() {
        $slideshow = $this->Slideshow->find('all', array('conditions' => array('Slideshow.status' => 1,'Slideshow.display' => 1),'order' => 'Slideshow.pos ASC'));
        return $slideshow;

    }
public function slidecon() {
        $slideshow = $this->Slideshow->find('all', array('conditions' => array('Slideshow.status' => 1),'order' => 'Slideshow.pos ASC'));
        return $slideshow;

    }
	public function slidecha() {
        $slideshow = $this->Slideshow->find('all', array('conditions' => array('Slideshow.status' => 1,'Slideshow.display' => 2,),'order' => 'Slideshow.pos ASC'));
        return $slideshow;

    }

    // Ho tro truc tuyen
    public function support1() {
        $support = $this->Support->find('all', array('order' => 'Support.pos ASC', 'limit'=>6));
        return $support;
    }
public function support() {
        $support = $this->Support->find('all', array(
            'conditions' => array(
           
                'Support.status' => 1
            ),
            'order' => 'Support.pos ASC',
                ));
        return $support;
    }
    // Du an noi bat
    public function duannoibat() {
        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.cat_id' => 41,
                'News.status' => 1
            ),
            'order' => 'News.pos ASC','limit'=>5
                ));
        return $duan;
    }

    // Multi menu
    public function multiMenuProduct($parentid = null, $trees = NULL) {
        $parmenu = $this->Catproduct->find('all', array(
            'conditions' => array(
                'Catproduct.parent_id' => $parentid,
                'Catproduct.status' => 1
            )
                ));
        if (count($parmenu) > 0) {
            $trees .= '<ul>';
            foreach ($parmenu as $field) {
                $trees .= '<li><p><a href="' . DOMAIN . 'danh-sach-tin-tuc/' . $field['Catproduct']['id'] . '/' . $field['Catproduct']['slug'] . '.html">' . $field['Catproduct']['name'] . '</a></p>';
                $trees = $this->multiMenuProduct($field['Catproduct']['id'], $trees);
            }
            $trees .='</li></ul>';
        }
        return $trees;
    }   

	public function bepsinhvien() {

        $duan = $this->Product->find('all', array(
            'conditions' => array(
                'Product.status' => 1,
				'Product.spnb' => 1,
            ),
            'order' => 'Product.pos ASC','Product.id DESC','Product.modified DESC', 'limit' => 2
                ));
        return $duan;
    }
	 public function sptieubieu() {

        $duan = $this->Product->find('all', array(
            'conditions' => array(
                'Product.status' => 1,
				 'Product.setoff' => 1,
            ),
            'order' => 'Product.pos ASC','Product.id DESC','Product.modified DESC', 'limit' => 8
                ));
        return $duan;
    }
     public function spbanchay() {

        $duan = $this->Product->find('all', array(
            'conditions' => array(
                'Product.status' => 1,
				// 'Product.saleoff' => 1,
            ),
            'order' => 'Product.pos ASC','Product.id DESC','Product.modified DESC', 'limit' => 8
                ));
        return $duan;
    }
   public function hoatdong() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				'News.cat_id' => 37,
				// 'Product.saleoff' => 1,
            ),
            'order' => 'News.pos ASC','News.id DESC','News.modified DESC',
                ));
        return $duan;
    }
    function count_product() {

        return $this->Product->find('count', array('conditions' => array('Product.status' => 1)));
    }

		public function tintucchung() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				//'News.hot'=>1,
				'News.cat_id'=>37,	
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>'1,5'
                ));
        return $duan;
    }
	public function tuyendung() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				//'News.hot'=>1,
				'News.cat_id'=>38,
					
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>8
                ));
        return $duan;
    }
	public function sukien() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				//'News.hot'=>1,
				'News.cat_id'=>36,	
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>'0,1'
                ));
        return $duan;
    }
		public function sukienchung() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				'News.cat_id'=>36,	
					
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>'1,5'
                ));
        return $duan;
    }
	public function vieclam() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				//'News.hot'=>1,
				'News.cat_id'=>39,	
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>5
                ));
        return $duan;
    }
		public function tuyensinh() {

        $duan = $this->News->find('all', array(
            'conditions' => array(
                'News.status' => 1,
				'News.cat_id'=>38,	
					
            ),
            'order' => 'News.id DESC','News.modified DESC','limit'=>5
                ));
        return $duan;
    }
	 public function doitac() {

        $doitac = $this->Partner->find('all', array(
             'conditions' => array(
                'Partner.status' => 1
            ),
            'order' => 'Partner.pos ASC'
          ));
		  

        return $doitac;
        }
  public function blog($id=38) {

        $duan = $this->Catalogue->find('all', array(
            'conditions' => array(
                'Catalogue.status' => 1,
		'Catalogue.parent_id' => $id,
				 
            ),
            'order' => 'Catalogue.pos ASC','Catalogue.id DESC','Catalogue.modified DESC',
                ));
        return $duan;
    }
	
  public function tinchung($id=36) {

        $duan = $this->Catalogue->find('all', array(
            'conditions' => array(
                'Catalogue.status' => 1,
		'Catalogue.parent_id' => $id,
				 
            ),
            'order' => 'Catalogue.pos ASC','Catalogue.id DESC','Catalogue.modified DESC',
                ));
        return $duan;
    }
	
    function get_product($id = null) {
        return $this->Product->findById($id);
    }

    function catproduct() {
        return $this->Catproduct->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => null),'order'=>'Catproduct.pos ASC'));
    }

    function getproduct($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Catproduct ->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Catproduct']['id'];
        }
        return $this->Product->find('all', array('conditions' => array('Product.status' => 1,'Product.setoff'=>1, 'Product.cat_id' => $cat1), 'limit'=>8,'order'=>'Product.pos DESC'));
    }
    function getProduct1($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Catproduct ->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Catproduct']['id'];
        }
        return $this->Product->find('all', array('conditions' => array('Product.status' => 1, 'Product.cat_id' => $cat1), 'limit'=>8));
    }
    function link() {
        //return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
        return $this->Link->find('all', array('conditions' => array('Link.status' => 1), 'order' => 'Link.id DESC'));
    }
	  function menu_left($id = null) {
        return $this->Catproduct->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $id), 'order' => 'Catproduct.pos ASC'));
    }

	 function menu_left_ca($id = null) {
        return $this->Catproduct->find('all', array('conditions' => array('Catproduct.status' => 1,'Catproduct.parent_id'=>$id, 'Catproduct.name !=' => NULL, 'Catproduct.id !='=>274), 'order' => 'Catproduct.pos ASC'));
    }
	function menu_ca($id = null) {
        return $this->Catalogue->find('all', array('conditions' => array('Catalogue.status' => 1, 'Catalogue.parent_id' => $id), 'order' => 'Catalogue.pos ASC'));
    }

	

    function get_catproduct($id=null){
	
	return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.setoff'=>1),'order'=>'Catproduct.pos'));
	}



   
}