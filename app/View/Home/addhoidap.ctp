
<script type="text/javascript" src="<?php echo DOMAINAD;?>js/ckeditor/ckeditor.js"></script>
<script src="<?php echo DOMAINAD;?>js/ckeditor/sample.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo DOMAINAD;?>js/ckfinder/ckfinder.js"></script>
<?php echo $this->Html->script('jquery.validate', true); ?>
<style>
#center{
	font-size:12px;
}
.p_title{
	background: none repeat scroll 0 0 #DDE8F4;
    border-bottom: 1px solid #ABC5E4;
    border-top: 2px solid #ABC5E4;
    color: #444444;
    font-size: 15px;
    font-weight: bold;
    padding: 4px 11px 6px
}
#submit{
background: none repeat scroll 0 0 #6D84B4;
    border-color: #3B5998;
    float: right;
	color:#fff;
	border-radius: 2px 2px 2px 2px;
    border-style: solid;
    border-width: 1px;
    color: #FFFFFF;
    cursor: pointer;
    display: block;
    font-family: Tahoma;
    font-size: 12px;
    font-weight: bold;margin-bottom: 10px;
    height: 29px;
    padding-bottom: 8px;
    padding-top: 5px;
    text-align: center;
    width: 105px;
}

.td_xam{
	background:#F7F7F7;
}
.p_error{
	color:red;

}

.p_email{
	color: #006738;
    font-size: 12px;
    font-weight: bold;
}

.td_sau{
	border:1px solid #dedede;
}
.div_admin{
margin-left:20px;
background:#dedede; 
border-top:1px solid #dedede;
border-bottom:1px solid #dedede;
padding-lef:10px;
}
.table_admin td{
	padding:5px;color: #006738;
}
</style>
<script>
	
</script>




<?php echo $this->Html->css(array('content', 'phantrang')); ?>	
<div id='center' style="
width: 929px;color:#006738;
margin-top: 36px;">
<div style="width:500px;float:left;min-height: 507px;
background: white;border: 2px solid #b1a89c;
border-radius: 21px;padding-bottom: 31px;">
<p style="font-size: 29px;
text-align: center;
padding-top: 20px;
border-bottom: 1px solid #eae6cf;
padding-bottom: 10px;
width: 480px;
margin-left: 10px;">KHÁCH HÀNG VIẾT VỀ HFM</p>
			<?php 
				//pr($email );die;
				foreach($email as $row) {
				?>
			
				<tr>
					<td class="td_sau" width="100%">
					
					<table width="100%" class="table_admin">
					<tr>
						<td>
							<span class="p_email">
							<?php echo $row['Email']['name']?>&nbsp;(&nbsp;<?php echo $row['Email']['address']?>&nbsp;)
							</span>
							<font color="#006738"> - Vào lúc: 
							<?php echo date("d/m/Y",strtotime($row['Email']['created']))?>
							</font>
						</td>
					</tr>
					<tr>
						<td>
						
							<?php echo $row['Email']['content']?>
						</td>
					</tr>
					<?php if($row['Email']['order']!=''){?>
					<tr>
					<td>
					
						<div class="div_admin">
							<p>
							<span class="p_email">
							<?php echo "Trả lời: "?>
							</span>
							<font color="#006738"> - Vào lúc:
							<?php echo date("d/m/Y",strtotime($row['Email']['modified']))?>
							</font>
							</p>
							<div style="padding:10px;">
								<?php echo $row['Email']['order']?>
							</div>
						</div>
					</td>
					</tr><?php } ?>
					</table>		
						
					</td>
				</tr>
				<?php } ?>
				
	<tr>
				
			<td>
				<div class="pt" style="width: 493px;">
					<div class="pt-pagi">
						<?php echo $this->Paginator->numbers(); ?>
					</div><!-- End pt-pagi-->
				</div>
			</td>
		</tr>	
</div>
	<div>
	<div  style="width: 378px;
float: right;border: 2px solid #b1a89c;
background: white;
border-radius: 21px;
padding-left: 23px;
padding-top: 20px;"class="t">
	<tr>
		<td class="td_xam">
		<p class="p_title">
			Ý kiến khách hàng
		</p>
		</td>
	</tr>	
		<form style="width: 345px;"id="myform" method="POST" action="<?php echo DOMAIN?>home/addhoidap" onsubmit="return test()">
		<td><p class="p_error" style="width:300px;" >&nbsp;</p></td>
		<tr>	
		<td><p class="p_error">Họ tên : </p></td>
	
	 <td><?php echo $this->Form->input('Email.name',array('label'=>'','class'=>'text-input medium-input','id'=>'name'));?></td>
	
		</tr>
		<tr>
		<td><p class="p_error">Điện thoại : </p></td>
	
	 <td><?php echo $this->Form->input('Email.phone',array('label'=>'','class'=>'text-input medium-input','id'=>'phone'));?></td>
	
		</tr>
		<tr>
		<td><p class="p_error">Email : </p></td>
	
	 <td><?php echo $this->Form->input('Email.email',array('label'=>'','class'=>'text-input medium-input','id'=>'email'));?></td>
	
		</tr>
		<tr>
		<td><p class="p_error">Địa chỉ : </p></td>
	
	 <td><?php echo $this->Form->input('Email.address',array('label'=>'','class'=>'text-input medium-input','id'=>'address'));?></td>
	
		</tr>
		<td><p class="p_error">&nbsp;</p></td>
		<tr>
		
                  
					<td class="td_xam">
                        <?php
                            $CKEditor = new CKEditor();
                            $CKEditor->config['width'] = '98%';
                            $CKEditor->config['height'] = '113';
                            CKFinder::SetupCKEditor( $CKEditor ) ;
                            
                            $initialValue = "";
                            echo $CKEditor->editor("data[Email][content]", $initialValue, "compact");
                        ?>
						  
						<p class="p_error">ý kiến ít nhất 5 ký tự và không vượt quá 2000 ký tự!</p>
						
                    </td>
				
                </tr>
				
				<tr>
				<td align="right" class="td_xam">
					<input type="submit" value="Gửi nhận xét" id="submit"/>
				</td>	
				</tr>
			
				</form>	
					
			
		</div>
	</div>
</div>
<script type="text/javascript">
                   
    $(function(){
	  
        $("#myform").validate({
            rules: {
	
			
                name: {
                    required: true,
                    minlength:8
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
                }
				
		
			
            }
        });
	  
	
	  

	
	
	

    })
	
</script>