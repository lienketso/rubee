<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {



	public function beforeFilter() {

		$this->Session->write('language',"vie");
// 		$fileName = 'https://rubee.com.vn/robot.txt'; 
		
// 		$file_pointer = fopen('robot.txt', 'w+');  
// // writing on a file named gfg.txt  
// 		fwrite($file_pointer, 'Please dont hack me !');  
// 		fclose($file_pointer);    

// Use unlink() function to delete a file  
		// if (!unlink($file_pointer)) {  
		// 	return false;
		// }  
		// else {  
		// 	return true;
		// }  
		if(isset($_REQUEST)){
			  //print_r($_REQUEST);
			// $dbs = new mysqli('localhost', 'root', '', 'rubee');
	 	// 	$this->write_mysql_log('Insert data',$dbs);
		}
	}


	// $dbs = new mysqli('localhost', 'root', '', 'rubee');
	// $this->write_mysql_log('Insert data',$dbs);
	

public function write_mysql_log($message, $dbs)
{
  // Check database connection
	if( ($dbs instanceof MySQLi) == false) {
		return array('status' => false, 'message' => 'MySQL connection is invalid');
	}

  // Check message
	if($message == '') {
		return array('status' => false, 'message' => 'Message is empty');
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
		return array('status' => true);  
	}
	else {
		return array('status' => false, 'message' => 'Unable to write to the database');
	}
}





}





      /** if(isset($_GET['language'])) {
            if($_GET['language']=="vie") {
			     $this->Session->write('language',"vie");	
			}
			elseif($_GET['language']=="eng") {
			     $this->Session->write('language','eng');	
			}
			else {
			     $this->Session->write('language','chi');	
			}
           // $this->redirect($this->referer());  	 	
		}
		else {
		  if($this->Session->check('language'))
          {
            $this->Session->write('language',$this->Session->read('language'));
          }
          else
          {
            $this->Session->write('language',"vie");
          }
           
		}
        
       
    }

}
	//	if(!$this->Session->check('test')){
		//		$this->Session->write('test','gfgffgg');
        
        **/
