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
  <link rel="stylesheet" type="text/css" href="/font/Font-Awesome-master/css/font-awesome.min.css">
 <div id="page-title-bar">
				<div class="wrap">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span><?php echo $sanpham ?></span>
                    
                    </h2>
					
                    
                    
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
<div class="wrap" id="sphome">
					<div class="portfolio-top">
						<!--<div id="portfolio-section-des">This is the description of your portfolio. You can edit it in the admin panel.</div>-->				
						<ul id="filters">
							<li><span class="tabmenu active" data-filter=".all">View All</span></li>
							<li><span class="tabmenu" data-filter=".tklogo" class=""><?php echo $tklogo ?></span></li>
							<li><span class="tabmenu" data-filter=".thuonghieu" class="">Đặt tên thương hiệu</span></li>
                            <li><span class="tabmenu" data-filter=".dattenthuonghieu" class=""><?php echo $thuonghieu ?></span></li>
							<li><span class="tabmenu" data-filter=".tkbaobiphongbi" class=""><?php echo $tkbaobiphongbi ?></span></li>
							<li><span class="tabmenu" data-filter=".bienquangcao" class=""><?php echo $bienquangcao ?></span></li>
							<li><span class="tabmenu" data-filter=".toroitogap" class=""><?php echo $toroitogap ?></span></li>
							<li><span class="tabmenu" data-filter=".hosonangluc" class=""><?php echo $hosonangluc ?></span></li>
							
							<li><span class="tabmenu" data-filter=".brochurecatalog" class=""><?php echo $brochurecatalog ?></span></li>
							<li><span class="tabmenu" data-filter=".lichtet" class=""><?php echo $lichtet ?></span></li>
                            <li><span class="tabmenu" data-filter=".website" class=""><?php echo $website ?></span></li>
                            <li><span class="tabmenu" data-filter=".noithat" class=""><?php echo $noithat ?></span></li>
                            <li><span class="tabmenu" data-filter=".posterbanner" class=""><?php echo $posterbanner ?></span></li>
											</ul>
					</div>
				</div>
