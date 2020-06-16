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
<script src="<?php echo DOMAIN ?>js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function($) {
        $(".newsticker-jcarousellite").jCarouselLite({
            vertical: true,
            hoverPause:true,
            visible: 4,
            auto:500,
            speed:3000,
            liWidth: 207,
            liHeight: 243
        });
    });
</script>		  <div class="content_left">
<div class="list_sp">
<div class="lang">
<div style="text-align: right;
padding-right: 13px;
width: 179px;
padding-left: 117px;">
<span style="font-size:14px;">Hotline</span>
<div id="hot"><?php echo $settings['Setting']["telephone"]; ?></div>
</div>
 <form action="<?php echo DOMAIN ?>tim-kiem.html" method="POST" style="height: 28px;
width: 300px;
float: right;
margin-top: 8px;
margin-right: 10px;
background: #fff;">
		 <input type="text" style="width: 198px;
height: 24px;margin-right: 5px;
border: 1px solid #c6c7c9;
float: left;"name="txtsearch" id="txtdangky" value="" onclick="this.value=''" onblur="if (this.value == '')  {this.value = '';}"/>
				<input type="image" src="<?php echo DOMAIN; ?>images/img_btn_search.png"  border="0" style="border: none;height: 28px;"/>

           </form> 
</div>
</div>	 
<div class="list_sp" style="border:0px;">
	
			 <?php echo $this->element('menu_right') ?> 
			</div>
			<!--end danh mục sản phẩm-->
			 <div class="list_sp">
	<div class="tieude_dm"><p>HOẠT ĐỘNG MICOMINREAL	
</p></div>
	<div class="newsticker-jcarousellite">
		
			<ul>
			<?php 
						 $doitac = $this->requestAction('comment/hoatdong');
						 	foreach ($doitac as $row ) {
							
						 ?><li style="height:181px;width:235px">
                            <div class="thumbnail quangcao1">
                   
			<a  title="<?php echo $row['News']["name"]; ?>" href="<?php echo DOMAIN?>chi-tiet-tin-tuc/<?php echo $row['News']["id"]; ?>/<?php echo $row['News']["alias"].".html"; ?>">		
			<img width="210" height="134" src="<?php echo IMAGEAD?>news/<?php echo $row['News']["images"]; ?>">
<p style="text-align:center;">		
<?php echo $row['News']["name$duoi"]; ?></p>
</a>
					
                            </div>
                            <div class="clear"></div></li>
                        <?php }?>
						</ul>
						</div>
	</div>
		 <div class="list_sp">
	<div class="tieude_dm"><p>HỖ TRỢ TRỰC TUYẾN	</p>
		 </div><?php echo $this->element('support') ?> 
		 </div>
		 <!--	 <div class="list_sp" style="overflow:hidden;">
			<div class="tieude_dm"><p>TIN TỨC</p></div>
             <?php
                $new = $this->requestAction('comment/tintuc_right');
                foreach ($new as $row) {
                    ?>
                    
						
                           <div class="thumbnail quangcao" style=" height: auto;padding-bottom:5px;overflow:hidden; padding-left: 5px;margin-top:5px;">
                        
                                     <a title="<?php echo $row['News']["name$duoi"] ?>" alt="tintuc" href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['News']['id'] . '/' . $row['News']['alias'] . '.html'; ?>">
								<div class="img_3"><img title="<?php echo $row['News']["name$duoi"] ?>" alt="image"  style="width: 60px;height: 45px;float: left;border: 1px solid #cac8c8;padding:2px;margin-bottom:4px;margin-right:4px;" src="<?php echo IMAGEAD; ?>news/<?php echo $row['News']['images']; ?>"class="bdimg" /></div>
                                  <div class="name_4" style="width: 220px;"><h3><p style="font-size: 12px;"><?php echo $row['News']["name$duoi"] ?></p></h3></div>  </a></div>
                            <div class="clear"></div>
               
                        <?php }?>
        
			 </div>-->
			 <div class="list_sp">
	<div class="tieude_dm"><p>LIÊN KẾT WEBSITE</p></div>
	 <div class="linklk">
                            <table class="timkiem">
            <tr>
 <?php 
						 $doitac = $this->requestAction('comment/doitac');
						 
						 ?>
                <td>
				<script>
					$(function(){
						$("#jumpMenu").change(function(){
						 window.open($(this).val(),'_blank');
						});
					});
				
				</script>

				<select name="listCat" id="jumpMenu" style="width: 195px;">
                        <option>------ <?php echo $chonlinklienket?> ------</option>  
			
			<?php
			
						foreach ($doitac as $k ) { ?>
                        <option value="<?php echo $k['Partner']['link']; ?>">
						<?php echo $k['Partner']['link']; ?></option>
                        <?php } ?>
                </select>
					</td>
            </tr>
        </table>  </div>
	</div> 	
			 <!--div class="list_sp">
	<div class="tieude_dm"><p>THỐNG KÊ TRUY CẬP</p></div>
	</div-->
			
						
			</div>