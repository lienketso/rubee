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
<div class="wrap">
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
                
	<div class="wrap-portfolio portfolio-grid">
					<div id="portfolio-filter-container" style="position: relative; overflow: hidden; height: 1104px;" class="isotope">
						 <?php 
				$i=0;
				$menuca = $this->requestAction('comment/dichvu1');
                foreach ($menuca as $row) {
				$i++;
                    ?>
                    <?php $menu2 = $this->requestAction('comment/dichvu1/' . $row['Cataloguesrec']['id']);

                foreach ($menu2 as $row2) {
                    ?>
                    <?php $menu3 = $this->requestAction('comment/dichvu2/' . $row2['Cataloguesrec']['id']);

                foreach ($menu3 as $row3) {
                    ?>
						<div class="portfolio_filter_item isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row3['Recruitment']['id']?>/<?php echo $row3['Recruitment']['alias'].".html"?>">
											<img alt="project image" style="width:224px;height:240px;" src="<?php echo IMAGEAD ?>recruitment/<?php echo $row3['Recruitment']["images"]; ?>">
										</a>
                                        <a title="#" href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row3['Recruitment']['id']?>/<?php echo $row3['Recruitment']['alias'].".html"?>">
										<div class="project-cell-bg"></div>
                                        
										<div class="project-cell-hover">
											<div class="project-cell-title">
												<a title="#" href="<?php echo DOMAIN?>ct-dich-vu/<?php echo $row3['Recruitment']['id']?>/<?php echo $row3['Recruitment']['alias'].".html"?>"> <?php echo $row3['Recruitment']["name$duoi"]?></a>
											</div>
										<!--	<div class="project-cell-category">
												<a href="project-category.html" rel="tag">Branding</a> / 
												<a href="project-category.html" rel="tag">Graphic Design</a> / 
												<a href="project-category.html" rel="tag">Web Design</a>
											</div>-->
										</div>
                                        </a>
									</div>
								</div>
							</div>
						</div>
						<?php }}} ?>
						
						<div class="cleared"></div>
					</div>
					 <div class="pagination">
	<?php
		echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
		echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
		echo $this->Paginator->numbers()." ";
		echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
		echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
	?>
</div>
				</div>                
                