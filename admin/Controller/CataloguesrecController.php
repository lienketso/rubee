<?php
App::import('Vendor', 'upload');
App::import('Vendor', 'ckeditor');
App::import('Vendor', 'ckfinder');
/**
 * Description of CataloguesrecController
 * @author : Trung Tong
 * @since 12-10-2012
 */
class CataloguesrecController extends AppController {

    public $name = 'Cataloguesrec';
    public $uses = array();

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

 public function index($id = null) {
        $Cataloguesrec = $this->Cataloguesrec->find('all', array(
            'conditions' => array(
                'Cataloguesrec.parent_id' => $id
            ),
            'order' => array('Cataloguesrec. pos ASC', 'Cataloguesrec.modified DESC')
            ));
        $this->set('Cataloguesrec', $Cataloguesrec);

        // List for combo box
        $list_cat = $this->Cataloguesrec->generateTreeList(null, null, null, '-- ');

        // set ID
        $this->set('catId', $id);
        $this->set(compact('list_cat'));
    }
  
   /**
     * add catproducts
     * @author : Trung Tong
     * @param $id : id in table Danhmuc
     */
     function add($id = null) {
        if (!empty($this->request->data)) {
            /**
             * Upload file tuy bien
             * @author : Trung Tong
             */
          

	 
            $this->Cataloguesrec->create();
            $data = $this->request->data;
           $img=isset($_POST['userfile1'])?$_POST['userfile1']:'';

			$data['Cataloguesrec']['images2']=isset($_POST['userfile2'])?$_POST['userfile2']:'';

		//	$data['Cataloguesrec']['images2']=isset($_POST['userfile3'])?$_POST['userfile3']:'';

          
            $data['Cataloguesrec']['images'] = $img;
            $data['Cataloguesrec']['parent_id'] = $id;
            if ($this->Cataloguesrec->save($data['Cataloguesrec'])) {
                $this->redirect('/cataloguesrec/index/' . $id);
                exit;
            }
        }
        $this->set('tendm', $this->Cataloguesrec->read(null, $id));
        $list_cat = $this->Cataloguesrec->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
        $this->set('catId', $id);
    }

    /**
     * editl catproducts
     * @author : Trung Tong
     * @param $id : id in table catproduct
     */
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
 
			
            $data['Cataloguesrec'] = $this->data['Cataloguesrec'];
			$img=isset($_POST['userfile1'])?$_POST['userfile1']:'';
			$data['Cataloguesrec']['images2']=isset($_POST['userfile2'])?$_POST['userfile2']:'';
//$data['Cataloguesrec']['images3']=isset($_POST['userfile3'])?$_POST['userfile3']:'';
			
            $data['Cataloguesrec']['images'] = $img;
            $data['Cataloguesrec']['modified'] = date('Y-m-d');
            if ($this->Cataloguesrec->save($data['Cataloguesrec'])) {
			  $this->redirect('/cataloguesrec/index/' . $data['Cataloguesrec']['prarent_id']);
               if ($this->Session->check('pageproduct')) {
                    $this->redirect($this->Session->read('pageproduct'));
                } else {
                    $this->redirect(array('action' => 'index'));
                }
            } 
			
			else {
                $this->Session->setFlash(__('Bài viết này không sửa được vui lòng thử lại.', true));
            }
        }
        if (empty($this->request->data)) {

            $this->data = $this->Cataloguesrec->read(null, $id);

        }

    $list_cat = $this->Cataloguesrec->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));

       $this->set('edit', $this->Cataloguesrec->findById($id));


    }

    /**
     * delete Cataloguesrecs
     * @author : Trung Tong
     * @param $id : id in table catproduct
     */
    function delete($id = null) {
        if (empty($id)) {
            $this->Session->setFlash(__('Không tồn tại danh mục này', true));
            $this->redirect($this->referer());
        }
        if ($this->Cataloguesrec->delete($id)) {
            $this->redirect($this->referer());
        }
        $this->redirect($this->referer());
    }

    /**
     * Change position
     * @author Trung -Tong
     */
    function changepos() {
        $vitri = $_REQUEST['order'];
        // Update order
        foreach ($vitri as $k => $v) {
            $this->Cataloguesrec->updateAll(array('Cataloguesrec.pos' => $v), array('Cataloguesrec.id' => $k));
        }
        $this->redirect($this->referer());
    }

    //close danh muc
    function close($id = null) {
        $this->Cataloguesrec->id = $id;
        $this->Cataloguesrec->saveField('status', 0);
        $this->redirect($this->referer());
    }

    // active danh muc
    function active($id = null) {
        $this->Cataloguesrec->id = $id;
        $this->Cataloguesrec->saveField('status', 1);
        $this->redirect($this->referer());
    }
    
    
	  /**
     * Tim kiem bai viet
     */
   function search() {
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
                'Cataloguesrec.name LIKE' => '%' . $keyword . '%'
            );
        }

        if ($listCat > 0) {
            $condition[] = array(
                'Cataloguesrec.parent_id' => $listCat
            );
        }

        // Lưu đường dẫn để quay lại nếu update, edit, dellete
        $urlTmp = DOMAINAD . $this->request->url;
        $this->Session->write('pagenew', $urlTmp);

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
            'order' => 'Cataloguesrec.pos DESC',
            'limit' => '10'
        );
        $product = $this->paginate('Cataloguesrec');
        $this->set('product', $product);

        // Load model
        $this->loadModel("Catalogue");
        $list_cat = $this->Cataloguesrec->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
    }


}