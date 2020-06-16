<link type="text/css" href="<?php echo DOMAIN ?>Product/css/product.css" rel="stylesheet" />

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
	padding:5px;
}

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
	  $('.sl').change(function (){
	  
	
	  
			window.location.href="<?php echo DOMAIN;?>sua-gio-hang/"+$(this).attr('nam')+"/"+$(this).val();
	  }) ;
	  
	  });
							  
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
                                <th width="50">Xử lý</th>
                            </tr>
                            <?php $total=0; $i=0; foreach($shopingcart as $key=>$product) {?>
                            <?php if($product['name']!=null){?>
                            <tr>       
                                <td class="tal" align="center"><img width="70"src="<?php echo DOMAINAD.'timthumb.php?src='.$product['images']?>&amp;h=50&amp;w=70&amp;zc=1" /></td>
                                <td style="padding-left: 5px;"><?php echo $product['name']; ?></td>
                                <td class="tal">
                               
								
								<input name="soluong" class="sl" id="soluong<?php echo $key?>" onkeypress="return keypress(event);" nam="<?php echo $key?>"  value="<?php echo $product['sl']?>" />
                                
                             
								
                                </td>
                               
                                <td class="tal" align="center"><font color="red"><?php echo number_format( $product['price']); ?> VNĐ</font></td>
                                <td class="tal" align="center"><font color="red"><?php echo number_format($product['total']); ?> VNĐ</font></td>
                                <td class="tal" align="center">
						
							   
                                <p style="padding-top:3px;">
                                <a class="a-delete" href="javascript:confirmDelete('<?php echo DOMAIN;?>product/deleteshopingcart/<?php echo $key;?>')"><img src="<?php echo DOMAINAD?>images/icons/cross.png" alt="Delete" /></a></p>
                                </td>        
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
                        <div style="float:left; padding-top:15px; padding-right:20px;" class="div-tt"><a href="<?php echo DOMAIN?>" onclick=""><input type="button" value="Tiếp tục mua" /></a></div>
                        <div style="float:left; padding-top:15px;" class="div-tt"><a href="<?php echo DOMAIN?>dat-mua"><input type="button" value="Hoàn tất" /></a></div>
                      </div>
                </div>                  
             </div>            
             <div class="clearfix"></div>
        </div> 
        <div class="b3"><div class="b3"><div class="b3"></div></div></div>
    </div>
    
 </div>


           
        <div class="clear margin"></div>
    </div><!--end #body-->
    







