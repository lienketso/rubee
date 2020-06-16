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
<?php echo $this->Html->css(array('content', 'phantrang')); ?>

<div id="page-title-bar">
				<div class="wrap">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span>KẾT QUẢ TÌM KIẾM CHO TỪ KHÓA " <?php echo $keyword ?>" ( <?php echo $count ?>)</span></h2>
					
                    <h3 id="page-title-sub" style="float: right; padding-right: 50px;"><span>
                    <div class="sidebar-widget widget_search">	
							<div class="search-form">
								<?php echo $this->Form->create(null, array('url' => DOMAIN . 'tim-kiem.html', 'type' => 'post', 'name' => 'frm1')); ?>
									<input type="text" placeholder="Tìm kiếm sản phẩm" value="" id="field2c" name="txtsearch" class="search-input">
									<input type="submit" value="Tìm kiếm" id="searchsubmit" name="submit" class="search-button">
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
                    </h3>
					
                    <div class="cleared"></div>
				</div>
</div>
<div class="wrap" id="sphome" style="padding-top: 20px;">
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
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" rel="nofollow">
											<img alt="<?=$row['Product']["name"]?>" id="imgviewhome" src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
										</a>
                                        <a title="<?=$row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" rel="nofollow">
										<div class="project-cell-bg"></div>
                                        
										<div class="project-cell-hover">
											<div class="project-cell-title">
                                            <?=$row['Product']["name"]?>
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
