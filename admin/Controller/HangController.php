<?php

App::import('Vendor', 'upload');

/**
 * Description of HangController
 * @author : Trung Tong
 * @since 09-10-2012
 */
class HangController extends AppController {

    public $name = 'Hang';
    public $uses = array('Catproduct','Hang');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
        if (!$this->Session->read("id") || !$this->Session->read("name")) {
            $this->redirect('/');
        }
    }
	
	public function get_catproduct($parent_id=null){
	
	return $this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>$parent_id),'order'=>'Catproduct.pos'));
	}
	
    /**
     * List all Hang
     * @author : Trung Tong
     * @param $id : id in table Hang
     */
    public function index($id = null) {
        $Hang = $this->Hang->find('all', array(
            'conditions' => array(
                'Hang.parent_id' => $id
            ),
            'order' => array('Hang. pos ASC', 'Hang.modified DESC')
            ));
        $this->set('Hang', $Hang);

      
        // set ID
        $this->set('catId', $id);
        $this->set(compact('list_cat'));
    }

    /**
     * add Hang
     * @author : Trung Tong
     * @param $id : id in table Hang
     */
    function add($id = null) {
        if (!empty($this->request->data)) {
            $this->Hang->create();
            $data['Hang'] = $this->data['Hang'];
                
            $data['Hang']['images'] = $_POST['userfile'];
			
			 $catproduct=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1),'order'=>'Catproduct.pos'));
			 $cat_id=null;
			 
			 foreach($catproduct as $k=>$v) {
			 if(isset($_POST["cat_$k"])) $cat_id.= $k.'|';
			 }
			 
		   $data['Hang']['catproduct_id'] = $cat_id;
			
            if ($this->Hang->save($data['Hang'])) {
                $this->redirect(array('action' => 'index'));
                exit;
            } else {
                $this->Session->setFlash(__('Thêm moi danh m?c th?t b?i. Vui long th? l?i', true));
            }
        }
      $catproduct=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>null),'order'=>'Catproduct.pos'));
        $this->set(compact('catproduct'));
        $this->set('catId', $id);
    }

    /**
     * editl Hang
     * @author : Trung Tong
     * @param $id : id in table Hang
     */
    function edit($id = null) {
        if (!$id && empty($this->request->data)) {
            $this->Session->setFlash(__('Không t?n t?i ', true));
            $this->redirect(array('action' => 'index'));
        }
   

         if(!empty($this->data)) { 
            $data['Hang'] = $this->data['Hang'];
         
            $data['Hang']['images'] = $_POST['userfile'];
			
			
			
			 $catproduct=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1),'order'=>'Catproduct.pos'));
			 $cat_id=null;
			 
			 foreach($catproduct as $k=>$v) {
			 if(isset($_POST["cat_$k"])) $cat_id.= $k.'|';
			 }
			 
		   $data['Hang']['catproduct_id'] = $cat_id;
			
			
            if ($this->Hang->save($data['Hang'])) {
                $this->redirect('index');
            } else {
                $this->Session->setFlash(__('Bài vi?t này không s?a du?c vui lòng th? l?i.', true));
            }
      }
        if (empty($this->data)) {
            $this->data = $this->Hang->read(null, $id);
        }
      
	     $catproduct=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>null),'order'=>'Catproduct.pos'));
        $this->set(compact('catproduct'));
	  
        $edit = $this->Hang->findById($id);
        $this->set('edit', $edit);
    }

    /**
     * delete Hang
     * @author : Trung Tong
     * @param $id : id in table Hang
     */
    function delete($id = null) {
        if (empty($id)) {
            $this->Session->setFlash(__('Không t?n t?i danh m?c này', true));
            $this->redirect($this->referer());
        }
        if ($this->Hang->delete($id)) {
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
        $sortId = $_REQUEST['sortId'];
        // Update order
        foreach ($vitri as $k => $v) {
            $this->Hang->updateAll(array('Hang.pos' => $v), array('Hang.id' => $k));
        }
        $this->redirect($this->referer());
    }

    //close danh muc
    function close($id = null) {
        $this->Hang->id = $id;
        $this->Hang->saveField('status', 0);
        $this->redirect($this->referer());
    }

    // active danh muc
    function active($id = null) {
        $this->Hang->id = $id;
        $this->Hang->saveField('status', 1);
        $this->redirect($this->referer());
    }

}