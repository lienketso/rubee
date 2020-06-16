<?php

/**
 * Description of ContactController
 * @author : Trung Tong
 * @since Oct 19, 2012
 */
class ContactController extends AppController {

    public $name = 'Contact';
    public $uses = array('Settings', 'Contact');
    public $components = array('Email');

	public function index1() {
		$this->set('title_for_layout','Liên hệ');//pr($typeName);die;
        $x = $this->Settings->read(null, 1);
        if ($this->request->is('post')) {
            	
            $name = $_POST['name'];
			$gioitinh = $_POST['gioitinh'];
			$ngaysinh = $_POST['ngaysinh'];
			$hokhau = $_POST['hokhau'];
			$address = $_POST['address'];
			 $email = $_POST['email'];
            $mobile = $_POST['mobile'];
           $totnghieptruong = $_POST['totnghieptruong'];
		   $namtotnghiep = $_POST['namtotnghiep'];
            $dangky = $_POST['dangky'];
           $title = $_POST['title'];
            $noidung = $_POST['content1'];

            $this->Email->from = $name . '<' . $email . '>';
            $this->Email->to = $x['Settings']['email'];
            $this->Email->subject = $title;
            $this->Email->template = 'default';
            $this->Email->sendAs = 'both';
           
			$this->set('name', $name);
			$this->set('gioitinh', $gioitinh);
			$this->set('ngaysinh', $ngaysinh);
			$this->set('hokhau', $hokhau);
				$this->set('address', $address);
			$this->set('email', $email);
            $this->set('mobile', $mobile);
            
            $this->set('totnghieptruong', $totnghieptruong);
            $this->set('namtotnghiep', $namtotnghiep);
			$this->set('dangky', $dangky);
			$this->set('title', $title);
            $this->set('content1', $noidung);
            $this->Contact->save($this->data);
			$this->Email->send();
			
			 if ($this->Email->send()) {
                $this->Session->setFlash(__('Thêm mới danh mục thành công', true));
                echo '<script language="javascript"> alert("Gửi mail thành công"); location.href="' . DOMAIN . '";</script>';
            }
            else
                $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
            echo '<script language="javascript"> alert("gửi mail không thành công"); location.href="' . DOMAIN . '";</script>';
			
            
        }
    }
    public function chat()
    {
       $this->set('title_for_layout','Hỗ trợ trực tuyến') ;
    }
    public function index() {
		$this->set('title_for_layout','Liên hệ');//pr($typeName);die;
        $x = $this->Settings->read(null, 1);
        if ($this->request->is('post')) {
            
            $name = $_POST['name'];
			 $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $title = $_POST['title'];
            $noidung = $_POST['content1'];

            $this->Email->from = $name . '<' . $email . '>';
            $this->Email->to = $x['Settings']['email'];
            $this->Email->subject = $title;
            $this->Email->template = 'default';
            $this->Email->sendAs = 'both';
            $this->set('name', $name);
			$this->set('address', $address);
            $this->set('phone', $phone);
            $this->set('email', $email);
            $this->set('title', $title);
            $this->set('content1', $noidung);
            $this->Contact->save($this->data);
		
			
			 if ($this->Email->send()) {
                $this->Session->setFlash(__('Thêm mới danh mục thành công', true));
                echo '<script language="javascript"> alert("Gửi mail thành công. Cảm ơn  chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất"); location.href="' . DOMAIN . '";</script>';
            }
            else
                $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
            echo '<script language="javascript"> alert("gửi mail không thành công"); location.href="' . DOMAIN . '";</script>';
			
            
        }
    }
	 public function baogia() {
		$this->set('title_for_layout','Đề nghị gửi báo giá');//pr($typeName);die;
        $x = $this->Settings->read(null, 1);
        if ($this->request->is('post')) {
            
            $name = $_POST['name'];
			 $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $title = $_POST['title'];
            $noidung = $_POST['content1'];

            $this->Email->from = $name . '<' . $email . '>';
            $this->Email->to = $x['Settings']['email'];
            $this->Email->subject = $title;
            $this->Email->template = 'default';
            $this->Email->sendAs = 'both';
            $this->set('name', $name);
			$this->set('address', $address);
            $this->set('phone', $phone);
            $this->set('email', $email);
            $this->set('title', $title);
            $this->set('content1', $noidung);
            $this->Contact->save($this->data);
		
			
			if ($this->Email->send()) {
                $this->Session->setFlash(__('Thêm mới danh mục thành công', true));
                echo '<script language="javascript"> alert("Gửi mail thành công. Cảm ơn  chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất"); location.href="' . DOMAIN . '";</script>';
            }
            else
                $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
            echo '<script language="javascript"> alert("gửi mail không thành công"); location.href="' . DOMAIN . '";</script>';
			
            
        }
    }
 public function contact() {
		$this->set('title_for_layout','Liên hệ');//pr($typeName);die;
        $x = $this->Settings->read(null, 1);
        if ($this->request->is('post')) {
            	
            $name = $_POST['name'];
			$gioitinh = $_POST['gioitinh'];
			$ngaysinh = $_POST['ngaysinh'];
			$hokhau = $_POST['hokhau'];
			$address = $_POST['address'];
			 $email = $_POST['email'];
            $mobile = $_POST['mobile'];
           $totnghieptruong = $_POST['totnghieptruong'];
		   $namtotnghiep = $_POST['namtotnghiep'];
            $dangky = $_POST['dangky'];
           $title = $_POST['title'];
            $noidung = $_POST['content1'];

            $this->Email->from = $name . '<' . $email . '>';
            $this->Email->to = $x['Settings']['email'];
            $this->Email->subject = $title;
            $this->Email->template = 'default';
            $this->Email->sendAs = 'both';
           
			$this->set('name', $name);
			$this->set('gioitinh', $gioitinh);
			$this->set('ngaysinh', $ngaysinh);
			$this->set('hokhau', $hokhau);
				$this->set('address', $address);
			$this->set('email', $email);
            $this->set('mobile', $mobile);
            
            $this->set('totnghieptruong', $totnghieptruong);
            $this->set('namtotnghiep', $namtotnghiep);
			$this->set('dangky', $dangky);
			$this->set('title', $title);
            $this->set('content1', $noidung);
            $this->Contact->save($this->data);
			
			
			 if ($this->Email->send()) {
                $this->Session->setFlash(__('Thêm mới danh mục thành công', true));
                echo '<script language="javascript"> alert("Gửi mail thành công"); location.href="' . DOMAIN . '";</script>';
            }
            else
                $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
            echo '<script language="javascript"> alert("gửi mail không thành công"); location.href="' . DOMAIN . '";</script>';
			
            
        }
    }
}