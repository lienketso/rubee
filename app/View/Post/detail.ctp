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
<?php echo $this->Html->css(array('content', 'phantrang')); ?>
<div id="page-title-bar">
				<div class="wrap" id="sphome">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span>GIỚI THIỆU/</span></h2>
					<h1 id="page-title-sub"><?php echo $detailNews['Post']['name']; ?></h1>
					<div class="cleared"></div>
				</div>
			</div>
<div class="page-container">
					<div class="page-section white-bg">
						<div class="wrap" id="sphome">
                        	<div class="portfolio-top">
						<!--<div id="portfolio-section-des">This is the description of your portfolio. You can edit it in the admin panel.</div>-->				
						<a href="<?php echo DOMAIN?>chi-tiet-gioi-thieu/11/nang-luc-hoat-dong.html"><span class="gt">Năng lực hoạt động</span></a>
    <a href="<?php echo DOMAIN?>chi-tiet-gioi-thieu/12/y-nghia-hinh-anh-bieu-tuong.html"><span class="gt">Ý nghĩa hình ảnh biểu tượng</span></a>
    <a href="<?php echo DOMAIN?>chi-tiet-gioi-thieu/13/linh-vuc-hoat-dong.html"><span class="gt">Lĩnh vực hoạt động</span></a>
    <a href="<?php echo DOMAIN?>chi-tiet-gioi-thieu/14/quy-trinh-sang-tao-1-thuong-hieu.html"><span class="gt">Quy trình sáng tạo</span></a>
    <a href="https://rubee.com.vn/profile/"><span class="gt">Xem hồ sơ năng lực</span></a>
					</div>
                    <br />								
							<div class="content">
								      <?php echo $detailNews['Post']['content']; ?>
								<div class="cleared"></div>
							</div>
                            
						</div>
					</div>
                    <div id="footer1">
				<div class="wrap" id="sphome">	
					<div class="content">
					
							<div class="footer-widget" style="padding-bottom: 30px; padding-top: 30px;">
								<div class="sidebar-widget-title"><a><span>ƯỚC MƠ CỦA CHÚNG TÔI</span></a>
                                <p style="text-transform: uppercase; font-size: 14px; color: #fff;">Là sáng tạo nên đam mê của chính mình</p> 
                                </div>
                                			
								<div class="textwidget" style="width: 100%; text-align: justify;">

				 								
			<span style="font-size:14px; color: #FFF;">Tại Rubee chúng tôi làm công việc để tạo dựng hình, mang đến bản sắc riêng cho từng doanh nghiệp, kiến tạo chiến lược phát triển phù hợp để cùng doanh nghiệp bắt đầu ở mọi giai đoạn. Chúng tôi tự hào sáng tạo của mình làm nên sự khác biệt cho Thương hiệu. Tại Rubee, chúng tôi chia nhóm, đơn giản hóa mọi giải pháp dịch vụ, giúp khách hàng chọn lựa dễ dàng.<br/>
 
Bằng kinh nghiệm tích lũy nhiều năm, chúng tôi lắng nghe và tư vấn cho khách hàng, từ đó cùng khách hàng truyền tải sự sáng tạo đột phá, giúp khách hàng khởi sắc hình ảnh doanh nghiệp
</span>		
											
							</div>
							</div> 
							
		
							<div class="imggt">				
								<img src="<?php echo DOMAIN?>images/gioithieu/gioithieu.JPG"  title="giới thiệu rubee"/>
							</div> 						
							<div class="cleared"></div>
								
						</div><!-- End Footer Widget Container-->
					
					</div>
				</div>
                
				</div>	
                <div id="footer2" style="padding-bottom: 30px; padding-top: 15px;">
				<div class="wrap" id="sphome">
          <div class="team">
            <h1 class="team" style="color: #404040;font-size: 25px;font-weight: 700;line-height: 45px; margin: 10px 0; text-align: center;">NHÓM LÀM VIỆC CỦA CHÚNG TÔI</h1>
            <div class="sepreater team-sep"></div>
          </div>
          <div class="team-text">
            <p class="team-text-para">KHÁCH HÀNG SẼ LÀM VIỆC VỚI ĐỘI NGŨ CHUYÊN NGHIỆP</p>
          </div>
          <div class="w-row team-member">
            <div class="w-col w-col-4">
              <div class="team-section">
                <div class="team-image">
                  <img alt="52dd1e57e64ce6cb200004f3_image1.png" src="<?php echo DOMAIN?>images/gioithieu/subport1.png" class="team-img">
                </div>
                <div class="team-des">
                  <h4 class="team-name" style="font-size: 18px;">ACCOUNT MANAGER</h4>
                </div>
                <div class="team-social" style="text-align: center;">
                  <div class="w-clearfix social-section">
                   <a href="<?php echo DOMAIN?>lien-he.html" target="_blank"><img alt="icon dt" src="<?php echo DOMAIN?>images/gioithieu/icon1.png" class="social1"></a>
                    <a href="<?php echo DOMAIN?>lien-he.html" target="_blank"><img alt="icon dd" src="<?php echo DOMAIN?>images/gioithieu/icon2.png" class="social1"></a>
                    <a href="skype:mai_alight?chat"><img alt="icon sky" src="<?php echo DOMAIN?>images/gioithieu/icon3.png" class="social1"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-col w-col-4">
              <div class="team-section" >
                <div class="team-image">
                  <img alt="52dd1edfe64ce6cb200004fb_image2.png" src="<?php echo DOMAIN?>images/gioithieu/subport2.png" class="team-img">
                </div>
                <div class="team-des">
                  <h4 class="team-name" style="font-size: 18px;">GRAPHIC LEADER</h4>
                </div>
                <div class="team-social" style="text-align: center;">
                  <div class="w-clearfix social-section">
                    <a href="<?php echo DOMAIN?>lien-he.html" target="_blank"><img alt="icon dt" src="<?php echo DOMAIN?>images/gioithieu/icon1.png" class="social1"></a>
                    <a href="<?php echo DOMAIN?>lien-he.html" target="_blank"><img alt="icon dd" src="<?php echo DOMAIN?>images/gioithieu/icon2.png" class="social1"></a>
                    <a href="skype:phamquochuyvcu?chat"><img alt="icon sky" src="<?php echo DOMAIN?>images/gioithieu/icon3.png" class="social1"></a> 
                  </div>
                </div>
              </div>
            </div>
            <div class="w-col w-col-4">
              <div class="team-section" >
                <div class="team-image">
                  <img alt="52dd1efcad165eca20000539_image3.png" src="<?php echo DOMAIN?>/images/gioithieu/subport3.png" class="team-img">
                </div>
                <div class="team-des">
                  <h4 class="team-name" style="font-size: 18px; text-transform: uppercase;">Brand consultantS</h4>
                </div>
                <div class="team-social" style="text-align: center;">
                  <div class="w-clearfix social-section">
                    <a href="<?php echo DOMAIN?>lien-he.html" target="_blank"><img alt="icon dt" src="<?php echo DOMAIN?>images/gioithieu/icon1.png" class="social1"></a>
                    <a href="<?php echo DOMAIN?>lien-he.html" target="_blank"><img alt="icon dd" src="<?php echo DOMAIN?>images/gioithieu/icon2.png" class="social1"></a>
                    <a href="skype:bichngoc.pr?chat"><img alt="icon sky" src="<?php echo DOMAIN?>images/gioithieu/icon3.png" class="social1"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
				</div>		