<?php echo $this->Html->css('dangnhap'); ?>
<?php echo $this->Html->css('register-news'); ?>
<?php echo $this->Html->script('jquery.validate', true); ?>

<script>


jQuery(document).ready(function($) {
	
	$("#myform").validate({
		rules: {
	
			email: {
				required: true,
				email: true
			},
	
		},
		messages: {
		
			email: {
				required: " <br><span style='color:#FF0000; padding-left:148px;'>Xin vui lòng nhập vào Email!</span>",
				email: " <br><span style='color:#FF0000; padding-left:148px;'>Email không đúng!</span>"
			},
			
			
		}
	});	
});

</script>

<?php 
		$setting=$this->requestAction('comment/setting');

				?>
				
			
				
<?php echo $this->element('content_left')?>				
<div id="content_content">
				
 <div class="div_about">
	<div class="div_top">
		<p class="p_title">Đăng ký email để nhận thông tin</p>
		
	</div>

<div class="div_nd">
	<div class="dangky">
  <a name="reg"></a>
   
    <div class="col_product">
        <div class="text-main">
		
         <div id="main-register">
             <form method="post" action="<?php echo DOMAIN?>home/addemail"  id="myform" name="image" enctype="multipart/form-data">
           
            <div class="content-register" id="email-register">
			
               <p style="width:150px;float:left;" for="email"><i>Email đăng ký (<span style="color:red" >*</span>)</i> </p>
			  
			   <input id="email" class="text-input-register" name="email" type="text" />
               <div id="validate-emai-register"><span id="error"></span></div>
            </div>
						
                 
        
			
            <div id="input-register" style="padding-left:190px; padding-top:20px;">
                <input type="submit" value="Đăng ký email" />
                <input type="reset" name=""  value="Reset" />
            </div>
           </form>
        </div>
     </div>
    </div>
  </div><!-- End dangky-->
</div>




</div>


</div><!-- End content_center-->


