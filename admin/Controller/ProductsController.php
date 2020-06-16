<?php

App::import('Vendor', 'upload');

App::import('Vendor', 'ckeditor');

App::import('Vendor', 'ckfinder');



/**

 * Description of ProductsController

 * @author : Trung Tong

 * @since 09-10-2012

 */

class ProductsController extends AppController {



    public $name = 'Products';

    public $uses = array('Product','Emaildk','Setting','Hang');



    public function beforeFilter() {

        parent::beforeFilter();

        $this->layout = 'admin';

        if (!$this->Session->read("id") || !$this->Session->read("name")) {

            $this->redirect('/');

        }

    }



    /**

     * Danh sách sản phẩm

     * @author Trung Tong

     */

    public function index() {

        $this->paginate = array(

            'order' => 'Product.pos ASC, Product.id DESC',

            'limit' => '20'

        );

        $product = $this->paginate('Product');

        $this->set('product', $product);



        // Lưu đường dẫn để quay lại nếu update, edit, dellete

        $urlpro = DOMAINAD . $this->request->url;

        $this->Session->write('urlpro', $urlpro);



        // Tang so thu tu * limit (example : 10)

        $urlTmp = DOMAINAD . $this->request->url;

        $urlTmp = explode(":", $urlTmp);

        if (isset($urlTmp[2])) {

            $startPage = ($urlTmp[2] - 1) * 10 + 1;

        } else {

            $startPage = 1;

        }

        $this->set('startPage', $startPage);



        // Xoa session thang search

        $this->Session->delete('catId');

        $this->Session->delete('keyword');

        $this->Session->delete('pageproduct');



        // Load model

        $this->loadModel("Catproduct");

        $list_cat = $this->Catproduct->generateTreeList(null, null, null, '-- ');

        $this->set(compact('list_cat'));

		$list_hang = $this->Hang->find('list',array('conditions'=>array('Hang.status'=>1)));
        $this->set(compact('list_hang'));

		

	}



    /**

     * Change position

     * @author Trung -Tong

     */

    function changepos() {

        $vitri = $_REQUEST['order'];

        $setoff = $_REQUEST['setoff'];
	///	$saleoff = $_REQUEST['saleoff'];
//
		//$hot = $_REQUEST['hot'];

     //   $new = $_REQUEST['new'];

		//$spnb = $_REQUEST['spnb'];

        // Update order

        foreach ($vitri as $k => $v) {

			if($v == "") {

				$v = null;

			}

            $this->Product->updateAll(

                array(

                'Product.pos' => $v,

             //   'Product.setoff' => $setoff[$k],

			 //   'Product.saleoff' => $saleoff[$k],
	
           //   'Product.hot' => $hot[$k],
			//	'Product.new' => $new[$k],

               // 'Product.spnb' => $spnb[$k],

                ), array(

                'Product.id' => $k)

            );

        }

        if($this->Session->check('pageproduct')) {

			$this->redirect($this->Session->read('pageproduct'));

			exit;

		} else {

			$this->redirect('/products');

			exit;

		}

    }



    /**

     * Xu ly cac chuc nang lua chon theo so nhieu

     * @author Trung -Tong

     */

    public function process() {

	

        $process = $_REQUEST['process'];

        $chon = $_REQUEST['chon'];

        if (count($chon) == 0 || $process < 1) {

			if($this->Session->check('pageproduct')) {

				$this->redirect($this->Session->read('pageproduct'));

				exit;

			} else {

				$this->redirect('/products');

				exit;

			}            

        }

		

        switch ($process) {

            case '1' :

                // Update active

                foreach ($chon as $k => $v) {

                    $this->Product->updateAll(

                        array(

                        'Product.status' => 1

                        ), array(

                        'Product.id' => $k)

                    );

                }

                break;



            case '2' :

                // Update deactive

                foreach ($chon as $k => $v) {

                    $this->Product->updateAll(

                        array(

                        'Product.status' => 0

                        ), array(

                        'Product.id' => $k)

                    );

                }

                break;



            case '3' :

                // delete many rows

                $groupId = "";

                foreach ($chon as $k => $v) {

                    $groupId .= "," . $k;

                }

                $groupId = substr($groupId, 1);

                $conditions = array(

                    'Product.id IN (' . $groupId . ')'

                );

                $this->Product->deleteAll($conditions);

                break;

        }

        if ($this->Session->check('pageproduct')) {

            $this->redirect($this->Session->read('pageproduct'));

        } else {

            $this->redirect(array('action' => 'index'));

        } 

		

		

		

		

		

		

		

		

		

    }



    /**

     * Thêm sản phẩm

     * @author Trung Tong

     */

