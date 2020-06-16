
<script type="text/javascript" src="<?php echo DOMAIN;?>js/ckeditor/ckeditor.js"></script>
<script src="<?php echo DOMAIN;?>js/ckeditor/sample.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo DOMAIN;?>js/ckfinder/ckfinder.js"></script>

<script type="text/javascript" src="<?php echo DOMAIN;?>js/jquery.validate.js"></script>

<style>
  #goi-thieu h1,h2,h3{
	  font-size:12px;
	  font-weight:normal;
	  }

    #main-register input, .text-main input, .a-delete {
    border: 1px solid #CCC;
    border-radius: 5px;
	 padding: 3px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;
    }
.a-delete{padding-top:5px;}

.tblGrid td{
	text-align:center;
	padding:5px;
}

.textfield1{height:25px; width:350px;}

.tb_tt td{padding-top:5px;}

.required_field{color:red;}

</style>

<script>
function confirmDelete(delUrl)
{
if (confirm("Bạn có chắc muốn xóa sản phẩm này không?"))
{
	document.location = delUrl;
}
}
</script> 
 <script>
 

	  $(function(){
	  
	  $("#myform").validate({
		rules: {
	
			
			name: {
				required: true,
				minlength:8
			},
			
			email: {
				required: true,
				email: true,
				
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
			},
		
			
		},
		messages: {
	
			
			name: {
				required: " <br><span style='color:#FF0000; '>Xin vui lòng nhập họ tên của bạn!</span>",
				minlength: " <br><span style='color:#FF0000; '>Họ tên bao gồm ít nhất 8 kí tự!</span>"
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
			},
				
		
			
		}
	});
	  
	
	  

	
	
	

	  })
	
	

	  
  function keypress(e){
 //Hàm dùng d? ngan ngu?i dùng nh?p các ký t? khác ký t? s? vào TextBox
 var keypressed = null;
 if (window.event)
 {
 keypressed = window.event.keyCode; //IE
 }
 else
 { 
 keypressed = e.which; //NON-IE, Standard
 }
 if (keypressed < 48 || keypressed > 57)
 { //CharCode c?a 0 là 48 (Theo b?ng mã ASCII)
 //CharCode c?a 9 là 57 (Theo b?ng mã ASCII)
 if (keypressed == 8 || keypressed == 127)
 {//Phím Delete và Phím Back
 return;
 }
 if (keypressed == 45 || keypressed == 32)
 {//Phím Delete và Phím Back
 return true;
 }
 return false;
 }
 }
 </script>

<link type="text/css" href="<?php echo DOMAIN ?>Product/css/product.css" rel="stylesheet" />
 <link type="text/css" href="<?php echo DOMAIN ?>css/phantrang.css" rel="stylesheet" /> 
 
 
 
  <div id='center' style="width:980px; margin-left:10px;">
                        <div class='new-equipment'>
                             <p class="title_cl">Sản phẩm trong giỏ hàng</p>
 
 <?php // pr($shopingcart); die;?>
