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
	<div class="wrap" id="sphome">
		<div class="overlay-bar"></div>
		<h2 id="page-title"><span><?php echo $typeName['Catalogue']["name$duoi"]?></span></h2>
		<!--<h3 id="page-title-sub"><span> / <?php echo $typeName['Catalogue']["name$duoi"]?></span></h3>-->
		<div class="cleared"></div>
	</div>
</div>
            
<div class="wrap" id="sphome">
	<div class="big-column left" style="padding-top: 50px; padding-bottom: 0px;">
        <img src="<?php echo DOMAIN?>images/imgtuyendung.JPG" style="max-height: 515px;" />
    </div>
    <div class="small-column right" style="padding-top: 50px;padding-bottom: 0px;">
		<div id="portfolio-section-des"><?php echo $typeName['Catalogue']["shortdes$duoi"]?></div>			
	</div>
    <div class="cleared"></div>
</div>

<div class="warn" id="sphome">
    <div class="wrap-portfolio portfolio-grid">
		<div class="warn" id="sphome">
	        <div class="portfolio-top">
	            <div id="portfolio-section-des" style="text-transform: uppercase;font-weight: bold;">Các vị trí tuyển dụng</div>
	        </div>
        </div>
		<div class="warn" id="sphome" >
			<?php
				$i=0; 
                foreach ($listNews as $row) {
				$i++;
            ?>
			<div id="tuyendung" class="portfolio_filter_item interaction-design mobile-design  isotope-item">
				<div class="project-cell">
					<div class="project-cell-thumb">
						<a href="<?php echo DOMAIN?>chi-tiet-tuyen-dung/<?php echo $row['News']["id"]; ?>/<?php echo $row['News']["alias"]; ?>.html">
							<img alt="project image" id="imgviewtuyendung" src="<?php echo IMAGEAD?>news/<?php echo $row['News']["images"]; ?>">
						</a>
					</div>
				</div>
                <a href="<?php echo DOMAIN?>chi-tiet-tuyen-dung/<?php echo $row['News']["id"]; ?>/<?php echo $row['News']["alias"]; ?>.html"><h2 style="font-size: 14px; color: #555; padding: 0px;"><?php echo $row['News']["name$duoi"]; ?></h2></a>
                <div class="post-entry-content" style="padding: 0px;">
					<?php echo $row['News']["shortdes$duoi"]; ?>
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
</div>