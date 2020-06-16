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
					<h2 id="page-title"><span><?php echo $lienhe ?></span></h2>
					<h3 id="page-title-sub"></span></h3>
					<div class="cleared"></div>
				</div>
			</div>
<div class="page-container">
					<div class="google-map-container" style="height:400px;">
					<?php echo $setting['Setting']["contactinfo"];?>
					</div>
<div class="page-container">		
					<div class="page-section white-bg">
						<div class="wrap-contact-form" id="sphome">						
					
								<div class="contact-detail">
									<div class="contact-title">Contact Informations</div>
									<div class="contact-detail">

<?php echo $setting['Setting']["address$duoi"];?>
									</div>
								</div>
             	<div class="cleared"></div>
						</div>
					</div>
				</div>	
                </div>

            