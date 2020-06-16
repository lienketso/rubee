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
                         
                                </div>          
                                <div class="textwidget">

                 <?php
            $banner = $this->requestAction('comment/quanlygioithieu');
            foreach ($banner as $banner) {
                ?>                              
            <?php echo $banner['Post']["shortdes$duoi"]; ?>     
            <?php } ?>      
                            </div>
                            <div class="footerchitiet"><a class="chitet" href="<?php echo DOMAIN?>chi-tiet-gioi-thieu/11/nang-luc-hoat-dong.html">Chi tiết</a></div>
                            </div> 
                            
                            <div class="footer-widget">
                                <div class="sidebar-widget-title">
                                <a><span>Video</span></a>
                                </div>          
                            <div class="textwidget">
                            
                             </div>
                            </div>
                            
                            <div class="footer-widget" id="download" style="padding-left: 0px;">
                        
                                <div class="sidebar-widget-title"><span>Khách hàng</span></div> 
                                <div class="tagcloud">
        <div class="bottomAdv">
<div id="SLIDE_BANNER"></div>
  <div id="PromoFooter" style="float:left; width: 100%;">
    <div class="promo"> 
    
        <div class="promo-mid fl">      
            <div class="promo-slider fl">           
                <div id="promoitems" >
                        
                    <div class="item">
 
                      <img alt="logo khach hang rubee 1" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt36.jpg" class="lazy" ><br />
                      <img alt="logo khach hang rubee 2" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt33.jpg" class="lazy" >
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 2" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt33.jpg" class="lazy" >
                            <br />
                            <img alt="logo khach hang rubee 3" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt34.jpg" class="lazy" >
                    
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 4" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt43.jpg" class="lazy" >
                            <br />
                            <img alt="logo khach hang rubee 5" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt35.jpg" class="lazy" >
                    
                    </div><div class="item">
                                                
                            <img alt="logo khach hang rubee 6" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt15.jpg" class="lazy" >
                            <br />
                            <img alt="logo khach hang rubee 12" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt9.jpg" class="lazy" >
                    
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 8" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt13.jpg" class="lazy" >
                            <br/>
                            <img alt="logo khach hang rubee 9" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt12.jpg" class="lazy" >
                    
                    </div>
                    <div class="item">
                                                
                            <img alt="logo khach hang rubee 10" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt11.jpg" class="lazy" >
                            <br />
                            <img alt="logo khach hang rubee 11" src="/logo.jpg" data-src="<?php echo DOMAIN?>images/logo/gt10.jpg" class="lazy" >
                    
                    </div>
                    
                    
                    </div>  
        </div>  
     </div>
</div>
<script type="text/javascript" language="javascript">
    if(innerWidth > 768){
    var itemsPerPage=5,ci=itemsPerPage-1,promotion_total=0,promotion_minLeft=0,promotion_maxLeft=0,promotion_left=0,promotion_speed=15000;function slideInit(){objPromo=jQuery('#promoitems');items=jQuery('#promoitems > .item');promotion_total=s=items.length;w=jQuery('.item').width();if(promotion_total>itemsPerPage){objPromo.css('width',w*s+'px');promotion_minLeft=-w*itemsPerPage*(promotion_total%itemsPerPage==0?parseInt(promotion_total/itemsPerPage):parseInt(promotion_total/itemsPerPage)+1);promotion_maxLeft=-w*itemsPerPage;jQuery(objPromo).append(jQuery('#promoitems div.item:lt('+(itemsPerPage-s%itemsPerPage)+')').clone());for(var i=0;i<itemsPerPage;i++)jQuery(objPromo).prepend(jQuery('#promoitems div.item').eq(s-1).clone());s=jQuery('.item').length;jQuery(objPromo).css('width',w*s+'px').css('margin-left',-w*itemsPerPage+'px');promotion_left=-itemsPerPage*w;jQuery('.promo-page #slidenext').click(function(){slideNext();});jQuery('.promo-page #slideprev').click(function(){slidePrev();});st=setTimeout('slideNext()',promotion_speed);}else{jQuery('.promo-page').remove();}}function slideNext(){promotion_left-=itemsPerPage*w;if(promotion_left<promotion_minLeft)promotion_left=promotion_minLeft;jQuery(objPromo).animate({marginLeft:promotion_left},{queue:false,duration:800,complete:adjustNext})
if(st!=null)clearTimeout(st);st=setTimeout('slideNext()',promotion_speed);}function slidePrev(){promotion_left+=itemsPerPage*w;if(promotion_left>promotion_maxLeft)promotion_left=0;jQuery(objPromo).animate({marginLeft:promotion_left},{queue:false,duration:800,complete:adjustPrev})
if(st!=null)clearTimeout(st);st=setTimeout('slidePrev()',promotion_speed);}function adjustNext(){ci+=itemsPerPage;if(promotion_left==promotion_minLeft){jQuery('#promoitems div.item:lt('+itemsPerPage+')').remove();var curInd=ci%promotion_total;for(i=0;i<itemsPerPage;i++){curInd+=1;if(curInd>promotion_total-1)curInd=0;objPromo.append(items.eq(curInd).clone());}objPromo.css('margin-left',promotion_left+(w*itemsPerPage)+'px');if(ci>promotion_total)ci=ci%promotion_total;}}function adjustPrev(){ci-=itemsPerPage;if(promotion_left==0){jQuery('#promoitems div.item:gt('+(s-itemsPerPage-1)+')').remove();var curInd=ci-itemsPerPage;if(curInd<0)curInd=promotion_total+curInd;for(var i=0;i<itemsPerPage;i++){if(curInd<0)curInd=promotion_total-1;objPromo.prepend(items.eq(curInd).clone());curInd--;}objPromo.css('margin-left',promotion_maxLeft+'px');if(ci<0)ci=ci+=promotion_total;}}
}
</script>
<script type="text/javascript" language="javascript">
    slideInit();
</script>
        </div>
  
</div>
                </div>
            </div>
                            </div>                              
                            <div class="cleared"></div>
                                
                        </div><!-- End Footer Widget Container-->
                    
                    </div>
                </div> 
              
        
            