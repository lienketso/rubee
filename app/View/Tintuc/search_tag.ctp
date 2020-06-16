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
					<h2 id="page-title"><span>Kết quả tìm thấy cho từ khóa</span></h2>
					<h3 id="page-title-sub"><span> '<?php echo $keyword?>' &nbsp;<?php echo ( $count )?>  </span></h3>
					<div class="cleared"></div>
				</div>
			</div>
<div class="wrap" id="sphome">
<div class="boxmain">
	<div class="wrap-portfolio portfolio-grid">
					<div id="portfolio-filter-container" style="position: relative; overflow: hidden; height: 1104px;" class="isotope">
			 <?php
				foreach ($listProduct as $row) {
            ?>
    	<div class="portfolio_filter_item isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"]; ?>">
											<img alt="project image" id="imgviewhome" src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
										</a>
										<div class="project-cell-bg"></div>
										<div class="project-cell-hover">
											<div class="project-cell-title">
												<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"]; ?>"> <?php echo $row['Product']["name"]; ?></a>
											</div>
										<!--	<div class="project-cell-category">
												<a href="project-category.html" rel="tag">Branding</a> / 
												<a href="project-category.html" rel="tag">Graphic Design</a> / 
												<a href="project-category.html" rel="tag">Web Design</a>
											</div>-->
										</div>
									</div>
								</div>
							</div>
						</div>
			<?php }?>
			

    </div>   </div>
	
	<!--------->
<div class="wrap-portfolio portfolio-grid">
					<div id="portfolio-filter-container" style="position: relative; overflow: hidden; height: 1104px;" class="isotope">
			 <?php
				foreach ($listNews as $row) {
            ?>
    	<div class="portfolio_filter_item isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row['Tintuc']["id"]; ?>/<?php echo $row['Tintuc']["alias"]; ?>">
											<img alt="project image" style="width:320px;height:320px;" src="<?php echo IMAGEAD?>tintuc/<?php echo $row['Tintuc']["images"]; ?>">
										</a>
										<div class="project-cell-bg"></div>
										<div class="project-cell-hover">
											<div class="project-cell-title">
												<a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $row['Tintuc']["id"]; ?>/<?php echo $row['Tintuc']["alias"]; ?>"> <?php echo $row['Tintuc']["name"]; ?></a>
											</div>
										<!--	<div class="project-cell-category">
												<a href="project-category.html" rel="tag">Branding</a> / 
												<a href="project-category.html" rel="tag">Graphic Design</a> / 
												<a href="project-category.html" rel="tag">Web Design</a>
											</div>-->
										</div>
									</div>
								</div>
							</div>
						</div>
			<?php }?>
			

    </div>   </div>
<!------->

<!--------->
<div class="wrap-portfolio portfolio-grid">
					<div id="portfolio-filter-container" style="position: relative; overflow: hidden; height: 1104px;" class="isotope">
			 <?php
				foreach ($listtin as $row) {
            ?>
    	<div class="portfolio_filter_item isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']["id"]; ?>/<?php echo $row['News']["alias"]; ?>">
											<img alt="project image" style="width:320px;height:320px;" src="<?php echo IMAGEAD?>news/<?php echo $row['News']["images"]; ?>">
										</a>
										<div class="project-cell-bg"></div>
										<div class="project-cell-hover">
											<div class="project-cell-title">
												<a href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']["id"]; ?>/<?php echo $row['News']["alias"]; ?>"> <?php echo $row['News']["name"]; ?></a>
											</div>
										<!--	<div class="project-cell-category">
												<a href="project-category.html" rel="tag">Branding</a> / 
												<a href="project-category.html" rel="tag">Graphic Design</a> / 
												<a href="project-category.html" rel="tag">Web Design</a>
											</div>-->
										</div>
									</div>
								</div>
							</div>
						</div>
			<?php }?>
			

    </div>   </div>

<!--------->

</div>
</div>