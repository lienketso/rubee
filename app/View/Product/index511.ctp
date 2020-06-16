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
<div class="wrap">
					<div class="portfolio-top">
						<div id="portfolio-section-des"><?php echo $typeName['Catproduct']["shortdes$duoi"]?></div>				
						<!--<ul id="filters">
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
				foreach ($listProduct as $row) {
				$i++;
					?>
						<div class="portfolio_filter_item isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
											<img alt="project image" style="width:224px;height:240px;" src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
										</a>
                                        <a title="<?=$row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
										<div class="project-cell-bg"></div>
                                        
										<div class="project-cell-hover">
											<div class="project-cell-title">
												<a title="<?=$row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"> <?php echo $row['Product']["name$duoi"]; ?></a>
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
						<?php } ?>
						
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