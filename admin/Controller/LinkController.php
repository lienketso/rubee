<?php
class LinkController extends AppController {

	var $name = 'Link';
	function index() {
		  $this->account();
		  $this->paginate = array('limit' => '15','order' => 'Link.id DESC');
	      $this->set('link', $this->paginate('Link',array()));

	}
	
	function add(){
		$this->account();
		if (!empty($this->data)) {
			$this->Link->create();
			$data['Link'] = $this->data['Link'];
			$data['Link']['images']=$_POST['userfile'];
			if ($this->Link->save($data['Link'])) {
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
	}
	
	function close($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Link'] = $this->data['Link'];
		$data['Link']['status']=0;
		if ($this->Link->save($data['Link'])) {
			$this->Session->setFlash(__('Hình ảnh không được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hình ảnh không close được', true));
		$this->redirect(array('action' => 'index'));

	}
	
	function processing() {
		$this->account();
		if(isset($_POST['dropdown']))
			$select=$_POST['dropdown'];
			
		if(isset($_POST['checkall']))
				{
			
			switch ($select){
				case 'active':
				$Link=($this->Link->find('all'));
				foreach($Link as $new) {
					$new['Link']['status']=1;
					$this->Link->save($new['Link']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$Link=($this->Link->find('all'));
				foreach($Link as $new) {
					$new['Link']['status']=0;
					$this->Link->save($new['Link']);					
				}
				break;
				case 'delete':
				$Link=($this->Link->find('all'));
				foreach($Link as $new) {
					$this->Link->delete($new['Link']['id']);					
				}
				if($this->Link->find('count')<1)
				$this->redirect(array('action'=>'index'));
				 else
				$this->redirect(array('action'=>'index'));
				//vong lap xoa
				break;
				
			}
		}
		else{
			
			switch ($select){
				case 'active':
				$Link=($this->Link->find('all'));
				foreach($Link as $new) {
					if(isset($_POST[$new['Link']['id']]))
					{
						$new['Link']['status']=1;
						$this->Link->save($new['Link']);
					}
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$Link=($this->Link->find('all'));
				foreach($Link as $new) {
					if(isset($_POST[$new['Link']['id']]))
					{
						$new['Link']['status']=0;
						$this->Link->save($new['Link']);
					}
				}
				break;
				case 'delete':
				$Link=($this->Link->find('all'));
				foreach($Link as $Link) {
					if(isset($_POST[$Link['Link']['id']]))
					{
					    $this->Link->delete($Link['Link']['id']);
					
					}
										
				}
				$this->redirect(array('action'=>'index'));
				break;
				
			}
			
		}
		$this->redirect(array('action' => 'index'));
		
	}
	function active($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Link'] = $this->data['Link'];
		$data['Link']['status']=1;
		if ($this->Link->save($data['Link'])) {
			$this->Session->setFlash(__('Hình ảnh được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hình ảnh không active được', true));
		$this->redirect(array('action' => 'index'));

	}


	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại danh mục này', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$data['Link'] = $this->data['Link'];			
			$data['Link']['images']=$_POST['userfile'];
			if ($this->Link->save($data['Link'])) {
				$this->Session->setFlash(__('Sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sủa không thành công. Vui long thử lại', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Link->read(null, $id);
			$this->set('edit',$this->Link->read(null, $id));
		}
                 // Edit tieng viet
        $this->Link->setLanguage('vie');
        $edit_vie = $this->Link->findById($id);
        $this->set('edit_vie', $edit_vie);

        // Edit tieng anh
        $this->Link->setLanguage('eng');
        $edit_eng = $this->Link->findById($id);
        $this->set('edit_eng', $edit_eng);
		
	}
	// Xoa hinh anh
	function delete($id = null) {
		$this->account();		
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại hình ảnh này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Link->delete($id)) {
			$this->Session->setFlash(__('Xóa  thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không xóa được', true));
		$this->redirect(array('action' => 'index'));
	}

	//check ton tai tai khoan
	function account(){
		if(!$this->Session->read("id") || !$this->Session->read("name")){
			$this->redirect('/');
		}
	}
	function beforeFilter(){
		$this->layout='admin';
	}

}
?>