<div class="wrap" id="sphome">
<div class="content_project">

					<div class="item_filter all" style="display:block">
                         <?php
				$i=0; 
                foreach ($listProduct as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							
							<div class="description">
								<p><span class="title"><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a> </span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								
							</div>
			            </div>
						<?php } ?>
                         </div>
                         <div class="item_filter tklogo">
                         <?php
				$i=0; 
                foreach ($listProduct1 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
	            <div class="project-cell">
					<div class="project-cell-thumb">
						<div class="project-cell-thumb-window">
							<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
								<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
				<div class="description">
					<p><span class="title">Thiết kế logo</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
					<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
				</div>
            </div>
						<?php } ?>
     				</div>
     				<div class="item_filter thuonghieu">
						<!--end-->
						 <?php
				$i=0; 
                foreach ($listProduct2 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Nhận diện thương hiệu</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
                        
                        
						<?php } ?>
                        
						<!--end-->
      				</div>
     				<div class="item_filter tkbaobiphongbi">
						 <?php
				$i=0; 
                foreach ($listProduct3 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế bao bì</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
                        </div>
     				<div class="item_filter dattenthuonghieu">
                        <?php
				$i=0; 
                foreach ($listProduct12 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Đặt tên thương hiệu</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						 </div>
     				<div class="item_filter bienquangcao">
						 <?php
				$i=0; 
                foreach ($listProduct4 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế biển quảng cáo</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
						</div>
     				<div class="item_filter toroitogap">
						 <?php
				$i=0; 
                foreach ($listProduct5 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế tờ rơi tờ gấp</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
						</div>
     				<div class="item_filter hosonangluc">
						 <?php
				$i=0; 
                foreach ($listProduct6 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế hồ sơ năng lực</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
						</div>
     				<div class="item_filter brochurecatalog">
						 <?php
				$i=0; 
                foreach ($listProduct7 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế brochure</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
						</div>
     				<div class="item_filter lichtet">
						 <?php
				$i=0; 
                foreach ($listProduct8 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế lịch Tết</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
						</div>
     				<div class="item_filter website">
						 <?php
				$i=0; 
                foreach ($listProduct9 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế website</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
						</div>
     				<div class="item_filter noithat">
						 <?php
				$i=0; 
                foreach ($listProduct10 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế nội thất</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
						</div>
     				<div class="item_filter posterbanner">
						 <?php
				$i=0; 
                foreach ($listProduct11 as $row) {
				$i++;
                    ?>
						<div class="item_project customer-size">
				            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>" class="box_image">
											<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" class="lazy" src="https://rubee.com.vn/logo.jpg" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
							<div class="description">
								<p><span class="title">Thiết kế poster</span><span class="view"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['Product']["view"] ?></span></p>
								<h3><a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>"><?php echo $row['Product']["name"]?></a></h3>
							</div>
			            </div>
						<?php } ?>
						<!--end-->
                        </div>

					
           
                    
			</div>	


<style type="text/css">
	@font-face {
	    font-family: 'MyriadProBold';
		src:url('/font/MyriadPro-Bold.ttf')  format('truetype');
	}
	.column3_1.customer-size {
		padding-left: 0px;
	}
	.khachhang{
		background-color:#F1F1F1;
		width:100%;
		overflow:hidden;
		padding-top:40px;
		padding-bottom:40px;
	}
	.khachhang h3{
		text-align:center;
		text-transform:uppercase;
		font-family: 'MyriadProBold' !important;
		font-size:24px;
		color:#686868;
	}
	.box_customer{
		width:100%;
		border-radius:30px;
		background-color:#fff;
		padding:30px;
		overflow:hidden;
		height:430px;
		position: relative;
	}
	.content_project{
		margin-left:-10px;
		margin-right:-10px;
		overflow:hidden;
		margin-bottom:50px;
	}
	.box_customer h4{
		color:14px;
		font-weight:600;
		color:3C3C3B;
		text-align:center;
		margin-top:0px;
		padding-top:0px;
		line-height:20px;
		margin-bottom:0px;
	}
	.box_customer p.type_design{
		font-size:14px;
		color:#38BAA1;
		font-style: italic;
		text-align:center;
		margin-bottom:0px;
	}
	.item_customer .box_image_cus{
		width:100%;
		text-align:center;
		margin-top:-70px;
	}
	.item_customer .box_image_cus img{
		display:inline-block;
		width:140px;
		height:140px;
		border-radius:70px;
		border:5px solid #fff;
	}
	.item_customer p.description{
	    text-align: justify;
	}
	.box_customer .icon_comment2{

	}
	.box_customer .icon_comment1{
	    position: absolute;
	    right: 30px;
	    bottom: 15px;
	}
	.line_cus{
		width:100px;
		height:2px;
		background-color:#38BAA1;
		margin:auto;
	}
	.rating_c{
		text-align:center;
		margin-top:15px;
		margin-bottom:15px;
		color:#3C3C3B;
	}
	.rating_c a{
		color:#3C3C3B;
	}
</style>

<style type="text/css">
	@font-face {
	    font-family: 'RobotoCondensedBold';
	    src: url('/font/roboto/RobotoCondensed-Bold.ttf');
	    font-weight: normal;
	    font-style: normal;
	}
	@font-face {
	    font-family: 'Roboto-Black';
	    src: url('/font/roboto/Roboto-Black.ttf');
	    font-weight: normal;
	    font-style: normal;
	}
	@media only screen and (max-width: 2560px) {
		#contact-thiet-ke .img_hotline img{
	    	float: right;
	    	margin-top: 60px;
		}
		#contact-thiet-ke .hotline-logo {
	    	padding-top: 40px;
	    	padding-bottom: 40px;
		}
		#contact-thiet-ke .hotline-top {
	    	padding-bottom: 20px;
		}
		#contact-thiet-ke .hotline-bottom-border {
	    	border-right: 1px #1BBC9B solid;
		}
		#contact-thiet-ke .title-hotline {
	    	font-size: 24px;
	    	border-bottom: 3px #1BBC9B solid;
	    	display:inline-block;
		}
		#contact-thiet-ke .add {
	    	font-size: 16px;
	    	color: #1BBC9B;
	    	text-transform: uppercase;
	    	font-weight: bold;
		}
	}
	@media only screen and (max-width: 1024px) {
		#contact-thiet-ke .img_hotline img{
	    	float: right;
	    	margin-top: 80px;
		}
		#contact-thiet-ke .hotline-logo {
	    	padding-top: 40px;
	    	padding-bottom: 40px;
		}
		#contact-thiet-ke .hotline-top {
	    	padding-bottom: 20px;
		}
		#contact-thiet-ke .hotline-bottom {
	    	font-size: 13px;
		}
		#contact-thiet-ke .title-hotline {
	    	font-size: 24px;
	    	border-bottom: 3px #1BBC9B solid;
		}
		#contact-thiet-ke .add {
	    	font-size: 16px;
	    	color: #1BBC9B;
	    	text-transform: uppercase;
	    	font-weight: bold;
		}
	}
	@media only screen and (max-width: 768px) {
	    #contact-thiet-ke .img_hotline img{
	    	display: none;
		}
		#contact-thiet-ke .hotline-bottom-border {
	    	border-right: none;
	    	margin-bottom: 20px;
		}
	}
	#formTuvan{
		width:100%;
	}
	#formTuvan input{
	    height: 35px;
	    width: 100%;
	    border: none;
	    margin-bottom: 10px;
	    padding-left: 10px;
	    padding-right: 10px;
	    border-radius: 5px;
	    color:#333333;
	}
	#contact-thiet-ke #formTuvan .hotline-logo{
		padding-bottom:0px;
	}
	#formTuvan textarea{
		    width: 100%;
	    border: none;
	    margin-bottom: 10px;
	    padding-left: 10px;
	    border-radius: 5px;
	    height: 100px;
	    color:#333333;
	}
	#formTuvan button{
	    background-color: #1bbc9b;
	    border: none;
	    color: #fff;
	    width: 100%;
	    height: 35px;
	    text-transform: uppercase;
	    font-weight: 600;
	    border-radius: 5px;
	    margin-bottom:50px;
	}
	#formTuvan label.error{
		color:red;
		font-weight:normal;
		font-size:13px;
		    float: left;
	}
	@media(max-width:468px){
		 .title-hotline{
			line-height:36px;
		}
		#contact-thiet-ke #formTuvan  .hotline-bottom-border{
			margin-bottom:0px;
		}
	}
	.btn_dangky_tuvan{
	    border: none;
	    background-color: #1bbc9b;
	    padding: 5px 15px;
	    text-transform: uppercase;
	    margin-top: 30px;
	    color: #fff;
	    font-weight: 600;
	}
	.btn_dangky_tuvan:hover{
		background-color:#0baa89;
	}
	.wrap ol{
		padding-left:20px;
		margin-bottom:15px;
	    overflow: hidden;
	}
	.wrap ol li{
		list-style:none;
		float:left;
		color:#fff;
		margin-left:5px;
		margin-right:5px;
	}
	.wrap ol li a{
		color:#fff;
	}
	#page-title-bar{
		overflow:hidden;
	}
	#page-title-sub{
		margin-bottom:0px;
	}
	h2#page-title{
		margin-bottom:0px;
	}
	.wrap ol.carousel-indicators{
		overflow:initial;
		padding-left:0px;
	}
	.wrap ol.carousel-indicators li{
		float:none;
		margin-left:0px;
		margin-right:0px;
	}
	.block-subheader .rating > input {
	    position: absolute;
	    margin-left: 0px;
	    z-index: 2;
	    opacity: 0;
	    font-size: initial;
	    top: 50%;
	    transform: translateY(-50%);
	}
	.block-subheader .rating,.block-subheader a{
		color:#3C3C3B;
	}
	.item_project{
		width:33.33%;
		float:left;
		margin-bottom:20px;
	}
	.project-cell{
		padding:10px;
	}
	.description p a{
		    color: #414042;
	}
	.project-cell-bg{
		border-radius:5px;
	}
	.item_project:nth-child(3n+1) {
	    clear: left;
	}
	#imgviewhome{
		border-radius:initial;
		width:100%;
		height:100%;
	}
	.project-cell-title{
		font-family: 'RobotoCondensedBold' !important;
		font-size: 20px;
	    font-style: normal;
	    font-weight: 700;
	    line-height: 24px;
	    color: #fff;
	    text-align: left;
	    width: 100%;
	    padding: 15px;
	    color:#38b9a0;
        text-transform: uppercase;
	}
	.project-cell-bg{
	    background-color: rgba(0,0,0,0.7);
	}
	.project-cell-title:before{
		content: '';
	    width: 40px;
	    height: 5px;
	    background-color: #38b9a0;
	    position: absolute;
	    top: 0px;
	}	
	.line {
	    width: 60px;
	    height: 10px;
	    margin-top: 20px;
	    margin: auto;
	}
	.line .bg_top {
	    height: 5px;
	    width: 100%;
	    background-color: #38b9a0;
	}
	.line .bg_bottom {
	    height: 5px;
	    width: 100%;
	    background-color: #080707;
	}
	.item_filter{
		display:none;
	}
	.box_image{
		width:100%;
		display:block;
		height:206px;
		overflow:hidden
	}
	.nguyentac .left{
		width: 60%;
		float: left;
	}
	.nguyentac .right{
		width: 40%;
		float: left;
		padding-left: 20px;
	}
	.nguyentac .left .panel-default > .panel-heading .panel-title{
		width: 100%;
	}
	.nguyentac .left .panel-default > .panel-heading .panel-title i{
	    float: left;
    	margin-right: 5px;
    	color: #38BAA1;
	}
	.list_customer .owl-nav{
		display: none;
	}
	.description h3{
		margin-top:0px;
	    padding-top: 0px;
    	overflow: hidden;
    	line-height:20px;
	}
	.description p{
	    width: 100%;
	    color: #414042;
	    padding-right: 30px;
	    padding-left: 10px;
	    overflow: hidden;
	    margin-bottom: 0px;
	    padding-bottom: 0px;
	}
	.description p span.title{
		float:left;
		font-size:16px; 
		
		font-family:'RobotoCondensedBold';
	}
	.description p span.view{
		float:right;
		font-size:12px;
	}
	#sphome{
		overflow:hidden
	}
	.description h3 a{
		font-size:14px;
		color:#414042;
		padding-left:10px;
		display:block;
	}
	.project-cell-thumb{
		border-radius:5px;
		overflow: hidden;
	}
	@media(max-width: 468px){
		.item_project{
			width: 100%;
		}
		.box_image{
			height: initial;
		}
		.project-cell-hover{
			display: block;
		}
		.nguyentac .panel-default > .panel-heading .panel-title{
			width: 85%;
		}
		.nguyentac .panel-default > .panel-heading img{
			width: 8%;
		}
		.nguyentac .left{
			width: 100%;
		}
		.nguyentac .right{
			width: 100%;
			padding-left: 0px;
		}
		.nguyentac .left .panel-default > .panel-heading .panel-title i{
			width: 3%;
		}
		.nguyentac .panel-default > .panel-heading .panel-title span{
			width: 85%;
		}
		#imgviewhome{
			height:auto;
		}
	}
</style>
