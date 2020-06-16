<?php
App::import('Vendor', 'upload');
class DoitacController extends AppController {

    public $name = 'Doitac';
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
        $advs = $this->Doitac->find('all', array(
            'order' => 'Doitac.pos ASC'
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
            $this->Doitac->create();
            $data['Doitac'] = $this->data['Doitac'];

            /**
             * Upload file tuy bien
             * @author : Trung Tong
             */
          
            if ($this->Doitac->save($data['Doitac'])) {
                $this->Session->setFlash(__('Thêm mới quảng cáo thành công', true));
                $this->redirect("/doitac");
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
            $data['Doitac'] = $this->data['Doitac'];
        

      
            $data['Doitac']['modified'] = date('Y-m-d');
            if ($this->Doitac->save($data['Doitac'])) {
                $this->Session->setFlash(__('Bài viết sửa thành công', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Bài viết này không sửa được vui lòng thử lại.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Doitac->read(null, $id);
        }
        $this->set('edit', $this->Doitac->findById($id));
    }

    /**
     * Select Doitac
     * update status = 1
     */
    public function selectPartner() {
        $chon = $_REQUEST['chon'];

        /**
         * update tat ca ve 0
         */
        $this->Doitac->updateAll(array('Doitac.status' => 0));

        /**
         * Update Doitac duoc chon
         */
        $this->Doitac->updateAll(array('Doitac.status' => 1), array('Doitac.id' => $chon));
        $this->redirect("/Doitac");
    }
    
    /**
     * Change position
     * @author Trung -Tong
     */
    function changepos() {
        $vitri = $_REQUEST['order'];

        // Update order
        foreach ($vitri as $k => $v) {
            $this->Doitac->updateAll(
                array(
                'Doitac.pos' => $v
                ), array(
                'Doitac.id' => $k)
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
        if ($this->Doitac->delete($id)) {
            $this->Session->setFlash(__('Xóa bài viết thành công', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Bài viết không xóa được', true));
        $this->redirect(array('action' => 'index'));
    }
    
    //close quang cao
    function close($id = null) {
        $this->Doitac->id = $id;
        $this->Doitac->saveField('status', 0);
        $this->redirect(array('action' => 'index'));
    }

    // active quang cao
    function active($id = null) {
        $this->Doitac->id = $id;
        $this->Doitac->saveField('status', 1);
        $this->redirect(array('action' => 'index'));
    }

}