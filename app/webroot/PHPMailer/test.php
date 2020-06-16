<?php
	$txt_url = $_POST["txt_url"];
	$txt_name = $_POST["txt_name"];
	$txt_phone = $_POST['txt_phone'];
	$txt_content = $_POST['txt_content'];
	// ini_set( 'display_errors', 1 );
 //    error_reporting( E_ALL );
 //    $from = "admin@rubee.com.vn";
 //    $to = "thanhan1507@gmail.com";
 //    $subject = "Checking PHP mail";
 //    $message = "PHP mail works just fine";
 //    $headers = "From:" . $from;

require_once('class.phpmailer.php');
$mail             = new PHPMailer(); // defaults to using php "mail()"
$body             = '<p>Khách hàng đăng ký tư vấn từ website rubee.com.vn</p>';
$body             .= '<p>Link đăng ký : '.$txt_url.'</p>';
$body .= '<p>Họ tên : '.$txt_name.'</p>';
$body .= '<p>Điện thoại : '.$txt_phone.'</p>';
$body .= '<p>Nội dung cần tư vấn : '.$txt_content.'</p>';
$mail->AddReplyTo("thanhan1507@gmail.com","admin");
$mail->SetFrom('admin@rubee.com.vn', 'Rubee');
$mail->AddReplyTo("thanhan1507@gmail.com","support");
$address = "contact@rubee.com.vn";
$mail->AddAddress($address, "Kỹ thuật IT");
$mail->Subject    = "Form dk rubee.com.vn";
$mail->AltBody    = "Người dùng đăng ký từ form đăng ký website rubee.com.vn"; // optional, comment out and test
$mail->MsgHTML($body);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo 'True';
	return true;
  	echo "Message sent!";
  
}


	


?>