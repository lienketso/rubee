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
<div class="wrap" id="sphome">
					<div class="portfolio-top">
						<div id="portfolio-section-des"><?php echo $typeName['Catproduct']["shortdes$duoi"]?>
                        <div class="left_addthis">
			                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-595af3e281b6800c"></script> 
			                <div class="addthis_inline_share_toolbox"></div>
			            </div>
			            	 <div class="right_view">

                        <p style="float: right; padding-right: 10px;"><strong>Số lần xem : <?php echo strrev(wordwrap(strrev($typeName['Catproduct']["shortdes_eg"]),3,',',true)); ?></strong></p>
                        </div>
                        </div>			
					</div>
				</div>
<div class="wrap" id="sphome">
		<div class="wrap-portfolio portfolio-grid">

			<div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-aquamedia-spa.html">
	                            <img alt="Thiết kế website Aquamedi Spa" id="imgviewhome" src="http://rubee.com.vn/website/thiet-ke-website-aquamedi-spa.jpg">
	                        </a>
	                        <a title="Thiết kế website Aquamedi Spa" href="http://rubee.com.vn/du-an/thiet-ke-website-aquamedia-spa.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Aquamedi Spa
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-lalisse.html">
	                            <img alt="Thiết kế website Lalisse" id="imgviewhome" src="http://rubee.com.vn/website/thiet-ke-website-lalisse.jpg">
	                        </a>
	                        <a title="Thiết kế website Lalisse" href="http://rubee.com.vn/du-an/thiet-ke-website-lalisse.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Lalisse
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-smartdoor.html">
	                            <img alt="Thiết kế website  Smart Door" id="imgviewhome" src="http://rubee.com.vn/website/thiet-ke-website-smartdoor.jpg">
	                        </a>
	                        <a title="Thiết kế website  Smart Door" href="http://rubee.com.vn/du-an/thiet-ke-website-smartdoor.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Smart Door
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-sumi.html">
	                            <img alt="Thiết kế website Sumi" id="imgviewhome" src="http://rubee.com.vn/website/thiet-ke-website-sumi.jpg">
	                        </a>
	                        <a title="Thiết kế website Sumi" href="http://rubee.com.vn/du-an/thiet-ke-website-sumi.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Sumi
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

			<div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-amitea.html">
	                            <img alt="Thiết kế website Amitea" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/amitea/thiet-ke-website-amitea-1.jpg">
	                        </a>
	                        <a title="Thiết kế website Amitea" href="http://rubee.com.vn/du-an/thiet-ke-website-amitea.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Amitea
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-artex.html">
	                            <img alt="Website công ty xuất nhập khẩu Artex Thăng Long" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/artex/thiet-ke-website-artex.jpg">
	                        </a>
	                        <a title="Website công ty xuất nhập khẩu Artex Thăng Long" href="http://rubee.com.vn/du-an/thiet-ke-website-artex.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Website công ty xuất nhập khẩu Artex Thăng Long
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-indeco.html">
	                            <img alt="Thiết kế website Indeco" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/indeco/thiet-ke-website-indeco-1.jpg">
	                        </a>
	                        <a title="Thiết kế website Indeco" href="http://rubee.com.vn/du-an/thiet-ke-website-indeco.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Indeco
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-lien-dai-vien.html">
	                            <img alt="Thiết kế website công viên nghĩa trang Liên Đài Viên" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/liendaivien/thiet-ke-website-lien-dai-vien.jpg">
	                        </a>
	                        <a title="Thiết kế website công viên nghĩa trang Liên Đài Viên" href="http://rubee.com.vn/du-an/thiet-ke-website-lien-dai-vien.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website công viên nghĩa trang Liên Đài Viên
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-long-son.html">
	                            <img alt="Thiết kế website Long Sơn" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/longson/thiet-ke-website-long-son.jpg">
	                        </a>
	                        <a title="Thiết kế website Long Sơn" href="http://rubee.com.vn/du-an/thiet-ke-website-long-son.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Long Sơn
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-roxa-beer.html">
	                            <img alt="Thiết kế website Roxa Beer" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/roxa/thiet-ke-website-roxa.jpg">
	                        </a>
	                        <a title="Thiết kế website Roxa Beer" href="http://rubee.com.vn/du-an/thiet-ke-website-roxa-beer.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website Roxa Beer
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-t-t-group.html">
	                            <img alt="Website tập đoàn T&T Group" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/t&t/thiet-ke-website-t-t-1.jpg">
	                        </a>
	                        <a title="Website tập đoàn T&T Group" href="http://rubee.com.vn/du-an/thiet-ke-website-t-t-group.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Website tập đoàn T&T Group
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-tin-nghia.html">
	                            <img alt="Thiết kế website xây dựng Tín Nghĩa" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/tinnghia/thiet-ke-website-tin-nghia.jpg">
	                        </a>
	                        <a title="Thiết kế website xây dựng Tín Nghĩa" href="http://rubee.com.vn/du-an/thiet-ke-website-tin-nghia.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website xây dựng Tín Nghĩa
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="column3_1 customer-size">
	            <div class="project-cell">
	                <div class="project-cell-thumb">
	                    <div class="project-cell-thumb-window">
	                        <a href="http://rubee.com.vn/du-an/thiet-ke-website-siton.html">
	                            <img alt="Thiết kế website gạch men sứ Thanh Hải" id="imgviewhome" src="http://rubee.com.vn/thietkewebsite/siton/thiet-ke-website-siton.jpg">
	                        </a>
	                        <a title="Thiết kế website gạch men sứ Thanh Hải" href="http://rubee.com.vn/du-an/thiet-ke-website-siton.html">
	                        <div class="project-cell-bg"></div>
	                        
	                        <div class="project-cell-hover">
	                            <div class="project-cell-title">
	                                Thiết kế website gạch men sứ Thanh Hải
	                            </div>
	                        </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>

						 <?php
				$i=0; 
				foreach ($listProduct as $row) {
				$i++;
					?>
						
							<div class="column3_1 customer-size ">
                            <div class="project-cell">
								<div class="project-cell-thumb">
									<div class="project-cell-thumb-window">
										<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
											<img alt="<?php echo $row['Product']["name"]?>" id="imgviewhome" src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
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
                            </div>
				
						<?php } ?>
						
						<div class="cleared"></div>

				</div>
                </div>