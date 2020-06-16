<script type="text/javascript">
$(function() {
	$('#gallery a').lightBox();
});
</script>

<script src="<?php echo DOMAIN?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php echo DOMAIN?>Product/js/jquery.jqzoom-core.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo DOMAIN?>Product/css/jquery.jqzoom.css" type="text/css">
<style type"text/css">

body{margin:0px;padding:0px;font-family:Arial;}
a img,:link img,:visited img { border: none; }
table { border-collapse: collapse; border-spacing: 0; }
:focus { outline: none; }
*{margin:0;padding:0;}
p, blockquote, dd, dt{margin:0 0 8px 0;line-height:1.5em;}
fieldset {padding:0px;padding-left:7px;padding-right:7px;padding-bottom:7px;}
fieldset legend{margin-left:15px;padding-left:3px;padding-right:3px;color:#333;}
dl dd{margin:0px;}
dl dt{}

.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden;}
.clearfix{display:block;zoom:1}


ul#thumblist{display:block;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{display:block;border:1px solid #CCC;}
ul#thumblist li a.zoomThumbActive{
    border:1px solid red;
}

.jqzoom{

	text-decoration:none;
	float:left;
}


#myform{margin-top:10px;}
#thumblist img{
	margin:auto !important;
	}
.tb td{ padding:5px;}
.submit{
	padding:2px;
	margin-left:10px;
}

.input{width:300px; height:25px;}


</style>
<script type="text/javascript">

$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'innerzoom',
            preloadImages: false,
            alwaysOn:false
        });
		
			
		
});


</script>

<link rel="stylesheet" href="<?php echo DOMAIN?>css/organic_style.css">
<script src="<?php echo DOMAIN?>js/organictabs.jquery.js"></script>
	<script type="text/javascript">

    $(function($) {
    
			$("#example-two1").organicTabs({
                "speed": 200
            });
			
		
        });
	
</script>


<?php echo $this->Html->script('jquery.validate');?>
<script>

    $(function($) {

			$("#myform").validate({
		rules: {
			
		
			
			email: {
				required: true,
				email: true
			},
			
			
			
			
			content: {
				required: true
								
			},
			
		},
		messages: {
		
	
			email: {
				required: " <br><span style='color:#FF0000;'>Xin vui lòng nhập vào Email!</span>",
				email: " <br><span style='color:#FF0000;'>Email không đúng!</span>"
			},
			content: {
				required: "<br><span style='color:#FF0000;' >Xin vui lòng nhập nội dung bình luận !</span>",
				
			},
			
			
		}
	});	
	
	});	
</script>


<link type="text/css" href="<?php echo DOMAIN ?>Product/css/product.css" rel="stylesheet" />
<div class="ct_title">
	<ul>
			<li><a href="<?php echo DOMAIN?>">Trang chủ</a></li>
			<li> > </li>
			<li class="li_cuoi">
				<a href="<?php echo DOMAIN?>danh-sach-san-pham">Sản phẩm</a>
			</li>
	</ul>
</div>

<div id="content_content">

<link type="text/css" href="<?php echo DOMAIN ?>css/phantrang.css" rel="stylesheet" />
 <div class="div_about">
	
	
<div class="div_spcl">

<p class="title_cl">Kết quả tìm kiếm cho từ khóa "<?php echo $txt?>" (<?php echo $result?>)</p>
<div class="div_nd">
	<?php 
	$i=0;
	foreach($product as $row) { $i++;
	
	?>
		<div class="product <?php if($i%4!=1) echo 'product1';?>">
			<a href="<?php echo DOMAIN?>chi-tiet-san-pham/<?php echo $row['Product']['id']?>">
				<div class="div_img">
				<?php if( $row['Product']['images']!='') {?>
					<img src="<?php echo DOMAINAD.$row['Product']['images']?>" alt=""/>
					
					<?php } else {?>
					<img src="<?php echo DOMAIN.'images/no-image.png';?>" alt=""/>
					<?php }?>
				</div>
				</a>
				
				<p class="p_price">
				<a href="<?php echo DOMAIN?>chi-tiet-san-pham/<?php echo $row['Product']['id']?>">
					<?php echo $row['Product']['name']?> - <font style="font-weight:bold;"><?php echo $row['Product']['code']?></font>
				</a>	
				</br><span class='price'></span><span class='number-price'>
				<?php echo $row['Product']['price'].' VNĐ' ?>
				 </span> 
				
				
				
				 </p>
				 <p style="color:#818181;">
					<?php echo $row['Product']['khuyenmai'] ?>	<a href="<?php echo DOMAIN?>product/addshopingcart/<?php echo $row['Product']['id']?>">
						<img  style="width:25px; height:25px;"src="<?php echo DOMAIN?>images/cart.png"/>
					</a>
				 </p>
				
		</div>
	
	<?php } ?>
</div>

					<div class="pt">
                                   	<div class="pt-pagi">
		 									 <?php
												//echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
												//echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
												echo $this->Paginator->numbers()." ";
											//	echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
												//echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
											?>
                                      </div><!-- End pt-pagi-->
                    </div><!-- End pt-->
</div><!--End div_spcl-->

</div>

						
						
						 
						

 
 
 </div><!--content_content-->
 
<div class="ct_right">
<div class="div_right1">
		<p>Tìm theo giá</p>
		<ul>
			<li><a href="<?php echo DOMAIN?>loc-theo-gia/1">
				Từ 5.000.000đ đến 15.000.000đ
			</a></li>
			<li><a href="<?php echo DOMAIN?>loc-theo-gia/2">
				Từ 15.000.000đ đến 20.000.000đ
			</a></li>
			<li><a href="<?php echo DOMAIN?>loc-theo-gia/3">
				Từ 20.000.000đ đến 25.000.000đ
			</a></li>
			<li><a href="<?php echo DOMAIN?>loc-theo-gia/4">
				Từ 25.000.000đ đến 30.000.000đ
			</a></li>
			
			<li><a href="<?php echo DOMAIN?>loc-theo-gia/5">
				Từ 30.000.000đ đến 50.000.000đ
			</a></li>
			
			<li><a href="<?php echo DOMAIN?>loc-theo-gia/6">
				Trên 50.000.000đ
			</a></li>
		</ul>
</div>

<div class="div_right1 div2">
		<p>Tìm kiếm thương hiệu</p>
		<ul>
		
		<?php $hang=$this->requestAction('comment/get_hang');
				foreach($hang as $row) {
				?>
		
			<li>
			<a href="<?php echo DOMAIN?>danh-sach-san-pham/0/<?php echo $row['Hang']['id']?>/<?php echo $this->Help->char($row['Hang']['name']).'.html';?>">
				<?php echo $row['Hang']['name'];?>
			</a>
			</li>
			<?php } ?>
		</ul>
</div>

<?php $value=$this->requestAction('comment/quangcao/2');

foreach($value as $row) {
				?>
<div class="div_quangcao_right">
		
                		 <?php if(substr($row['Advertisement']['images'], -3) == "swf") { ?>
                                <embed src="<?php echo IMAGEAD; ?>logo/<?php echo $row['Advertisement']['images']; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" style="max-width:203px"  scale="ExactFit"> </embed>
                                <?php } else { ?>
                                <a href="<?php echo $row['Advertisement']['link']; ?>" target="_blank"><img src="<?php echo IMAGEAD; ?>logo/<?php echo $row['Advertisement']['images']; ?>" style="max-width:203px"></a>
                                <?php } ?>
</div>
				
				<?php } ?>


</div>
