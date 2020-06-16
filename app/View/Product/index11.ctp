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
					<h2 id="page-title"><span><?php echo $sanpham ?></span></h2>
					<h3 id="page-title-sub"><span></span></h3>
					<div class="cleared"></div>
				</div>
			</div>
<div class="wrap" id="sphome">
					<div class="portfolio-top">
						<!--<div id="portfolio-section-des">This is the description of your portfolio. You can edit it in the admin panel.</div>-->				
						<ul id="filters">
							<li><span class="active" data-filter="*">View All</span></li>
							<li><span data-filter=".tklogo" class=""><?php echo $tklogo ?></span></li>
							<li><span data-filter=".thuonghieu" class="">Đặt tên thương hiệu</span></li>
                            <li><span data-filter=".dattenthuonghieu" class=""><?php echo $thuonghieu ?></span></li>
							<li><span data-filter=".tkbaobiphongbi" class=""><?php echo $tkbaobiphongbi ?></span></li>
							<li><span data-filter=".bienquangcao" class=""><?php echo $bienquangcao ?></span></li>
							<li><span data-filter=".toroitogap" class=""><?php echo $toroitogap ?></span></li>
							<li><span data-filter=".hosonangluc" class=""><?php echo $hosonangluc ?></span></li>
							
							<li><span data-filter=".brochurecatalog" class=""><?php echo $brochurecatalog ?></span></li>
							<li><span data-filter=".lichtet" class=""><?php echo $lichtet ?></span></li>
                            <li><span data-filter=".website" class=""><?php echo $website ?></span></li>
                            <li><span data-filter=".noithat" class=""><?php echo $noithat ?></span></li>
                            <li><span data-filter=".posterbanner" class=""><?php echo $posterbanner ?></span></li>
											</ul>
					</div>
				</div>
<div class="wrap" id="sphome">
<div class="wrap-portfolio portfolio-grid">
					<div id="portfolio-filter-container" style="position: relative; overflow: hidden; height: 1104px;" class="isotope">
                         
                         
                         <?php
				$i=0; 
                foreach ($listProduct1 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item tklogo isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
     
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct2 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item thuonghieu isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
                        
						<!--end-->
      
						 <?php
				$i=0; 
                foreach ($listProduct3 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item tkbaobiphongbi isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>" rel="nofollow">
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
						<!--end-->
                        
                        <?php
				$i=0; 
                foreach ($listProduct12 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item dattenthuonghieu isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						 <?php
				$i=0; 
                foreach ($listProduct4 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item bienquangcao isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>" rel="nofollow">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>" rel="nofollow">
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
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct5 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item toroitogap isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct6 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item hosonangluc isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct7 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item brochurecatalog isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct8 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item lichtet isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct9 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item website isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct10 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item noithat isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct11 as $row) {
				$i++;
                    ?>
						<div class="portfolio_filter_item posterbanner isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
							<div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome"  src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
										</a>
                                        <a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].".html"; ?>">
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
						<!--end-->
                        

					
                    </div>
                    
			</div>	