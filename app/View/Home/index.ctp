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
<div class="page-container">
<p id="download" style="
text-align: right;
height: 40px;
margin-top: 10px;
padding-left: 59%;"><a>
<span style="float: left;
color: #404040;
font-size: 13px;
padding-top: 10px;
font-weight: bold;text-transform: uppercase;"><script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'vi'}
</script>

<!-- Place this tag where you want the +1 button to render -->
<g:plusone></g:plusone>

<!-- End Backlink Code --></span></a>
<?php
$settings = $this->requestAction('comment/setting');
?>


<img style="float:left;" src="<?php echo DOMAIN?>images/taihoso.png">
<span id="taihosonl" style="float: left;
color: #404040;
font-size: 13px;
padding-right: 20px;
padding-top: 10px;
font-weight: bold;"><?php echo $settings['Setting']["download"]; ?></span>
</p>
					<div class="page-section white-bg" >
						<div id="tuvansangtao"><a href="https://rubee.com.vn/dich-vu" title="dịch vụ rubee việt nam"><img src="<?php echo DOMAIN?>images/dichvu.jpg" alt="dịch vụ rubee"/></a></div>
                        <div class="wrap" id="tuvan">
																	
							<div class="page-section-heading">
                            <p style="margin: auto;
text-align: right;
height: 40px;
margin-top: 10px;
padding-left: 57%;"><a href="https://rubee.com.vn/lien-he.html">
<img src="https://rubee.com.vn/images/icon_denghi.png" style="float:left;"><span style="float: left;
color: #404040;
font-size: 13px;
padding-right: 20px;
padding-top: 10px;
font-weight: bold;text-transform: uppercase;">Đề nghị báo giá</span></a>


<img src="https://rubee.com.vn/images/taihoso.png" style="float:left;">
<span style="float: left;
color: #404040;
font-size: 13px;
padding-right: 20px;
padding-top: 10px;
font-weight: bold;" id="taihosonl"><a target="_blank" href="https://rubee.com.vn/profile/">Xem hồ sơ năng lực</a></span>
</p>
<br />
								<div class="page-section-title"><span><?php echo $tuvansangtao ?></span></div>
								<div class="page-section-subtitle"><?php echo $khampha ?></div>
							</div>
									<?php 
				$i=0;
				$menuca = $this->requestAction('comment/dmdichvu1');
				foreach ($menuca as $row) {
				$i++;
					?>									
					
							<div class="column3_11 <?php if($i==1){
							echo"";
							}
							elseif($i==2){
							echo"";
							}
							elseif($i==3){
							echo"";
							$i=0;
							}
							?>">
