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
padding-left: 57%;"><a href="<?php echo DOMAIN?>de-nghi-gui-bao-gia">
<img style="float:left;" src="<?php echo DOMAIN?>images/icon_denghi.png"><span style="float: left;
color: #404040;
font-size: 13px;
padding-right: 20px;
padding-top: 10px;
font-weight: bold;text-transform: uppercase;"><?php echo $denghibaogia ?></span></a>
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
						<div class="wrap">
																	
							<div class="page-section-heading">
								<div class="page-section-title"><span><?php echo $tuvansangtao ?></span></div>
								<div class="page-section-subtitle"><?php echo $khampha ?></div>
							</div>
									<?php 
				$i=0;
				$menuca = $this->requestAction('comment/dmdichvu1');
				foreach ($menuca as $row) {
				$i++;
					?>									
					
							<div style="width: 305px;" class="column3_1 <?php if($i==1){
							echo"";
							}
							elseif($i==2){
							echo"";
							}
							elseif($i==3){
							echo"column-last";
							$i=0;
							}
							?>">
<div class="feature-circle">
									<div class="feature-icon" style="width: 75px; height: 75px;">
										<div class="feature-icon-circle" style="width: 75px; height: 75px;">
											<div class="feature-icon-table" style="width: 75px; height: 75px;">
												<div class="feature-icon-inside">
												<a href="<?php echo DOMAIN?>dich-vu/<?php echo $row['Cataloguesrec']["id"] ?>/<?php echo $row['Cataloguesrec']["alias"].'.html' ?>">	<img src="<?php echo DOMAINAD?><?php echo $row['Cataloguesrec']['images']?>" width="45px" alt="page-builder" /></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-circle-name" style="height: 50px; margin-top: -65px;border-bottom: solid; border-style: dotted; text-align: left; border-bottom-width: thin; ">
									<h1 style="font-family: Arial !important; font-size: 20px; font-style: normal; font-weight: 700; line-height: 30px;margin-left: 80px; width: 400px;"><?php echo $row['Cataloguesrec']["name$duoi"]?></h1>
									</div>
                                 
									<div class="feature-circle-content" style="text-align: left; margin-top: 20px; margin-left: 50px;">
									   <?php $menu2 = $this->requestAction('comment/dmdichvu2/' . $row['Cataloguesrec']['id']);
                                        
				foreach ($menu2 as $row1) {
					?>
									<li >	<h2 id="none">	<a style="font-size: 16px;" href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row1['Recruitment']['id']?>/<?php echo $row1['Recruitment']['alias'].'.html'?>"><?php echo $row1['Recruitment']["name$duoi"]?></a></h2></li>
<?php } ?>
									</div>
								<!--	<div class="feature-circle-button">
										<a href="#">Learn More</a>
									</div>-->
								</div>
							</div>	
							<?php } ?>
						
							
							<div class="cleared"></div>																			
						</div>
					</div>
				</div>
				<div class="page-container">
					<div class="page-section primary-bg white-text" >
						<div class="wrap">
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
							<div class="column3_1 customer-size <?php if($i==1){
							echo"";
							}
							elseif($i==2){
							echo"";
							}
							elseif($i==3){
							echo"";
							}
							elseif($i==4){
							echo"column-last";
							}
							elseif($i==5){
							echo"";
							}
							elseif($i==6){
							echo"";
							}
							elseif($i==7){
							echo"";
							}
							elseif($i==8){
							echo"column-last";
							}
							elseif($i==9){
							echo"";
							}
							elseif($i==10){
							echo"";
							}
							elseif($i==11){
							echo"";
							}
							elseif($i==12){
							echo"column-last";
							$i=0;
							}
							?>">
								
                                <div class="project-cell">
									<div class="project-cell-thumb">
                                    
										<div class="project-cell-thumb-window">
												<a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row['Tintuc']['id']?>/<?php echo $row['Tintuc']['alias']?>">
												<img id="imgview" alt="project image" src="<?php echo IMAGEAD?>tintuc/<?php echo $row['Tintuc']['images']?>">
											</a>
                                            <a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row['Tintuc']['id']?>/<?php echo $row['Tintuc']['alias']?>">
											<div class="project-cell-bg"></div>
                                            
											<div class="project-cell-hover">
												<div class="project-cell-title">
													<a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row['Tintuc']['id']?>/<?php echo $row['Tintuc']['alias']?>"><?php echo $row['Tintuc']["name$duoi"]?></a>
												</div>
												<!--<div class="project-cell-category">
										   <?php $menu2 = $this->requestAction('comment/duantieubieu/' . $row['Tintuc']['id']);

				foreach ($menu2 as $row2) {
					?>
				<a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row2['Tintuc']['id']?>/<?php echo $row2['Tintuc']['alias']?>" rel="tag"><?php echo $row2['Tintuc']["name$duoi"]?></a> /

				<?php } ?>
												</div>-->
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
						<div class="wrap">
																
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
											<?php $a = strip_tags($row['News']["shortdes$duoi"]); echo $this->Text->truncate($a,150,array('ending'=>'...')); ?>
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
