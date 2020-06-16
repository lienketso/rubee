<?php

App::import('Vendor', 'upload');
App::import('Vendor', 'ckeditor');
App::import('Vendor', 'ckfinder');

/**
 * Description of DuanController
 * @author : Trung Tong
 * @since 09-10-2012
 */
class DuanController extends AppController {

    public $name = 'Duan';
    public $uses = array('Duan');

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
    function index() {
        $this->paginate = array(
            'order' => 'Duan.pos DESC, Duan.modified DESC',
            'limit' => '10'
        );
        $Duan = $this->paginate('Duan');
        $this->set('Duan', $Duan);

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
        $this->Session->delete('pageDuan');

        // Load model
        $this->loadModel("Catduan");
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
    }

    /**
     * Change position
     * @author Trung -Tong
     */
   function changepos() {
        $vitri = $_REQUEST['order'];
       
        $sphot = $_REQUEST['sphot'];
      

        // Update order
        foreach ($vitri as $k => $v) {
            if ($v == "") {
                $v = null;
            }
            $this->Duan->updateAll(
                array(
                'Duan.pos' => $v,
            
             
                'Duan.hot' => $sphot[$k],
              
                ), array(
                'Duan.id' => $k)
            );
        }
        if ($this->Session->check('pageDuan')) {
            $this->redirect($this->Session->read('pageDuan'));
            exit;
        } else {
            $this->redirect('/Duan');
            exit;
        }
    }

