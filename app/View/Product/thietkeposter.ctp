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
 
 <div id="page-title-bar">
				<div class="wrap">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span><?php echo $sanpham ?>/</span></h2>
					<h1 id="page-title-sub"><?php echo $typeName['Catproduct']["name$duoi"]?></h1>
					<div class="cleared"></div>
				</div>
			</div>
<div class="wrap" id="sphome">
					<div class="portfolio-top">
						<div id="portfolio-section-des"><?php echo $typeName['Catproduct']["shortdes$duoi"]?>
                        <p style="float: right; padding-right: 10px;"><strong>Số lần xem : <?php echo strrev(wordwrap(strrev($typeName['Catproduct']["shortdes_eg"]),3,',',true)); ?></strong></p>
                        </div>			
					</div>
				</div>
<div class="wrap" id="sphome">
		<div class="wrap-portfolio portfolio-grid">

						 <?php
				$i=0; 
				foreach ($listProduct as $row) {
				$i++;
					?>
						
							<div class="column3_1 customer-size ">
                            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome" src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
										</a>
                                        <a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
										<div class="project-cell-bg"></div>
                                        
										<div class="project-cell-hover">
											<div class="project-cell-title">
                                            <?php echo $row['Product']["name"]?>
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