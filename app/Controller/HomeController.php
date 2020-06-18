<?php
App::import('Vendor', 'ckeditor');
App::import('Vendor', 'ckfinder');

/**
 * Description of HomeComtroller
 * @author : Trung Tong
 * @since Oct 19, 2012
 */
class HomeController extends AppController {

    public $name = 'Home';
    public $uses = array('Catalogue','News','Comment','Email','Product', 'Catproduct', 'Setting', 'Post','Slideshow');

    public function beforeFilter() {
        parent::beforeFilter();
	
        $setting = $this->Setting->find('first');
        $this->set('title_for_layout', $setting['Setting']['title']);
        $this->set('keywords_for_layout', $setting['Setting']['meta_key']);
        $this->set('description_for_layout', $setting['Setting']['meta_des']);
    }
	public function comment($product_id=null){
		
		if($_POST['email']!='' && $_POST['content'] !='') {
		
			$data['Comment']['email']= htmlspecialchars($_POST['email']);
		//	$data['Comment']['title']=$_POST['title'];
			$data['Comment']['content']=htmlspecialchars($_POST['content']);
			$data['Comment']['product_id']=$product_id;
			$data['Comment']['status']=0;
			$this->Comment->save($data['Comment']);
			
			echo "<script>location.href='".DOMAIN."chi-tiet-san-pham/".$product_id."'</script>";
			
		}
			die;
	}
	function bando(){
	}
function hoidap(){
	
	/*if(!$this->Session->check('email')){
		echo "<script>alert('Bạn phải đăng nhập mới được vào xem hỏi đáp!');</script>";
				echo "<script>location.href='".DOMAIN."dang-nhap.html'</script>";
	}
	else {*/
	
	$this->paginate=array('conditions'=>array('Email.status'=>1),'order'=>'Email.id DESC','limit'=>150);
	
	
	
	$this->set('email',$this->paginate('Email',array()));
	/*}*/
	
	}
	
	public function addhoidap(){


	if(!empty($this->request->data)){ 
		$data['Email']= $this->data['Email'];
	
		if(strlen($data['Email']['content'])<5 || strlen($data['Email']['content'])>2000)
		{
		echo '<script>alert("Câu hỏi ít nhất 5 ký tự và không vượt quá 2000 ký tự!")</script>';
		
		echo "<script>history.back(-1);</script>"; 
		
		
		}
		else{
		
		$this->Email->save($data);
		  echo '<script language="javascript"> alert("Gửi message thành công"); history.back(-1);</script>';
	
		}
	
	}
	}
	
	public function get_traloi($id=null){
	
	$email=$this->Email->find('first',array('conditions'=>array('Email.hoi_id'=>$id),'order'=>array('Email.created DESC')));
	return $email;

	}
    public function index($id = null) {
	$this->layout='trangchu';
        $typeName = $this->Catproduct->read(null, $id);
        $this->set('typeName', $typeName);

       // $groupId = $this->Catalogue->generateTreeList(array('Catalogue.parent_id' => $id), null, null);
    //    $arrId = array($id);
    //   foreach ($groupId as $key => $values) {
    //        $arrId[] = $key;
   //    }
		
		  // list all sản phẩm nổi bật
        $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
            //    'News.cat_id' =>  $arrId,
					'Product.setoff' => 1,
            ),
            'order' => 'Product.pos ASC, Product.modified DESC',
            'limit' => '18'
        );
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
		
		
		
    }
	public function slideshow($id = null){
	$detailNews = $this->Slideshow->findById($id);
        $this->set('detailNews', $detailNews);
		
	}

    public function detail($id = null) {
        $detailNews = $this->Product->findById($id);
        $this->set('detailNews', $detailNews);
    }

    public function listproduct() {
        // list all product
        $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1
            ),
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '12'
        );
        $listProduct = $this->paginate('Product');
        $this->set('listProduct', $listProduct);
    }


    public function introduction() {
        // Gioi thieu
		
        $about = $this->Post->find('first');
        $this->set('about', $about);
			$this->set('title_for_layout','Giới thiệu');//pr($typeName);die;
    }

    function search() {
        if (isset($_POST['key'])) {
            $this->Session->write('key',htmlspecialchars($_POST['key']));
        }
        $name = $this->Session->read('key');
        mysql_query("SET names utf8");
        $this->set('title_for_layout', 'Sản phẩm tìm thấy');
        $this->paginate = array('conditions' => array('Product.status' => 1, 'Product.name like' => '%' . $name . '%'), 'order' => 'Product.modified DESC', 'limit' => 6);
        $this->set('products', $this->paginate('Product', array()));

    }

}