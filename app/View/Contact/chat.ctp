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
<?php
$setting = $this->requestAction('/comment/setting');?>
<div id="page-title-bar">
				<div class="wrap">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span>Hỗ trợ trực tuyến</span></h2>
					<h3 id="page-title-sub"></span></h3>
					<div class="cleared"></div>
				</div>
			</div>
            
<div class="wrap" style="padding-top: 30px;">
    <div class="w-col-5" style="float: left;">
        <p style="text-transform: uppercase; font-weight: bold; font-size: 18px;">Công ty cổ phần rubee Việt nam</p>
        <p style="padding: 0px;"><img src="<?php echo DOMAIN; ?>images/iconhome.png" /> P206 - Tòa nhà B10C - Nguyễn Chánh</p><p style="padding-left: 20px;">Nam Trung Yên - Hà Nội</p>
    </div>
    <div class="w-col-4" style="float: left;">
        <p style="text-transform: uppercase; font-weight: bold; font-size: 18px;">ĐIỆN THOẠI</p>
        <p style="padding: 0px;"><img src="<?php echo DOMAIN; ?>images/icondt.png" /> Tel : 046 2607 555 </p>
        <p style="padding: 0px;"><img src="<?php echo DOMAIN; ?>images/icondd.png" /> Hotline: 0988 022 586 - 090 222 8998</p> 
    </div>
    <div class="w-col-3" style="float: left;">
        <p style="text-transform: uppercase; font-weight: bold; font-size: 18px;">EMAIL</p>
        <p style="padding: 0px;"><img src="<?php echo DOMAIN; ?>images/iconmail.png" /> Contact@rubee.com.vn </p> 
        <p style="padding: 0px;"><img src="<?php echo DOMAIN; ?>images/iconmouse.png" /> www.rubee.com.vn </p>
    </div>
    <div class="cleared"></div>
    <div class="content" >
    <p style="text-transform: uppercase; font-weight: bold; font-size: 18px; padding-top: 30px;">Liên hệ với chúng tôi</p>
    <div class="cleared"></div>
    <p style="color: #555; text-align: justify; padding: 0px;">Sáng tạo, tự do thể hiện cá tính vào từng sản phẩm mà vẫn mang lại nụ cười mãn nguyện cho khách hàng chính là những điều đầu tiên mà chúng tôi nghĩ đến khi thành lập doanh nghiệp. Thương hiệu chính là sản phẩm của một kỷ nguyên mà ngành marketing lên ngôi, kiểm soát sức mua, sức bán của một doanh nghiệp. Một công việc không hề khó nhưng cũng không hề dễ với một doanh nghiệp, bởi bạn có đủ tự tin rằng mình chuyên nghiệp, mình nắm bắt đúng xu thế, và quan trọng hơn- bạn sẽ phải đầu tư từ đâu? Đến với chúng tôi, bằng năng lực của mình chúng tôi sẽ giúp bạn bỏ ra chi phí hợp lý nhất mà vẫn có cho mình tài sản giá trị nhất - </p>
    </div>
</div>
<div class="page-container" style="padding-bottom: 60px;">

<div class="page-container">		
					<div class="page-section white-bg">
						<div class="wrap" >						


			<p style="font-size: 15px;
padding-top: 10px;
font-weight: bold;color:#000;">TƯ VẤN TỪ NHÂN VIÊN CỦA CHÚNG TÔI</p>
            <?php
            $support = $this->requestAction('comment/support');
            foreach ($support as $row) {
                ?>
                <div class="w-col-6" style="float: left; padding-top: 10px;"><?php echo $row['Support']['name']; ?> : <span style="color:#be0330;font-weight:bold;"><?php echo $row['Support']['telephone']; ?></span><span>  <a style="padding-left: 0px;" border="0" class="a-ya" href="ymsgr:sendIM?<?php echo $row['Support']['yahoo']; ?>">
                        <img style="margin-top: 7px;"class="img-ya" width="80" height="20" border="0" src="http://opi.yahoo.com/online?u=<?php echo $row['Support']['yahoo']; ?>&amp;m=g&amp;t=2&amp;l=us"/>
                    </a></span><span>  <a href="skype:<?php echo $row['Support']['skype']; ?>?chat"><img style="width: 55px;
height: 25px;" src="<?php echo DOMAIN ?>images/img_sky.gif"/>
   

            </a></span></div>
				
            
            <?php } ?>
									</div>
					
       	      	
								<div class="cleared"></div>

						</div>
					</div>
				</div>	
     