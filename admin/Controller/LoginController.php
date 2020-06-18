<?php

class LoginController extends AppController {

    public $name = 'Login';
    public  $helpers = array('Session', 'Form', 'Html');
    public $uses = array('Administrator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'login';
    }

    public function index() {
       
    }
    public function write_mysql_log($message, $dbs)
{
  // Check database connection
    if( ($dbs instanceof MySQLi) == false) {
        return array(status => false, message => 'MySQL connection is invalid');
    }

  // Check message
    if($message == '') {
        return array(status => false, message => 'Message is empty');
    }

  // Get IP address
    if( ($remote_addr = $_SERVER['REMOTE_ADDR']) == '') {
        $remote_addr = "REMOTE_ADDR_UNKNOWN";
    }

  // Get requested script
    if( ($request_uri = $_SERVER['REQUEST_URI']) == '') {
        $request_uri = "REQUEST_URI_UNKNOWN";
    }

  // Escape values
    $message     = $dbs->escape_string($message);
    $remote_addr = $dbs->escape_string($remote_addr);
    $request_uri = $dbs->escape_string($request_uri);

  // Construct query
    $sql = "INSERT INTO my_log (remote_addr, request_uri, message) VALUES('$remote_addr', '$request_uri','$message')";

  // Execute query and save data
    $result = $dbs->query($sql);

    if($result) {
        return array(status => true);  
    }
    else {
        return array(status => false, message => 'Unable to write to the database');
    }
}
    /*
     * Check Login
     * @create : 09-10-2012
     */
    function login() {
        $data['Administrator'] = $this->data['Administrator'];
        if (empty($data['Administrator']['name'])) {
            $this->Session->setFlash(__('Xin vui lòng nhập tên đăng nhập', true));
            $this->redirect(array('action' => 'index'));
        } elseif (empty($data['Administrator']['password'])) {
            $this->Session->setFlash(__('Xin vui lòng nhập mật khẩu', true));
            $this->redirect(array('action' => 'index'));
        } else {
            $chek = $this->Administrator->findByName($data['Administrator']['name']);
            if ($chek) {
                if ($chek['Administrator']['password'] == md5($data['Administrator']['password'])) {
                    $this->Session->write('id', $chek['Administrator']['id']);
                    $this->Session->write('name', $chek['Administrator']['name']);
                    $db = new mysqli('localhost', 'root', '', 'rubee');
                    $this->write_mysql_log('Login admin',$db);
                    $this->redirect('/home');
                } else {
                    $this->Session->setFlash(__('Mật khẩu không đúng !', true));
                    $this->redirect('/');
                }
            } else {
                $this->Session->setFlash(__('Xin vui lòng đăng nhập lại', true));
                    $this->redirect('/');
            }
        }
        // $this->Session->write('id', 4);
        // $this->Session->write('name','admin');
        // $this->redirect('/home');
    }

    //lay lai password
    function password() {
        $this->layout = 'password';
    }

    function check_pass() {
        
    }

    //logout ra khoi he thong
    function logout() {
        $this->Session->delete('id');
        $this->Session->delete('name');
        $this->redirect(array('action' => 'index'));
    }

}
