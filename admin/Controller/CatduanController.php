<?php

App::import('Vendor', 'upload');

/**
 * Description of CatduanController
 * @author : Trung Tong
 * @since 09-10-2012
 */
class CatduanController extends AppController {

    public $name = 'Catduan';
    public $uses = array();

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
        if (!$this->Session->read("id") || !$this->Session->read("name")) {
            $this->redirect('/');
        }
    }

    /**
     * List all Catduan
     * @author : Trung Tong
     * @param $id : id in table Catduan
     */
    public function index($id = null) {
        $Catduan = $this->Catduan->find('all', array(
            'conditions' => array(
                'Catduan.parent_id' => $id
            ),
            'order' => array('Catduan. pos ASC', 'Catduan.modified DESC')
            ));
        $this->set('Catduan', $Catduan);

        // List for combo box
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');

        // set ID
        $this->set('catId', $id);
        $this->set(compact('list_cat'));
    }

    /**
     * add Catduan
     * @author : Trung Tong
     * @param $id : id in table Catduan
     */
    function add($id = null) {
        if (!empty($this->request->data)) {
            /**
             * Upload file tuy bien
             * @author : Trung Tong
             */
          

	 
            $this->Catduan->create();
            $data = $this->request->data;
           // $data['Catduan']['images'] = $img;
            $data['Catduan']['parent_id'] = $id;
            if ($this->Catduan->save($data['Catduan'])) {
                $this->redirect('/Catduan/index/' . $id);
                exit;
            }
        }
        $this->set('tendm', $this->Catduan->read(null, $id));
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));
        $this->set('catId', $id);
    }

    /**
     * editl Catduan
     * @author : Trung Tong
     * @param $id : id in table Catduan
     */
    function edit($id = null) {
        $this->Catduan->setLanguage('vie', 'eng');
        if (!$id && empty($this->request->data)) {
            $this->Session->setFlash(__('Không tồn tại ', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('post')) {
	
            $data = $this->request->data;
          
            if ($this->Catduan->save($data['Catduan'])) {
                $this->redirect('/Catduan/index/' . $data['Catduan']['prarent_id']);
            }
        }
        if (empty($this->request->data)) {
            $this->data = $this->Catduan->read(null, $id);
        }
        $list_cat = $this->Catduan->generateTreeList(null, null, null, '-- ');
        $this->set(compact('list_cat'));

        // Edit tieng viet
        $this->Catduan->setLanguage('vie');
        $edit_vie = $this->Catduan->findById($id);
        $this->set('edit_vie', $edit_vie);

        // Edit tieng anh
        $this->Catduan->setLanguage('eng');
        $edit_eng = $this->Catduan->findById($id);
        $this->set('edit_eng', $edit_eng);
    }

    /**
     * delete Catduan
     * @author : Trung Tong
     * @param $id : id in table Catduan
     */
    function delete($id = null) {
        if (empty($id)) {
            $this->Session->setFlash(__('Không tồn tại danh mục này', true));
            $this->redirect($this->referer());
        }
        if ($this->Catduan->delete($id)) {
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
		 $sphot = $_REQUEST['sphot'];
        // Update order
        foreach ($vitri as $k => $v) {
            $this->Catduan->updateAll(array('Catduan.pos' => $v, 'Catduan.home' => $sphot[$k]), array('Catduan.id' => $k));
        }
        $this->redirect($this->referer());
    }

    //close danh muc
    function close($id = null) {
        $this->Catduan->id = $id;
        $this->Catduan->saveField('status', 0);
        $this->redirect($this->referer());
    }

    // active danh muc
    function active($id = null) {
        $this->Catduan->id = $id;
        $this->Catduan->saveField('status', 1);
        $this->redirect($this->referer());
    }

}