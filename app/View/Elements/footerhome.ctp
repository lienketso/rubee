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
<div id="footer">
						<div class="wrap" id="sphome">
																	
							<div class="page-section-heading">
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
							echo"column-last";
							$i=0;
							}
							?>">
<div class="feature-circle">
									<div class="feature-icon" style="width: 75px; height: 75px;">
										<div class="feature-icon-circle" style="width: 75px; height: 75px;">
											<div class="feature-icon-table" style="width: 75px; height: 75px;">
												<div class="feature-icon-inside">
												<a href="<?php echo DOMAIN?>dich-vu/<?php echo $row['Cataloguesrec']["id"] ?>/<?php echo $row['Cataloguesrec']["alias"].'.html' ?>">	<img data-src="<?php echo DOMAINAD?><?php echo $row['Cataloguesrec']['images']?>" class="lazy" src="<?php echo DOMAIN?>logo.jpg" width="45px" alt="<?php echo $row['Cataloguesrec']["name"]?>" /></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-circle-name" style="height: 50px; margin-top: -65px;border-bottom: solid; border-style: dotted; text-align: left; color: #fff; border-bottom-width: thin; margin-right: 18px; ">
									<h3 style="font-family: Source Sans Pro !important; font-size: 18px; width: 230px; font-style: normal; font-weight: 700; line-height: 30px;margin-left: 80px; color: #FFF; text-transform: uppercase;"><?php echo $row['Cataloguesrec']["name$duoi"]?></h3>
									</div>
                                 
									<div class="feature-circle-content1" style="text-align: left; margin-top: 20px; margin-left: 20px;">
									   <?php $menu2 = $this->requestAction('comment/dmdichvu2/' . $row['Cataloguesrec']['id']);
                                        
				foreach ($menu2 as $row1) {
				if (strlen(strstr($row1['Recruitment']['alias'],"https://rubee.com.vn/")) > 0){
				?>
					<li ><a style="font-size: 14px; line-height: 30px; font-family: Arial;" href="<?php echo $row1['Recruitment']['alias']?>"><?php echo $row1['Recruitment']["name$duoi"]?></a> </li>
				<?php 
				}else{
				?>
					<li ><a style="font-size: 14px; line-height: 30px; font-family: Arial;" href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row1['Recruitment']['id']?>/<?php echo $row1['Recruitment']['alias'].'.html'?>"><?php echo $row1['Recruitment']["name$duoi"]?></a> </li>
				<?php
				}
				
					?>

									
				
<?php } ?>
									</div>

								</div>
							</div>	
							<?php } ?>
						
							
							<div class="cleared"></div>																			
						</div>

				</div> 
		
			