<div class="feature-circle">
									<div class="feature-icon" style="width: 75px; height: 75px;">
										<div class="feature-icon-circle" style="width: 75px; height: 75px;">
											<div class="feature-icon-table" style="width: 75px; height: 75px;">
												<div class="feature-icon-inside">
												<a href="<?php echo DOMAIN?>dich-vu/<?php echo $row['Cataloguesrec']["id"] ?>/<?php echo $row['Cataloguesrec']["alias"].'.html' ?>">	<img src="<?php echo DOMAINAD?><?php echo $row['Cataloguesrec']['images']?>" width="45px" alt="<?php echo $row['Cataloguesrec']["name"]?>" /></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-circle-name" style="height: 50px; margin-top: -65px;border-bottom: solid; border-style: dotted; text-align: left; border-bottom-width: thin; ">
									<?php if($i==1){
							echo"<h1";
							}
                            else{
							echo"<p";
							}
                            
                            ?> style="font-family: Source Sans Pro !important; font-size: 20px; font-style: normal; font-weight: 700; line-height: 30px;margin-left: 80px;"><?php echo $row['Cataloguesrec']["name$duoi"]?><?php if($i==1){
							echo"</h1>";
							}
                            else{
							echo"</p>";
							}
                            
                            ?> 
									</div>
                                 
									<div class="feature-circle-content" style="text-align: left; margin-top: 20px; margin-left: 50px;">
									   <?php $menu2 = $this->requestAction('comment/dmdichvu2/' . $row['Cataloguesrec']['id']);
                                        
				foreach ($menu2 as $row1) {
					?>
									<li style="line-height: 27px;" >	<a style="font-size: 16px;" href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row1['Recruitment']['id']?>/<?php echo $row1['Recruitment']['alias'].'.html'?>"><?php echo $row1['Recruitment']["name$duoi"]?></a></li>
<?php } ?>
									</div>
					
								</div>
							</div>	
							<?php } ?>
						
							
							<div class="cleared"></div>																			
						</div>
					</div>
				</div>
				<div class="page-container">
					<div class="page-section primary-bg white-text" >
						<div class="wrap" id="sphome">
							<div class="overlay-bar"></div>										
							<div class="page-section-heading">
								<div class="page-section-title"><span><?php echo $duantieubieu ?></span></div>
								<div class="page-section-subtitle"><?php echo $thamkhao ?></div>
							</div>
				<?php 
				$i=0;
				$menuca = $this->requestAction('comment/duantieubieu');
				foreach ($menuca as $row) {
				$i++;
					?>									
							<div class="column3_1 customer-size <?php if($i==4 || ($i == 8 || $i == 12) || ($i ==16)){
							echo"column-last";
							}
							?>">
								
                                <div class="project-cell">
									<div class="project-cell-thumb">
                                    
										<div class="project-cell-thumb-window">
												<a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row['Tintuc']['id']?>/<?php echo $row['Tintuc']['alias']?>">
												<img id="imgviewhome" alt="Dự án <?php echo $row['Tintuc']["name$duoi"]?>" src="<?php echo IMAGEAD?>tintuc/<?php echo $row['Tintuc']['images']?>">
											</a>
                                            <a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row['Tintuc']['id']?>/<?php echo $row['Tintuc']['alias']?>">
											<div class="project-cell-bg"></div>
                                            
											<div class="project-cell-hover">
												<div class="project-cell-title">
													<?php echo $row['Tintuc']["name$duoi"]?>
												</div>
											
											</div>
                                            </a>
										</div>
                                        
									</div>
								</div>
                                
							</div>
							<?php } ?>
							
					
							<div class="cleared"></div>																				
						</div>	
					</div>		
				</div>
				<div class="page-container">
					<div class="page-section white-bg" >
						<div class="wrap" id="sphome">
																
							<div class="page-section-heading">
								<div class="page-section-title"><span><?php echo $tintucblog ?></span></div>
								<div class="page-section-subtitle"><?php echo $kienthuc ?></div>
							</div>
							<?php 
				$i=0;
				$menuca = $this->requestAction('comment/tinblog');
				foreach ($menuca as $row) {
				$i++;
					?>										
							<div class="column2_1 <?php if($i==1){
							echo"";
							}
							elseif($i==2){
							echo"column-last";
							$i=0;
							}
							?>">
								<div class="post-cell">
									<div class="post-cell-left">
										<div class="post-cell-thumb">
											<a href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']['id']?>/<?php echo $row['News']['alias'].".html"?>">
											<img style="width:72px;height:72px;border-radius:5px;" src="<?php echo IMAGEAD?>news/<?php echo $row['News']['images']?>" alt="happy college" /></a>
										</div>	
									</div>
									<div class="post-cell-right">
										<div class="post-cell-title">
											<a href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']['id']?>/<?php echo $row['News']['alias'].".html"?>"> <?php echo $row['News']["name$duoi"]?></a>
										</div>
										<div class="post-cell-content">
											<p style="text-align: justify;">
											<?php $a = strip_tags($row['News']["meta_des"]); echo $this->Text->truncate($a,150,array('ending'=>'...')); ?>
											</p>
											<p style="text-align: right;"><a href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']['id']?>/<?php echo $row['News']['alias'].".html"?>"><?php echo $doctiep;?></a></p>
										</div>
									</div>
								</div>
							</div>
				<?php } ?>			
							
							<div class="cleared"></div>		
						
																									
						</div>	
					</div>		
				</div>
                
                <div class="key_word" style="display: none;">
                    <h2>Thiết kế logo</h2>
                    <h2>Nhận diện thương hiệu</h2>
                    <h2>Thiết kế bao bì</h2>
                    <h2>Thiết kế tờ rơi</h2>
                    <h2>Thiết kế tờ gấp</h2>
                    <h2>Thiết kế Hồ sơ năng lực</h2>
                    <h2>Thiết kế Brochure</h2>
                    <h2>Thiết kế Sale kit</h2>
                    <h2>Thiết kế Catalogue</h2>
                    <h2>Sáng tác slogan</h2>
                    <h2>Đặt tên thương hiệu</h2>
                    <h2>Thiết kế báo cáo thường niên</h2>
                    <h2>Thiết kế nội thất</h2>
                    <h2>Thiết kế poster</h2>
                    <h2>Thiết kế banner</h2>
                    <h2>Thiết kế lịch tết, thiệp</h2>
                    <h2>Thiết kế website</h2>
                    <h2>Thiết kế biển quảng cáo</h2>
                </div>
            	<!--
                <div class="popup_event">
                	<div class="box_popup">
                		<img src="https://rubee.com.vn/popup/thongbao-0209.png" alt="Thông báo nghỉ lễ mùng 2-9">
                		 <a class="btn_close_popup">
        			<img src="https://rubee.com.vn/popup/btn_button.png" alt="Đóng">
        		</a>
                	</div>
                </div>
				-->
               
<style type="text/css">
	.box_popup{
	    padding-top: 70px;
	    margin-top: 0px;
	    height: 100%;
	}
	.btn_close_popup{
		cursor: pointer;
		top: 70px;
		right: 50px;
	}
	.popup_event{
		background-color: initial;
	}
</style>
<script type='application/ld+json'>
{
"@context": "http://schema.org",
"@type": "Person",
"name": "Rubee Việt Nam",
"url": "https://rubee.com.vn/",
"sameAs": [
"https://rubee.com.vn/","https://www.facebook.com/rubeebrand/"]
}
</script>