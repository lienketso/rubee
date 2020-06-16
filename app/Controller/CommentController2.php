<?php
class CommentController extends AppController {

	var $name = 'Comment';
	var $uses=array('Comment','Product');
	
	public function get_product($id=null) {
	
	$Product=$this->Product->findById($id);
	return $Product['Product']['name'];
	
	}
	
	public function index(){
		$this->account();
		$this->paginate=array('limit'=>'20','order'=>'Comment.id DESC');
		$this->set('Comment',$this->paginate('Comment',array()));
	}
	public function add(){
		$this->account();
		if(!empty($this->data)){
			$this->Comment->create();
			$data['Comment']=$this->data['Comment'];			
			if($this->Comment->save($data['Comment'])){
				$this->Session->setFlash(__('Th�m m?i th�nh c�ng',true));
				$this->redirect(array('action'=>'index'));
			}
			else{
				$this->Session->setFlash(__('Th�m m?i th?t b?i'));
			}
		}
	}
	
	public function delete($id = null) {	
		$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Kh�n t?n t?i danh m?c n�y', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Comment->delete($id)) {
			$this->Session->setFlash(__('X�a danh m?c th�nh c�ng', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh m?c kh�ng x�a du?c', true));
		$this->redirect(array('action' => 'index'));
	}
	
	public function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Kh�ng t?n t?i danh m?c n�y', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('S?a th�nh c�ng', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('S?a kh�ng th�nh c�ng. Vui long th? l?i', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comment->read(null, $id);
		}
		
	}
	public function close($id=null) {	
		//$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Kh�n t?n t?i ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Comment'] = $this->data['Comment'];
		
		$data['Comment']['status']=0;
		$data['Comment']['id']=$id;
		if ($this->Comment->save($data['Comment'])) {
			$this->Session->setFlash(__('H�nh ?nh kh�ng du?c hi?n th?', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('H�nh ?nh kh�ng close du?c', true));
		$this->redirect(array('action' => 'index'));

	}
	
	public function active($id=null) {	
		//$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Kh�n t?n t?i ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Comment'] = $this->data['Comment'];
		$data['Comment']['status']=1;
		$data['Comment']['id']=$id;
		if ($this->Comment->save($data['Comment'])) {
			$this->Session->setFlash(__('H�nh ?nh du?c hi?n th?', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('H�nh ?nh kh�ng active du?c', true));
		$this->redirect(array('action' => 'index'));

	}
	
		public function _find_list() {
		return $this->Portfolio->generatetreelist(null, null, null, '__');
	}
	//check ton tai tai khoan
	public function account(){
		if(!$this->Session->read("id") || !$this->Session->read("name")){
			$this->redirect('/');
		}
	}
	public function beforeFilter(){
		$this->layout='admin';
	}

	
	public function processing() {
		$this->account();
		if(isset($_POST['dropdown']))
			$select=$_POST['dropdown'];
			
		if(isset($_POST['checkall']))
				{
			
			switch ($select){
				case 'active':
				$Comments=($this->Comment->find('all'));
				foreach($Comments as $Comment) {
					$Comment['Comment']['status']=1;
					$this->Comment->save($Comment['Comment']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$Comments=($this->Comment->find('all'));
				foreach($Comments as $Comment) {
					$new['Comment']['status']=0;
					$this->Comment->save($Comment['Comment']);					
				}
				break;
				case 'delete':
				$Comments=($this->Comment->find('all'));
				foreach($Comments as $Comment) {
					$this->Comment->delete($Comment['Comment']['id']);					
				}
				if($this->Comment->find('count')<1)
					$this->redirect(array('action' => 'index'));	
				 else
				 {
					$this->Session->setFlash(__('Danh m?c kh�ng close du?c', true));
					$this->redirect(array('action' => 'index'));
				 }
				//vong lap xoa
				break;
				
			}
		}
		else{
			
			switch ($select){
				case 'active':
				$Comments=($this->Comment->find('all'));
				foreach($Comments as $Comment) {
					if(isset($_POST[$Comment['Comment']['id']]))
					{
						$Comment['Comment']['status']=1;
						$this->Comment->save($Comment['Comment']);
					}
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$Comments=($this->Comment->find('all'));
				foreach($Comments as $Comment) {
					if(isset($_POST[$Comment['Comment']['id']]))
					{
						$new['Comment']['status']=0;
						$this->Comment->save($Comment['Comment']);
					}
				}
				break;
				case 'delete':
				$Comments=($this->Comment->find('all'));
				foreach($Comments as $Comment) {
					if(isset($_POST[$Comment['Comment']['id']]))
					{
					    $this->Comment->delete($Comment['Comment']['id']);
						$this->redirect(array('action'=>'index'));
					}
										
				}
				
				die;	
				//vong lap xoa
				break;
				
			}
			
		}
		$this->redirect(array('action' => 'index'));
		
	}
	
}
?>