    /**
     * Xu ly cac chuc nang lua chon theo so nhieu
     * @author Trung -Tong
     */
    function process() {
        $process = $this->request->data['process'];
        $chon = $this->request->data['chon'];
        if (count($chon) == 0 || $process < 1) {
            if ($this->Session->check('pageDuan')) {
                $this->redirect($this->Session->read('pageDuan'));
                exit;
            } else {
                $this->redirect('/Duan');
                exit;
            }
        }
        switch ($process) {
            case '1' :
                // Update active
                foreach ($chon as $k => $v) {
                    $this->Duan->updateAll(
                        array(
                        'Duan.status' => 1
                        ), array(
                        'Duan.id' => $k)
                    );
                }
                break;

            case '2' :
                // Update deactive
                foreach ($chon as $k => $v) {
                    $this->Duan->updateAll(
                        array(
                        'Duan.status' => 0
                        ), array(
                        'Duan.id' => $k)
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
                    'Duan.id IN (' . $groupId . ')'
                );
                $this->Duan->deleteAll($conditions);
                break;
        }
        if ($this->Session->check('pageDuan')) {
            $this->redirect($this->Session->read('pageDuan'));
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

    /**
     * Thêm sản phẩm
     * @author Trung Tong
     */
    function add() {
        if (!empty($this->request->data)) {
            $this->Duan->create();
            $data = $this->request->data;

            /**
             * Upload file tuy bien
             * @author : Trung Tong
             */
         
           $soanh=isset($_POST['soanh'])?$_POST['soanh']:0;
		 
		   $mang=''; $name='';
		   if($data['Duan']['hot']==0){
		  
			   for($i=1;$i<=$soanh;$i++)
			   
			   {
					if(isset($_POST["test$i"]) && $_POST["test$i"]!='')
					{
						$name.=$_POST["test_name$i"].'|';
						$mang.=$_POST["test$i"].'|';
					}	
			   }
		}	
			else {
				 for($i=1;$i<=$soanh;$i++)
			   
			   {
					if(isset($_POST["images$i"]) && $_POST["images$i"]!='')
					{
						$name.=$_POST["name_images$i"].'|';
						$mang.=$_POST["images$i"].'|';
					}	
			   }
			}
		   
		   
		   $data['Duan']['images']=$mang;
		   $data['Duan']['name_images']=$name;
		   //pr($data); die;
            if ($this->Duan->save($data['Duan'])) {
                if ($this->Session->check('pageDuan')) {
                    $this->redirect($this->Session->read('pageDuan'));
                } else {
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        // Load model
        $this->loadModel("Catduan");
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
    }

    /**
     * Copy san pham
     */
    function copy($id = null) {
        if (!empty($this->data)) {
            $this->Duan->create();
            $data['Duan'] = $this->data['Duan'];

            /**
             * Upload file tuy bien
             * @author : Trung Tong
             */
            $handle = new upload($_FILES['userfile']);
            if ($handle->uploaded) {

                // Neu resize
                $handle->image_resize = true;
                $handle->image_ratio_x = true;
                $handle->image_y = 600;

                $filename = date('YmdHis') . md5(rand(10000, 99999));
                $handle->file_new_name_body = $filename;

                $handle->Process(IMAGES_URL . 'Duan');
                if ($handle->processed) {
                    $img = $handle->file_dst_name;
                }
            }
            $data['Duan']['images'] = $img;
			$data['Duan']['file'] = $_POST['file'];
            if ($this->Duan->save($data['Duan'])) {
                if ($this->Session->check('pageDuan')) {
                    $this->redirect($this->Session->read('pageDuan'));
                } else {
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        if (empty($this->data)) {
            $this->data = $this->Duan->read(null, $id);
        }

        // Load model
        $this->loadModel("Catduan");
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
        $this->set('edit', $this->Duan->findById($id));
    }

    //close san pham
    function close($id = null) {
        $this->Duan->id = $id;
        $this->Duan->saveField('status', 0);
        $this->redirect($this->Session->read('urlpro'));
    }

    // active san pham
    function active($id = null) {
        $this->Duan->id = $id;
        $this->Duan->saveField('status', 1);
        $this->redirect($this->Session->read('urlpro'));
    }

    /**
     * Tim kiem san pham
     */
    function search() {
        if ($this->request->is('post')) {
            // Lay du lieu tu form
            $listCat = $this->request->data['listCat'];
            $this->Session->write('catId', $listCat);

            // Get keyword
            $keyword = $this->request->data['keyword'];
            $this->Session->write('keyword', $keyword);
        } else {
            $listCat = $this->Session->read('catId');
            $keyword = $this->Session->read('keyword');
        }

        // setup condition to search
        $condition = array();
        if (!empty($keyword)) {
            $condition[] = array(
                'Duan.name LIKE' => '%' . $keyword . '%'
            );
        }

        if ($listCat > 0) {
            $condition[] = array(
                'Duan.cat_id' => $listCat
            );
        }

        // Lưu đường dẫn để quay lại nếu update, edit, dellete
        $urlTmp = DOMAINAD . $this->request->url;
        $this->Session->write('pageDuan', $urlTmp);

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
            'order' => 'Duan.pos DESC',
            'limit' => '10'
        );
        $Duan = $this->paginate('Duan');
        $this->set('Duan', $Duan);

        // Load model
        $this->loadModel("Catduan");
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
		
		$this->render('index');
    }

    // sua tin da dang
    function edit($id = null) {
        if (!$id && empty($this->request->data)) {
		
            $this->Session->setFlash(__('Không tồn tại ', true));
            if ($this->Session->check('pageDuan')) {
                $this->redirect($this->Session->read('pageDuan'));
            } else {
                $this->redirect(array('action' => 'index'));
            }
        }
        if (!empty($this->request->data)) {
            $data = $this->request->data;
     

           $soanh=isset($_POST['soanh'])?$_POST['soanh']:0;
		 
		   $mang='';$name='';
		  
		  if($data['Duan']['hot']==0){
		  
			   for($i=1;$i<=$soanh;$i++)
			   
			   {
					if(isset($_POST["test$i"]) && $_POST["test$i"]!='')
					{
						$name.=$_POST["test_name$i"].'|';
						$mang.=$_POST["test$i"].'|';
					}	
			   }
		}	
			else {
				 for($i=1;$i<=$soanh;$i++)
			   
			   {
					if(isset($_POST["images$i"]) && $_POST["images$i"]!='')
					{
						$name.=$_POST["name_images$i"].'|';
						$mang.=$_POST["images$i"].'|';
					}	
			   }
			}
		   
		   $data['Duan']['images']=$mang;
		   $data['Duan']['name_images']=$name;
			//$data['Duan']['file'] = $_POST['file'];
			//pr($data); die;
			
			
            if ($this->Duan->save($data['Duan'])) {
					
                    $this->redirect(array('action' => 'index'));
                
            }
        }
		
		
		$this->data=$this->Duan->findById($id);
		

        // Load model
        $this->loadModel("Catduan");
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
        
        $this->Duan->id = $id;
        
        // Edit tieng viet
       
        $edit_vie = $this->Duan->findById($id);
        $this->set('edit_vie', $edit_vie);

    }

    // Xoa cac dang
    function delete($id = null) {
        if (empty($id)) {
            $this->Session->setFlash(__('Không tồn tại bài viết này', true));
            //$this->redirect(array('action'=>'index'));
        }
        if ($this->Duan->delete($id)) {
            $this->Session->setFlash(__('Xóa bài viết thành công', true));
            if ($this->Session->check('pageDuan')) {
                $this->redirect($this->Session->read('pageDuan'));
            } else {
                $this->redirect(array('action' => 'index'));
            }
        }
        $this->Session->setFlash(__('Bài viết không xóa được', true));
        if ($this->Session->check('pageDuan')) {
            $this->redirect($this->Session->read('pageDuan'));
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

}