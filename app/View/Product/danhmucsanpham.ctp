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
 
 <div id="page-title-bar"  style="padding-top: 50px;">
	<div class="wrap">
		<div class="overlay-bar"></div>
		<h2 id="page-title"><span><?php echo $sanpham ?>/</span></h2>
					<h1 id="page-title-sub"><?php echo $typeName['Catproduct']["name"]?></h1>
		<div class="cleared"></div>
	</div>
	<style type="text/css">
		#page-title-bar span.span-parent{
			font-family: "Lato",Source Sans Pro !important;
		    font-size: 25px;
		    line-height: 48px;
		    font-style: normal;
		    font-weight: 600;
		    text-transform: uppercase;
		    color: white;
		}
		#page-title-bar span.span-child{
			font-family: Source Sans Pro !important;
		    font-size: 20px;
		    line-height: 48px;
		    font-style: normal;
		    font-weight: 400;
		    text-transform: uppercase;
		    margin-top: 0px;
		    padding: 6px 0;
		    color: rgba(255, 255, 255, 0.7);
		}
        .left_addthis{
            width:60%;
            float:left;
        }
        .right_view{
            width:40%;
            float:left;
        }
		@media only screen and (max-width: 768px) {
			#page-title-bar span.span-parent{
				font-family: "Lato",Source Sans Pro !important;
			    font-size: 21px;
			}
			#page-title-bar span.span-child{
				font-family: Source Sans Pro !important;
			    font-size: 18px;
			}
			#page-title-bar .wrap {
			    position: relative;
		    	padding-left: 10px;
			}
            .right_view,.left_addthis{
                width:100%;
                float:none;
            }
		}
	</style>
</div>
<div class="wrap" id="sphome">
	<div class="portfolio-top">
		<div id="portfolio-section-des">
			<?php echo $typeName['Catproduct']["shortdes$duoi"]?>
	
            
            <div class="right_view">
                	<p style="float: right;"><strong>Số lần xem : <?php echo strrev(wordwrap(strrev($typeName['Catproduct']["shortdes_eg"]),3,',',true)); ?></strong></p>
            </div>
                
        </div>			
	</div>
</div>

<div class="wrap">
	<?php 
		if (count($listProduct) > 0)
		{
	?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; margin-bottom: 40px;  color: #1a1a1a;">
			<h2 style="text-transform: uppercase; font-size: 30px; padding-bottom: 10px;"><span style=" padding-bottom: 10px; border-bottom: 4px solid #1a1a1a;">Sản Phẩm</span></h2>
			<span style="padding-top: 10px;">Hãy tham khảo những dự án thiết kế thương hiệu mà Rubee đã thực hiện</span>
		</div>
	</div>
	<?php
		}
	?>
	<div class="wrap-portfolio portfolio-grid">
		<?php
			$i=0; 
			foreach ($listProduct as $row) {
			$i++;
		?>	
			<div class="column3_1 customer-size">
                <div class="project-cell">
					<div class="project-cell-thumb">
						<div class="project-cell-thumb-window">
							<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
								<img alt="<?php echo $row['Product']["name"]?>" class="lazy" data-src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>" id="imgviewhome" src="https://rubee.com.vn/logo.jpg">
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

<style type="text/css">
	.column3_1.customer-size {
		padding-left: 0px;
	}
	.project-cell {
		padding: 10px; background: #f7f7f7;
	}
</style>