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
					<h1 id="page-title"><span><?php echo $detailNews['Product']["name$duoi"] ?></span></h1>
					<div class="cleared"></div>
				</div>
			</div>
<div class="wrap" id="sphome">
				<div class="content">
					<div class="big-column left">	

						
						<div class="project-single-content">
							<?php echo $detailNews['Product']["content$duoi"] ?>
							</div>
						<!-- End Project Details-->
							
						
						<div class="project-relatives">
							<div class="project-relative-title">
								<?php echo $sanphamkhac ?>								
							</div>
							 <?php
				$i=0;
                foreach ($listProduct as $row) {
				$i++;
                    ?>	
							<div class="project_relative_column">
                            
								<div class="project-cell">
									<div class="project-cell-thumb">
										<div class="project-cell-thumb-window">
											<a href="single-project.html">
												<img id="imgview" alt="project image" src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>">
											</a>
                                            <a title="<?=$row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']['id']?>/<?php echo $row['Product']['alias'].'.html'?>">
											<div class="project-cell-bg"></div>
                                  
											<div class="project-cell-hover">
												<div class="project-cell-title">
													<a title="<?=$row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']['id']?>/<?php echo $row['Product']['alias'].'.html'?>"><?php echo $row['Product']["name$duoi"]?></a>
												</div>
												<!--<div class="project-cell-category">
													<a href="project-category.html" rel="tag">Graphic Design</a> / 
													<a href="project-category.html" rel="tag">Mobile Design</a> / 
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
						</div>
					<!-- End Big Column -->
				
					<div class="project-small-column right">
						<div class="sidebar-widget">
							<div class="sidebar-widget-title">
								<span><?php echo $gioithieusanpham?></span>
							</div>
							<div class="sidebar-widget-content">
								<?php echo $detailNews['Product']["shortdes$duoi"] ?>
							</div>
						</div>
						<!--<div class="sidebar-widget project-category-widget">
							<div class="sidebar-widget-title">
								<span>Category</span>
							</div>
							<div class="sidebar-widget-content">
								<a href="project-category.html" rel="tag">Interaction Design</a> 
								<a href="project-category.html" rel="tag">Mobile Design</a>							
							</div>
						</div>-->
					</div><!-- End Small Column -->
					<div class="cleared"></div>
				</div>
				
			</div>