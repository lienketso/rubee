<?php
/**
 * Description of ModulesController
 * @author : Trung Tong
 * @since Oct 25, 2012
 */
class ModulesController extends AppController {
    
    public $name = 'Modules';
    public $uses = array();
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
        if (!$this->Session->read("id") || !$this->Session->read("name")) {
            $this->redirect('/');
        }
    }

    public function index() {
        $module = $this->Module->find('all', array(
            'order' => 'Module.pos ASC'
        ));
        $this->set('module', $module);
    }
    
    /**
     * Thêm module
     * @author Trung Tong
     */
    function add() {
        if (!empty($this->request->data)) {
            $this->Module->create();
            $data['Module'] = $this->data;
            
            if ($this->Module->save($data['Module'])) {
                $this->Session->setFlash(__('Thêm mới quảng cáo thành công', true));
                $this->redirect("/modules");
            } else {
                $this->Session->setFlash(__('Thêm quảng cáo thất bại. Vui long thử lại', true));
            }
        }
    }

    /**
     * Edit module
     * @author Trung Tong
     */
    function edit($id = null) {
        if (!$id && empty($this->request->data)) {
            $this->Session->setFlash(__('Không tồn tại ', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->request->data)) {
            $data['Module'] = $this->data;
            if ($this->Module->save($data['Module'])) {
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Bài viết này không sửa được vui lòng thử lại.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Module->read(null, $id);
        }
        $this->set('edit', $this->Module->findById($id));
    }

    /**
     * Change position
     * @author Trung -Tong
     */
    function changepos() {
        $vitri = $_REQUEST['order'];

        // Update order
        foreach ($vitri as $k => $v) {
            $this->Module->updateAll(
                array(
                'Module.pos' => $v
                ), array(
                'Module.id' => $k)
            );
        }
        $this->redirect(array('action' => 'index'));
    }
    
    // Xoa module
    function delete($id = null) {
        if (empty($id)) {
            $this->Session->setFlash(__('Không tồn tại bài viết này', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Module->delete($id)) {
            $this->Session->setFlash(__('Xóa bài viết thành công', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Bài viết không xóa được', true));
        $this->redirect(array('action' => 'index'));
    }
    
    //close module
    function close($id = null) {
        $this->Module->id = $id;
        $this->Module->saveField('status', 0);
        $this->redirect(array('action' => 'index'));
    }

    // active module
    function active($id = null) {
        $this->Module->id = $id;
        $this->Module->saveField('status', 1);
        $this->redirect(array('action' => 'index'));
    }

}