<?php



/**

 * Description of ProductController

 * @author : Trung Tong

 * @since Oct 19, 2012

 */

class RecruitmentController extends AppController {

    public $name = 'Recruitment';

    public $uses = array('Cataloguesrec', 'Recruitment');
	  public function beforeFilter() {
        parent::beforeFilter();
		  
       
    }
   public function index1($id = null) {

        $typeName = $this->Cataloguesrec->read(null, $id);

        $this->set('typeName', $typeName);
		if( $typeName['Cataloguesrec']['name']){
		  $this->set('title_for_layout', $typeName['Cataloguesrec']['name']);
		  }else {
		  $this->set('title_for_layout', 'Dịch vụ');
		  }
        $this->set('keywords_for_layout', $typeName['Cataloguesrec']['meta_key']);
        $this->set('description_for_layout', $typeName['Cataloguesrec']['meta_des']);
		$parmenu = $this->Cataloguesrec->find('list', array(
            'conditions' => array(
                'Cataloguesrec.parent_id' => $id,
                'Cataloguesrec.status' => 1
            )
                ));
		
		$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}

		if($id!=null) {

        // list all Recruitment

        $this->paginate = array(

            'conditions' => array(

                'Recruitment.status' => 1,

                'Recruitment.cat_id' => $mang

            ),

            'order' => 'Recruitment.pos DESC, Recruitment.modified DESC',

        );

		

		}

		else {

		       $this->paginate = array(

            'conditions' => array(

                'Recruitment.status' => 1,

                

            ),

            'order' => 'Recruitment.pos DESC, Recruitment.modified DESC',

        );

		

		}

		

        $listRecruitment = $this->paginate('Recruitment');

        $this->set('listRecruitment', $listRecruitment);

		$this->Session->write('url','thu-vien-anh');

		

    }

     public function index($id = null) {

        $typeName = $this->Cataloguesrec->read(null, $id);

 
		  $this->set('typeName', $typeName);
		  $this->set('title_for_layout', 'Album ảnh');
        $this->set('keywords_for_layout', $typeName['Cataloguesrec']['meta_key']);
        $this->set('description_for_layout', $typeName['Cataloguesrec']['meta_des']);
		$parmenu = $this->Cataloguesrec->find('list', array(
            'conditions' => array(
                'Cataloguesrec.parent_id' => $id,
                'Cataloguesrec.status' => 1
            )
                ));
		
		$mang=array();$i=0;
		$mang[$i++]=$id;
		foreach($parmenu as $key=>$value){
		$mang[$i++]=$key;
		}

		if($id!=null) {

        // list all Recruitment

        $this->paginate = array(

            'conditions' => array(

                'Recruitment.status' => 1,

                'Recruitment.cat_id' => $mang

            ),

            'order' => 'Recruitment.pos DESC, Recruitment.modified DESC',

            'limit' => '16'

        );

		

		}

		else {

		       $this->paginate = array(

            'conditions' => array(

                'Recruitment.status' => 1,

                

            ),

            'order' => 'Recruitment.pos DESC, Recruitment.modified DESC',

            'limit' => '6'

        );

		

		}

		

        $listRecruitment = $this->paginate('Recruitment');

        $this->set('listRecruitment', $listRecruitment);

		$this->Session->write('url','tu-lieu');

		

    }

    public function detail($id = null) {

        $detailNews = $this->Recruitment->findById($id);

        $this->set('detailNews', $detailNews);

		 $this->set('title_for_layout', $detailNews['Recruitment']['name']);
        $this->set('keywords_for_layout', $detailNews['Recruitment']['meta_key']);
        $this->set('description_for_layout', $detailNews['Recruitment']['meta_des']);

		 $typeName = $this->Cataloguesrec->read(null, $detailNews['Recruitment']['cat_id']);

		 $this->set('typeName', $typeName);

		 

		  // list all Recruitment

        $this->paginate = array(

            'conditions' => array(

                'Recruitment.status' => 1,

                'Recruitment.cat_id' => $detailNews['Recruitment']['cat_id'],

				'Recruitment.id <>' => $id,

            ),

            'order' => 'Recruitment.pos DESC, Recruitment.modified DESC',

            'limit' => '6'

        );

        $listRecruitment = $this->paginate('Recruitment');

        $this->set('listRecruitment', $listRecruitment);

		$this->Session->write('url','chi-tiet-tu-lieu/'.$id.$detailNews['Recruitment']['slug'].'.html');

		

    }



    public function listrecruitment() {

        // list all Recruitment

        $this->paginate = array(

            'conditions' => array(

                'Recruitment.status' => 1

            ),

            'order' => 'Recruitment.pos DESC, Product.modified DESC',

            'limit' => '6'

        );

        $listRecruitment = $this->paginate('Recruitment');

        $this->set('listRecruitment', $listRecruitment);

    }
 function catrecruitment($cat_id=null) {
       $cat= $this->Catproduct->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $cat_id)));
       $this->set('cat',$cat);
       
    }

function getrecruitment($cat_id=null) {
       $cat= $this->Product->find('all', array('conditions' => array('Product.status' => 1, 'Product.cat_id' => $cat_id)));
       $this->set('cat',$cat);
       
    }
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
function get_product($id = null) {
        return $this->Product->findById($id);
    }
    function getProduct1($catId = null) {$cat1 = array();
        $cat1[0]=$catId;$i=1;
        $cat = $this-> Catproduct ->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $catId)));

        foreach ($cat as $row){
            $cat1[$i++]=$row['Catproduct']['id'];
        }
        return $this->Product->find('all', array('conditions' => array('Product.status' => 1, 'Product.cat_id' => $cat1), 'limit'=>1));
    }
    public function search() {

		$keyword='';

        if(isset($_POST['txtsearch'])) {

		$keyword=$_POST['txtsearch'];$this->Session->write('txtsearch',$keyword);

		}

		elseif($this->Session->check('keyword')){$keyword=$this->Session->read('txtsearch');  }

        $this->set('keyword', $keyword);

        // list all Recruitment

		$count=$this->Recruitment->find('count',array(

            'conditions' => array(

                'Recruitment.status' => 1,

                'Recruitment.name LIKE' => '%' . $keyword . '%',
            )));
		$this->set('count', $count);

        $this->paginate = array(

            'conditions' => array(

                'Recruitment.status' => 1,

                'Recruitment.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'Recruitment.pos DESC, Recruitment.modified DESC',

            'limit' => '6'

        );

        $listRecruitment = $this->paginate('Recruitment');

        $this->set('listRecruitment', $listRecruitment);

		 $this->Session->write('url','tim-kiem.html');

    }
}