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
  <div id="page-title-bar" style="background: none;">

  
<img src="<?php echo DOMAIN?>/images/khrubee.jpg" alt="Đến với dịch vụ của chúng tôi quý khách hàng sẽ nhận được sự các sản phẩm chuyên nghiệp - nhanh chóng - hiệu quả. 
" />
  
				
                <div class="wrap" style="padding: 0px; padding-top: 20px; padding-bottom: 20px; text-align: center; " >
                              

					<div class="overlay-bar"></div>
					<h2 id="page-title" style="float: none; background: #1bbc9b; padding-right: 30px; line-height: 35px;"><span style="color: #fff; text-align: center;"><?php echo $typeName['Catalogue']["name$duoi"]?></span></h2>
					
					<div class="cleared"></div>
				</div>
    
			</div>
            	



		<div class="wrap-portfolio portfolio-grid" style="padding-left: 18px;">
					<div id="portfolio-filter-container" style="position: relative; overflow: hidden; height: 1104px;" class="isotope">
						 <?php
				$i=0; 
                foreach ($listNews as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item isotope-item" style="position: absolute; left: 20px; top: 0px; -webkit-transform: translate3d(20px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;width: 225px;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']["id"]; ?>/<?php echo $row['News']["alias"]; ?>">
											<img alt="project image" style="width:225px;" src="<?php echo IMAGEAD?>news/<?php echo $row['News']["images"]; ?>">
										</a>
										<div class="project-cell-bg"></div>
										<div class="project-cell-hover">
											<div class="project-cell-title">
												<a href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']["id"]; ?>/<?php echo $row['News']["alias"]; ?>"> <?php echo $row['News']["name$duoi"]; ?></a>
											</div>
				
										</div>
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