<div id="sanphams">
<input type="hidden" id="url" value="<?php echo "gio-hang" ?>" />
    	<div class="top">
        </div>
        <div class="m3" style="padding-left: 20px;">            
             <div class="clearfix"> 		                   
                <div class="roundBoxBody">
                     <div class="text-main" style="padding-top:20px; padding-bottom:20px;">
                         <table  class="tblGrid wf" border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse">
                            <tr>
                                <th width="100">Hình ảnh</th>
                                <th width="200">Tên sản phẩm</th>
                                <th width="70">Số lượng</th>
                                <th width="130">Giá</th>
                                <th width="130">Tổng giá</th>
                                
                            </tr>
                            <?php $total=0; $i=0; foreach($shopingcart as $key=>$product) {?>
                            <?php if($product['name']!=null){?>
                            <tr>       
                                <td class="tal" align="center"><img width="70"src="<?php echo DOMAINAD.'timthumb.php?src='.$product['images']?>&amp;h=50&amp;w=70&amp;zc=1" /></td>
                                <td style="padding-left: 5px;"><?php echo $product['name']; ?></td>
                                <td class="tal">
                               
								<?php echo $product['sl']?>
                                
                             
								
                                </td>
                               
                                <td class="tal" align="center"><font color="red"><?php echo number_format( $product['price']); ?> VNĐ</font></td>
                                <td class="tal" align="center"><font color="red"><?php echo number_format($product['total']); ?> VNĐ</font></td>
                                 
                            </tr>
                            <?php $total +=$product['total']; $i++; }} 
							
							
							?> 
                              <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tổng tiền phải trả:</td>
                            <td><?php echo number_format($total);?> VNĐ</td>
                            </tr> 
                        </table>
                        <?php if($i==0){ echo"<br/><b>Chưa có sản phẩm nào trong giỏ hàng!</b><br/>";}?>
                       
					   
                      </div>
                </div>                  
             </div>            
             <div class="clearfix"></div>
        </div> 
        <div class="b3"><div class="b3"><div class="b3"></div></div></div>
    </div>
	
			<div style="overflow:hidden; width:100%; margin-bottom:20px;">	       
					<form action="<?php echo DOMAIN?>dat-mua" method="POST" name="images" id='myform'/>
						 <table border="0" cellpadding="0" cellspacing="0" style="margin-top:30px;width:100%; display:block;" class="tb_tt">
						 
					<tr>
                        <td width="100%" nowrap="" height="10" align="center" colspan="2">
						<a name="gh"></a>
						<h2 style="font-weight:bold; color:#FF6600" >THÔNG TIN CỦA BẠN</h2>
						</td>
                      </tr>
                    
                      

                      <tr>
                        <td width="100%" nowrap="" height="10" colspan="2"></td>
                      </tr>
                      

                      <tr>
                        <td width="30%" nowrap="" height="28" align="center" class="label1">
                        Tên của bạn
                        <span class="required_field">(*)</span></td>
                        <td width="70%">
						<input name="name" value="<?php if($this->Session->check('user_name')) echo $this->Session->read('user_name'); ?>" class="textfield1" />
                           
                         </td>
                        </tr>
						
						
                      <tr>
                        <td width="30%" nowrap="" height="28" align="center" class="label1">
                        Email
                        <span class="required_field">(*)</span></td>
                        <td width="70%">
						<input name="email" value="<?php if($this->Session->check('email')) echo $this->Session->read('email'); ?>" class="textfield1" />
                           
                         </td>
                        </tr>
						
						
                      <tr>
                        <td width="30%" nowrap="" height="28" align="center" class="label1">
                        Điện thoại
                        <span class="required_field">(*)</span></td>
                        <td width="70%">
						<input name="phone" value="<?php if($this->Session->check('phone')) echo $this->Session->read('phone'); ?>" class="textfield1" onkeypress="return keypress(event);"/>
                           
                         </td>
                        </tr>
						
						 <tr>
                        <td width="30%" nowrap="" height="28" align="center" class="label1">
                        Địa chỉ
                        <span class="required_field">(*)</span></td>
                        <td width="70%">
						<input name="address" value="<?php if($this->Session->check('address')) echo $this->Session->read('address'); ?>" class="textfield1" />
                           
                         </td>
                        </tr>
							
                      <tr>
                        <td width="30%" nowrap="" height="28" align="center" class="label1">
                        Tiêu đề
                       </td>
                        <td width="70%">
						<input name="title" class="textfield1" />
                           
                         </td>
                        </tr>	
						
							
                    <tr>
                        <td width="100%" height="30" align="center" class="title_head" colspan="2" style="color:#000;">NỘI DUNG</td>
                      </tr>
                      <tr>
                        <td width="100%" align="center" colspan="2">
							   <textarea style="margin-left:20px;" class="ckeditor text-input textarea"  name="content" cols="65" rows="5"></textarea>
						  
						 
                       </td>
					   
					   <tr>
					   <td colspan="2">
					       
                        <div style="float:left; margin-left:10px;padding-top:15px; padding-right:20px;" class="div-tt">
							<input type="submit" value="Gửi đi" />
						</div>
                        <div style="float:left;margin-left:10px; padding-top:15px;" class="div-tt">
						<input type="reset" value="Soạn lại" /></div>
					   
					   </td>
					   </tr>
					   
					
						</table>
						</form>
					</div>
 </div>


           
        <div class="clear margin"></div>
    </div><!--end #body-->
    







