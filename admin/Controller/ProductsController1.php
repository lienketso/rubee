Vi<?php

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
    function index() {
        $this->paginate = array(
            'order' => 'Product.pos DESC, Product.modified DESC',
            'limit' => '10'
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
            $this->Product->updateAll(
                array(
                'Product.pos' => $v,
                'Product.hot' => $sphot[$k]
                ), array(
                'Product.id' => $k)
            );
        }
        if ($this->Session->check('pageproduct')) {
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
    function process() {
        $process = $this->request->data['process'];
        $chon = $this->request->data['chon'];
        if (count($chon) == 0 || $process < 1) {
            if ($this->Session->check('pageproduct')) {
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
    function add() {
        if (!empty($this->request->data)) {
            $this->Product->create();
            $data = $this->request->data;

            /**
             * Upload file tuy bien
             * @author : Trung Tong
             */
            if(!empty($_FILES['userfile']['name'])) {
                $handle = new upload($_FILES['userfile']);
                if ($handle->uploaded) {

                    // Neu resize
                    $handle->image_resize = true;
                    $handle->image_ratio_x = true;
                    $handle->image_y = 600;

                    $filename = date('YmdHis') . md5(rand(10000, 99999));
                    $handle->file_new_name_body = $filename;

                    $handle->Process(IMAGES_URL . 'product');
                    if ($handle->processed) {
                        $img = $handle->file_dst_name;
                    }
                }
            }
            $data['Product']['images'] = $img;
            if ($this->Product->save($data['Product'])) {
                if ($this->Session->check('pageproduct')) {
                    $this->redirect($this->Session->read('pageproduct'));
                } else {
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        // Load model
        $this->loadModel("Catproduct");
        $list_cat = $this->Catproduct->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
    }

    /**
     * Copy san pham
     */
    function copy($id = null) {
        if (!empty($this->data)) {
            $this->Product->create();
            $data['Product'] = $this->data['Product'];

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

                $handle->Process(IMAGES_URL . 'product');
                if ($handle->processed) {
                    $img = $handle->file_dst_name;
                }
            }
            $data['Product']['images'] = $img;
            if ($this->Product->save($data['Product'])) {
                if ($this->Session->check('pageproduct')) {
                    $this->redirect($this->Session->read('pageproduct'));
                } else {
                    $this->redirect(array('action' => 'index'));
                }
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
    }

    //close san pham
    function close($id = null) {
        $this->Product->id = $id;
        $this->Product->saveField('status', 0);
        $this->redirect($this->Session->read('urlpro'));
    }

    // active san pham
    function active($id = null) {
        $this->Product->id = $id;
        $this->Product->saveField('status', 1);
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
            'order' => 'Product.pos DESC',
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
    function edit($id = null) {
        if (!$id && empty($this->request->data)) {
            $this->Session->setFlash(__('Không tồn tại ', true));
            if ($this->Session->check('pageproduct')) {
                $this->redirect($this->Session->read('pageproduct'));
            } else {
                $this->redirect(array('action' => 'index'));
            }
        }
        if (!empty($this->request->data)) {
            $data = $this->request->data;
            if ($_FILES['userfile']['name'] != "") {
                // Upload anh
                $handle = new upload($_FILES['userfile']);
                if ($handle->uploaded) {

                    // Neu resize
                    $handle->image_resize = true;
                    $handle->image_ratio_x = true;
                    $handle->image_y = 600;

                    $filename = date('YmdHis') . md5(rand(10000, 99999));
                    $handle->file_new_name_body = $filename;

                    $handle->Process(IMAGES_URL . 'product');
                    if ($handle->processed) {
                        $img = $handle->file_dst_name;
                    }
                }
            } else {
                $img = $this->request->data['oldimg'];
            }

            $data['Product']['images'] = $img;
           // pr($data['Product']);die;
            if ($this->Product->save($data['Product'])) {
                if ($this->Session->check('pageproduct')) {
                    $this->redirect($this->Session->read('pageproduct'));
                } else {
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        // Load model
        $this->loadModel("Catproduct");
        $list_cat = $this->Catproduct->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
        
        // Edit tieng viet
        $this->Product->setLanguage('vie');
        $edit_vie = $this->Product->findById($id);
        $this->set('edit_vie', $edit_vie);

        // Edit tieng anh
        $this->Product->setLanguage('eng');
        $edit_eng = $this->Product->findById($id);
        $this->set('edit_eng', $edit_eng);
    }

    // Xoa cac dang
    function delete($id = null) {
        if (empty($id)) {
            $this->Session->setFlash(__('Không tồn tại bài viết này', true));
            //$this->redirect(array('action'=>'index'));
        }
        if ($this->Product->delete($id)) {
            $this->Session->setFlash(__('Xóa bài viết thành công', true));
            if ($this->Session->check('pageproduct')) {
                $this->redirect($this->Session->read('pageproduct'));
            } else {
                $this->redirect(array('action' => 'index'));
            }
        }
        $this->Session->setFlash(__('Bài viết không xóa được', true));
        if ($this->Session->check('pageproduct')) {
            $this->redirect($this->Session->read('pageproduct'));
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

}