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
					<h2 id="page-title"><span>Dịch vụ</span></h2>
					<h3 id="page-title-sub"><span><?php if($typeName['Cataloguesrec']["name"]){ ?>
					/ <?php echo $typeName['Cataloguesrec']["name"]; ?>
					<?php } ?></span></h3>
					<div class="cleared"></div>
				</div>
			</div>	
<div class="wrap" id="sphome">
					<div class="portfolio-top">
						<div id="portfolio-section-des">KHÁM PHÁ NHỮNG KHẢ NĂNG CỦA CHÚNG TÔI CÓ THỂ GIÚP BẠN</div>				
					<!--	<ul id="filters">
							<li><span class="active" data-filter="*">View All</span></li>
						
<li><span data-filter=".branding" class="">Branding</span></li>
							<li><span data-filter=".graphic-design" class="">Graphic Design</span></li>
							<li><span data-filter=".interaction-design" class="">Interaction Design</span></li>
							<li><span data-filter=".mobile-design" class="">Mobile Design</span></li>
							<li><span data-filter=".web-design" class="">Web Design</span></li>
						</ul>-->
					</div>
				</div>
<div class="wrap" id="sphome">
<div class="wrap-portfolio portfolio-grid" >
					
						
						<?php 
				$i=0;
				$menuca = $this->requestAction('comment/dichvu1');
                foreach ($menuca as $row) {
				$i++;
                    ?>	
						<div id="dv" class="portfolio_filter_item interaction-design mobile-design  isotope-item" >
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a>
											<img alt="project image" src="<?php echo DOMAINAD?><?php echo $row['Cataloguesrec']["images2"]; ?>">
										</a>
						
									</div>
								</div>
								
							</div>
							<ul style="padding-left: 10px;">  <?php $menu2 = $this->requestAction('comment/dichvu1/' . $row['Cataloguesrec']['id']);

                foreach ($menu2 as $row2) {
                    ?>
			<li>	<!--<a href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row2['Cataloguesrec']['id']?>/<?php echo $row2['Cataloguesrec']['alias']?>" rel="tag">--><?php echo $row2['Cataloguesrec']["name$duoi"]?><!--</a>-->
			<ul>
			<?php $menu3 = $this->requestAction('comment/dichvu2/' . $row2['Cataloguesrec']['id']);

                foreach ($menu3 as $row3) {
                    ?>
					
					<li style="background: url(<?php echo DOMAIN?>images/icon_09.png)left top 22px no-repeat;padding-left: 15px; list-style: none none;">	<a href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row3['Recruitment']['id']?>/<?php echo $row3['Recruitment']['alias'].".html"?>" rel="tag"><?php echo $row3['Recruitment']["name$duoi"]?></a></li>
					<?php } ?>
					</ul>
			</li>

				<?php } ?>
								
							</ul>
						</div>
				<?php } ?>	
						<div class="cleared"></div>
					
				</div>
                </div>