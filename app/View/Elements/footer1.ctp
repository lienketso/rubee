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
<div id="footer">
				<div class="wrap">	
					<div class="content">
						<div id="footer-widget-container">
							<div class="footer-widget">
								<div class="sidebar-widget-title">
                                <a href="<?php echo DOMAIN?>chi-tiet-gioi-thieu/11/nang-luc-hoat-dong.html"><span>
                                
                                <?php echo $vechungtoi?></span></a>
                                <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'vi'}
</script>
<a href="http://rubee.com.vn/sitemap.html" title="sitemap html rubee">Sitemap</a>

<g:plusone></g:plusone>
                                </div> 			
								<div class="textwidget">

				 <?php
            $banner = $this->requestAction('comment/quanlygioithieu');
            foreach ($banner as $banner) {
                ?>								
			<?php echo $banner['Post']["shortdes$duoi"]; ?>		
			<?php } ?>		
							</div>
							</div> 
							
							<div class="footer-widget" id="download">
						
								<div class="sidebar-widget-title"><span>Khách hàng</span></div> 
								<div class="tagcloud">
		<div class="bottomAdv">
<div id="SLIDE_BANNER"></div>
  <div id="PromoFooter" style="float:left; width: 600px;">
    <div class="promo"> 
       
       <div class="promo-page fl">     
            <div id="slideprev"></div>  
        </div> 
    
        <div class="promo-mid fl">      
            <div class="promo-slider fl">           
                <div id="promoitems" >
                        
                    <div class="item">
 
                      <img alt="logo khach hang rubee 1" src="<?php echo DOMAIN?>images/logo/gt36.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 2" src="<?php echo DOMAIN?>images/logo/gt33.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 3" src="<?php echo DOMAIN?>images/logo/gt34.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 4" src="<?php echo DOMAIN?>images/logo/gt43.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 5" src="<?php echo DOMAIN?>images/logo/gt35.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 6" src="<?php echo DOMAIN?>images/logo/gt15.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 7" src="<?php echo DOMAIN?>images/logo/gt28.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 8" src="<?php echo DOMAIN?>images/logo/gt13.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 9" src="<?php echo DOMAIN?>images/logo/gt12.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 10" src="<?php echo DOMAIN?>images/logo/gt11.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 11" src="<?php echo DOMAIN?>images/logo/gt10.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 12" src="<?php echo DOMAIN?>images/logo/gt9.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 13" src="<?php echo DOMAIN?>images/logo/gt8.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 14" src="<?php echo DOMAIN?>images/logo/gt7.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 15" src="<?php echo DOMAIN?>images/logo/gt6.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 16" src="<?php echo DOMAIN?>images/logo/gt5.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 17" src="<?php echo DOMAIN?>images/logo/gt4.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 18" src="<?php echo DOMAIN?>images/logo/gt3.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 19" src="<?php echo DOMAIN?>images/logo/gt2.jpg">
                    
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 20" src="<?php echo DOMAIN?>images/logo/gt1.jpg">
                    
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 21" src="<?php echo DOMAIN?>images/logo/gt21.jpg">
                    
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 22" src="<?php echo DOMAIN?>images/logo/gt22.jpg">
                    
                    </div>
                    
                    <div class="item">
 
                      <img alt="logo khach hang rubee 23" src="<?php echo DOMAIN?>images/logo/gt23.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 24" src="<?php echo DOMAIN?>images/logo/gt24.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 25" src="<?php echo DOMAIN?>images/logo/gt25.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 26" src="<?php echo DOMAIN?>images/logo/gt26.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 27" src="<?php echo DOMAIN?>images/logo/gt27.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 28" src="<?php echo DOMAIN?>images/logo/gt17.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 29" src="<?php echo DOMAIN?>images/logo/gt29.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 30" src="<?php echo DOMAIN?>images/logo/gt30.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 31" src="<?php echo DOMAIN?>images/logo/gt31.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 32" src="<?php echo DOMAIN?>images/logo/gt32.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 33" src="<?php echo DOMAIN?>images/logo/gt20.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 34" src="<?php echo DOMAIN?>images/logo/gt34.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 35" src="<?php echo DOMAIN?>images/logo/gt16.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 36" src="<?php echo DOMAIN?>images/logo/gt37.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 37" src="<?php echo DOMAIN?>images/logo/gt19.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 38" src="<?php echo DOMAIN?>images/logo/gt38.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 39" src="<?php echo DOMAIN?>images/logo/gt39.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 40" src="<?php echo DOMAIN?>images/logo/gt40.jpg">
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 41" src="<?php echo DOMAIN?>images/logo/gt41.jpg">
                    
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 42" src="<?php echo DOMAIN?>images/logo/gt42.jpg">
                    
                    </div>
 
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 43" src="<?php echo DOMAIN?>images/logo/gt44.jpg">
                    
                    </div>
                    
                    </div>  
        </div>  
     </div>
     <div class="promo-page fl">     
            <div id="slidenext"></div>  
        </div>
</div>
<script src="<?php echo DOMAIN?>js/promotion.js" type="text/javascript" language="javascript"></script>
<script>
</script>
<script type="text/javascript" language="javascript">
    slideInit();
</script>
        </div>
  
</div>
				</div>
				<script>
				$(function(){
					
					$(".tag12").click(function(){						
						value=$(this).text();
						window.location = "<?php echo DOMAIN."tintuc/search_tag/" ?>"+value;
					});
					
				});
			</script>
									</div>
							</div> 		 						
							<div class="cleared"></div>
								
						</div><!-- End Footer Widget Container-->
					
					</div>
				</div> 
              
		
			