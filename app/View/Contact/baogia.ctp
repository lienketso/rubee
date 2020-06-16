<?php 
//echo $this->Session->read('language'); die;
if($this->Session->read('language')=='vie') 
{  
  include('../Vendor/lang_vn.php');
  $duoi=null; 
} 
elseif($this->Session->read('language')=='chi') 
{  
  include('../Vendor/lang_chi.php');
  $duoi="_chi"; 
} 
else { $duoi="_eg"; include('../Vendor/lang_eng.php');
 }?>
<script type="text/javascript" src="<?php echo DOMAIN; ?>js/jquery.validate.js"></script>
<script type="text/javascript">
                   
    $(function(){
	  
        $("#myform").validate({
            rules: {
	
			
                name: {
                    required: true,
                    minlength:2
                },
			
                email: {
                    required: true,
                    email: true
				
                },
			
                phone: {
                    required: true,
                    number: true,
                    minlength: 7,
                    maxlength: 15
                },
			
			
                address: {
                    required: true,
                    minlength:5
                }
		
			
            },
            messages: {
	
			
                name: {
                    required: " <br><span style='color:#FF0000; '>Xin vui lòng nhập họ tên của bạn!</span>",
                    minlength: " <br><span style='color:#FF0000; '>Họ tên bao gồm ít nhất 2 kí tự!</span>"
                },
                phone: {
                    required: " <br><span style='color:#FF0000; '>Xin vui lòng nhập số điện thoại!</span>",
                    number: "<br><span style='color:#FF0000; '>Số điện thoại chỉ bao gồm các số từ 0 - 9!</span>",
                    minlength: "<br><span style='color:#FF0000; '>Số điện thoại ít nhất 7 ký tự!</span>",
                    maxlength: "<br><span style='color:#FF0000; '>Số điện thoại lớn nhất 15 ký tự!</span>"
                },
			
                email: {
                    required: " <br><span style='color:#FF0000;'>Xin vui lòng nhập email!</span>",
                    minlength: " <br><span style='color:#FF0000;'>Họ tên bao gồm ít nhất 8 kí tự!</span>"
                },
				
                address: {
                    required: " <br><span style='color:#FF0000;'>Xin vui lòng nhập địa chỉ của bạn!</span>",
                    minlength: " <br><span style='color:#FF0000;'>Địa chỉ bao gồm ít nhất 5 kí tự!</span>"
                }
				
		
			
            }
        });
	  
	
	  

	
	
	

    })
	
</script>
<?php
$setting = $this->requestAction('/comment/setting');?>
<div id="page-title-bar">
				<div class="wrap">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span>ĐỀ NGHỊ GỬI BÁO GIÁ</span></h2>
					<h3 id="page-title-sub"></span></h3>
					<div class="cleared"></div>
				</div>
			</div>
<div class="page-container">

<div class="page-container">		
					<div class="page-section white-bg">
						<div class="wrap-contact-form">						
					
								<div class="contact-detail">
									<div class="contact-title" style="color: #13b991;
border-bottom: 2px solid #b3b3b3;">Hỗ trợ trực tuyến</div>
									<div class="contact-detail">

			<p style="font-size: 15px;
padding-top: 10px;
font-weight: bold;color:#000;">TƯ VẤN TỪ NHÂN VIÊN CỦA CHÚNG TÔI</p>
            <?php
            $support = $this->requestAction('comment/support');
            foreach ($support as $row) {
                ?>
                <div style="line-height: 29px;
margin-top: 10px;
float: left;
text-align: left;
font-size: 18px;
margin-left: 5px;
width: 285px;"><?php echo $row['Support']['name']; ?> : <span style="color:#be0330;font-weight:bold;"><?php echo $row['Support']['telephone']; ?></span><span>  <a style="padding-left: 0px;" border="0" class="a-ya" href="ymsgr:sendIM?<?php echo $row['Support']['yahoo']; ?>">
                        <img style="margin-top: 7px;"class="img-ya" width="80" height="20" border="0" src="http://opi.yahoo.com/online?u=<?php echo $row['Support']['yahoo']; ?>&amp;m=g&amp;t=2&amp;l=us"/>
                    </a></span><span>  <a href="skype:<?php echo $row['Support']['skype']; ?>?call"><img style="width: 55px;
height: 25px;" src="<?php echo DOMAIN ?>images/img_sky.gif"/>
   

            </a></span></div>
          <br/>
				
            
            <?php } ?>
									</div>
								</div>
             		<form  id="myform" name="contactForm" class="form_contact"  onsubmit="return validateForm();" method="post" action="<?php echo DOMAIN?>contact/index">
								<div class="contact-form">
									<div class="contact-name-field">
										<input type="text" name="name" id="name" value="" placeholder="Họ tên* ">
									</div>
                                    <div class="contact-website-field">
										<input type="text" name="phone" id="phone" value="" placeholder="Điện thoại*">
									</div>
									<div class="contact-email-field">
										<input type="text" name="email" id="email" value="" placeholder="E-Mail* ">
									</div>
									<div class="contact-website-field">
										<input type="text" name="address" id="address" value="" placeholder="Địa chỉ ">
									</div>
										<div class="contact-website-field">
										<input type="text" name="title" id="title" value="" placeholder="Tiêu đề ">
									</div>
									<div class="contact-textarea">
										<textarea rows="8" name="content1" id="content" placeholder="Nội dung* "></textarea>
									</div>
									<div class="contact-button">
										<input id="guimail" type="submit" value="Gửi mail" name="save" value="SUBMIT YOUR MESSAGE">
									</div>
								</div>
								<div class="cleared"></div>
							</form>
						</div>
					</div>
				</div>	