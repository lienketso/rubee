<?php
App::import('Vendor', 'upload');
class PartnerController extends AppController {

    public $name = 'Partner';
    public $uses = array();

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
        if (!$this->Session->read("id") || !$this->Session->read("name")) {
            $this->redirect('/');
        }
    }

   /**
     * Danh sach doi tac
     */
    public function index() {
        $advs = $this->Partner->find('all', array(
            'order' => 'Partner.pos ASC'
        ));
        $this->set('advs', $advs);
    }
    
    /**
     * Thêm Partner
     * @author Trung Tong
     */
      /**
     * Thêm quang cao
     * @author Trung Tong
     */
    function add() {
        if (!empty($this->request->data)) {
            $this->Partner->create();
            $data['Partner'] = $this->data['Partner'];

            /**
             * Upload file tuy bien
             * @author : Trung Tong
             */
            $handle = new upload($_FILES['userfile']);
            if ($handle->uploaded) {

                // Neu resize
//                $handle->image_resize          = true;
//                $handle->image_ratio_y        = true;
//                $handle->image_x                 = 790;

                $filename = date('YmdHis') . md5(rand(10000, 99999));
                $handle->file_new_name_body = $filename;

                $handle->Process(IMAGES_URL . 'logo');
                if ($handle->processed) {
                    $img = $handle->file_dst_name;
                }
            }
            $data['Partner']['images'] = $img;
            if ($this->Partner->save($data['Partner'])) {
                $this->Session->setFlash(__('Thêm mới quảng cáo thành công', true));
                $this->redirect("/partner");
            } else {
                $this->Session->setFlash(__('Thêm quảng cáo thất bại. Vui long thử lại', true));
            }
        }
    }


    /**
     * Edit Partner
     * @author Trung Tong
     */
    function edit($id = null) {
        if (!$id && empty($this->request->data)) {
            $this->Session->setFlash(__('Không tồn tại ', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->request->data)) {
            $data['Partner'] = $this->data['Partner'];
            if ($_FILES['userfile']['name'] != "") {
                // Upload anh
                $handle = new upload($_FILES['userfile']);
                if ($handle->uploaded) {
                    $filename = date('YmdHis') . md5(rand(10000, 99999));
                    $handle->file_new_name_body = $filename;

                      $handle->Process(IMAGES_URL . 'logo');
                    if ($handle->processed) {
                        $img = $handle->file_dst_name;
                    }
                }
            } else {
                $img = $_REQUEST['oldimg'];
            }

            $data['Partner']['images'] = $img;
            $data['Partner']['modified'] = date('Y-m-d');
            if ($this->Partner->save($data['Partner'])) {
                $this->Session->setFlash(__('Bài viết sửa thành công', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Bài viết này không sửa được vui lòng thử lại.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Partner->read(null, $id);
        }
        $this->set('edit', $this->Partner->findById($id));
    }

    /**
     * Select Partner
     * update status = 1
     */
    public function selectPartner() {
        $chon = $_REQUEST['chon'];

        /**
         * update tat ca ve 0
         */
        $this->Partner->updateAll(array('Partner.status' => 0));

        /**
         * Update Partner duoc chon
         */
        $this->Partner->updateAll(array('Partner.status' => 1), array('Partner.id' => $chon));
        $this->redirect("/Partner");
    }
    
    /**
     * Change position
     * @author Trung -Tong
     */
    function changepos() {
        $vitri = $_REQUEST['order'];

        // Update order
        foreach ($vitri as $k => $v) {
            $this->Partner->updateAll(
                array(
                'Partner.pos' => $v
                ), array(
                'Partner.id' => $k)
            );
        }
        $this->redirect(array('action' => 'index'));
    }
    
    // Xoa quang cao
    function delete($id = null) {
        if (empty($id)) {
            $this->Session->setFlash(__('Không tồn tại bài viết này', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Partner->delete($id)) {
            $this->Session->setFlash(__('Xóa bài viết thành công', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Bài viết không xóa được', true));
        $this->redirect(array('action' => 'index'));
    }
    
    //close quang cao
    function close($id = null) {
        $this->Partner->id = $id;
        $this->Partner->saveField('status', 0);
        $this->redirect(array('action' => 'index'));
    }

    // active quang cao
    function active($id = null) {
        $this->Partner->id = $id;
        $this->Partner->saveField('status', 1);
        $this->redirect(array('action' => 'index'));
    }

}