    public function add() {

        if (!empty($this->request->data)) {

            $this->Product->create();

            $data['Product'] = $this->data['Product'];

			$img=isset($_POST['userfile1'])?$_POST['userfile1']:'';

		//	$data['Product']['images2']=isset($_POST['userfile2'])?$_POST['userfile2']:'';

		//	$data['Product']['images3']=isset($_POST['userfile3'])?$_POST['userfile3']:'';

           

            $data['Product']['images'] = $img;

            if ($this->Product->save($data['Product'])) {

                if ($this->Session->check('pageproduct')) {

                    $this->redirect($this->Session->read('pageproduct'));

					

					//Gửi mail sản phẩm mới

					$sanpham=$this->Product->find('first',array('order'=>'Product.id DESC','limit'=>1));

				

					require("Component/class.phpmailer.php");  



					$mail = new PHPMailer();



					$setting=$this->Setting->find('first');

					$email=$setting['Setting']['email'];

					//Thiet lap thong tin nguoi gui va email nguoi gui

					$mail->SetFrom($email,DOMAIN);

					//Thiết lập định dạng font chữ

					$mail->CharSet = "utf-8";



						 

					$guest=$this->Emaildk->find('all',array('conditions'=>array('Emaildk.status'=>1),'order'=>'Emaildk.id ASC')) ;

					foreach($guest as $Emaildk){





					  

					//Thiết lập thông tin người nhận

					//$mail->AddAddress("zenvn@gmail.com", "ZendVN Group");

					$mail->AddAddress($Emaildk['Emaildk']['email'],$Emaildk['Emaildk']['email']);



					//$mail->AddReplyTo($email,$name);



					$mail->Subject    = "Sản phẩm mới từ ". DOMAIN;



					$mail->Ishtml(true);





					//Thiết lập nội dung chính của email



					$mail->Body = DOMAIN." 

					có sản phẩm mới

					<a target='_blank' href='".DOMAIN."/chi-tiet-san-pham/".$sanpham['Product']['id']."/".$sanpham['Product']['slug'].".html'>

					".$sanpham['Product']['name']."

					</a>

					";

											 

					$mail->Send();

					}

					

					//End gửi mail

					

					

					

					

					

                } else {

                    $this->redirect(array('action' => 'index'));

                }

            } else {

                $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));

            }

        }



        // Load model

        $this->loadModel("Catproduct");

        $list_cat = $this->Catproduct->generateTreeList(null, null, null, '-- ');

        $this->set(compact('list_cat'));



		
		$list_hang = $this->Hang->find('list',array('conditions'=>array('Hang.status'=>1)));
        $this->set(compact('list_hang'));
		

		

		

		

    }



    /**

     * Copy san pham

     */

    public function copy($id = null) {

        if (!empty($this->data)) {

            $this->Product->create();

            $data['Product'] = $this->data['Product'];



			$img=isset($_POST['userfile1'])?$_POST['userfile1']:'';

		  

			$data['Product']['images2']=isset($_POST['userfile2'])?$_POST['userfile2']:'';

			$data['Product']['images3']=isset($_POST['userfile3'])?$_POST['userfile3']:'';

		  

		  

            $data['Product']['images'] = $img;

            if ($this->Product->save($data['Product'])) {

                if ($this->Session->check('pageproduct')) {

                    $this->redirect($this->Session->read('pageproduct'));

                } else {

                    $this->redirect(array('action' => 'index'));

                }

            } else {

                $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));

            }

        }



        if (empty($this->data)) {

            $this->data = $this->Product->read(null, $id);

        }



        // Load model

        $this->loadModel("Catproduct");

        $list_cat = $this->Catproduct->generateTreeList(null, null, null, '-- ');

        $this->set(compact('list_cat'));

        $this->set('edit', $this->Product->findById($id));

		

		$list_hang = $this->Hang->find('list',array('conditions'=>array('Hang.status'=>1)));

        $this->set(compact('list_hang'));

		

    }



    //close san pham

    public function close($id = null) {

        $this->Product->id = $id;

        $this->Product->saveField('status', 0);

        $this->redirect($this->Session->read('urlpro'));

    }



    // active san pham

    public function active($id = null) {

        $this->Product->id = $id;

        $this->Product->saveField('status', 1);

        $this->redirect($this->Session->read('urlpro'));

    }



    /**

     * Tim kiem san pham

     */

    public function search() {

        if ($this->request->is('post')) {

            // Lay du lieu tu form

            $listCat = $_REQUEST['listCat'];

            $this->Session->write('catId', $listCat);



            // Get keyword

            $keyword = $_REQUEST['keyword'];

            $this->Session->write('keyword', $keyword);

        } else {

            $listCat = $this->Session->read('catId');

            $keyword = $this->Session->read('keyword');

        }



        // setup condition to search

        $condition = array();

        if (!empty($keyword)) {

            $condition[] = array(

                'Product.name LIKE' => '%' . $keyword . '%'

            );

        }



        if ($listCat > 0) {

            $condition[] = array(

                'Product.cat_id' => $listCat

            );

        }



        // Lưu đường dẫn để quay lại nếu update, edit, dellete

        $urlTmp = DOMAINAD . $this->request->url;

        $this->Session->write('pageproduct', $urlTmp);



        // Sau khi lay het dieu kien sap xep vao 1 array

        $conditions = array();

        foreach ($condition as $values) {

            foreach ($values as $key => $cond) {

                $conditions[$key] = $cond;

            }

        }



        // Tang so thu tu * limit (example : 10)

        $urlTmp = DOMAINAD . $this->request->url;

        $urlTmp = explode(":", $urlTmp);

        if (isset($urlTmp[2])) {

            $startPage = ($urlTmp[2] - 1) * 10 + 1;

        } else {

            $startPage = 1;

        }

        $this->set('startPage', $startPage);



        // Simple to call data

        $this->paginate = array(

            'conditions' => $condition,

            'order' => 'Product.id DESC',

            'limit' => '10'

        );

        $product = $this->paginate('Product');

        $this->set('product', $product);



        // Load model

        $this->loadModel("Catproduct");

        $list_cat = $this->Catproduct->generateTreeList(null, null, null, '-- ');

        $this->set(compact('list_cat'));

    }



    // sua tin da dang

    public function edit($id = null) {

        if (!$id && empty($this->request->data)) {

            $this->Session->setFlash(__('Không tồn tại ', true));

            if ($this->Session->check('pageproduct')) {

                $this->redirect($this->Session->read('pageproduct'));

            } else {

                $this->redirect(array('action' => 'index'));

            }

        }

        if (!empty($this->request->data)) {

            $data['Product'] = $this->data['Product'];







			$img=isset($_POST['userfile1'])?$_POST['userfile1']:'';

		  

		//  $data['Product']['images2']=isset($_POST['userfile2'])?$_POST['userfile2']:'';

		//	$data['Product']['images3']=isset($_POST['userfile3'])?$_POST['userfile3']:'';

		  

            $data['Product']['images'] = $img;

            $data['Product']['modified'] = date('Y-m-d');



            if ($this->Product->save($data['Product'])) {

                if ($this->Session->check('pageproduct')) {

                    $this->redirect($this->Session->read('pageproduct'));

                } else {

                    $this->redirect(array('action' => 'index'));

                }

            } else {

                $this->Session->setFlash(__('Bài viết này không sửa được vui lòng thử lại.', true));

            }

        }

        if (empty($this->request->data)) {

            $this->data = $this->Product->read(null, $id);

        }



        // Load model

        $this->loadModel("Catproduct");

        $list_cat = $this->Catproduct->generateTreeList(null, null, null, '-- ');

        $this->set(compact('list_cat'));

        $this->set('edit', $this->Product->findById($id));

		

		
	$list_hang = $this->Hang->find('list',array('conditions'=>array('Hang.status'=>1)));
        $this->set(compact('list_hang'));
		

    }



    // Xoa cac dang

    public function delete($id = null) {

        if (empty($id)) {

            $this->Session->setFlash(__('Không tồn tại bài viết này', true));

            $this->redirect(array('action' => 'index'));

        }

        if ($this->Product->delete($id)) {

            if ($this->Session->check('pageproduct')) {

                $this->redirect($this->Session->read('pageproduct'));

            } else {

                $this->redirect($this->referer());

            }

        }

        $this->Session->setFlash(__('Bài viết không xóa được', true));

        if ($this->Session->check('pageproduct')) {

            $this->redirect($this->Session->read('pageproduct'));

        } else {

            $this->redirect($this->referer());

        }

    }



    // Delete image detail

    public function delimg($id1, $id2) {

        $this->autoRender = false;



        $detailImg = $this->Product->findById($id1);

        $detailImg = $detailImg['Product']['images_multi'];



        // Xoa anh

        unlink(IMAGES_URL . 'product/' . $id2);



        // update lai filed

        str_replace($id2, "", $detailImg);



        // Loai bo dau "," neu thua

        $img_new = explode(",", $detailImg);

        $new_img = "";

        foreach ($img_new as $values) {

            if ($values != "" && $values != $id2) {

                $new_img .= "," . $values;

            }

        }

        $new_img = substr($new_img, 1);



        $this->Product->id = $id1;

        $this->Product->saveField('images_multi', $new_img);

        $this->redirect($this->referer());

    }



}