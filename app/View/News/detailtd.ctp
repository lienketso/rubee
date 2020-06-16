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
					<h2 id="page-title"><span><?php echo $typeName['Catalogue']["name$duoi"] ?></span></h2>
					<h1 id="page-title-sub"><span><?php echo $detailNews['News']["name$duoi"]; ?></span></h1>
					<div class="cleared"></div>
				</div>
			</div>
<div class="boxmain">

    <div class='warn'>
        <div class="big-column left" style="padding-top: 50px; padding-bottom: 0px;">
            <?php echo $detailNews['News']["content$duoi"]; ?>
        </div>
        <div class="small-column right" style="padding-top: 50px;">
						<div id="portfolio-section-des"><?php echo $typeName['Catalogue']["shortdes$duoi"]?></div>			
		</div>
	
    </div>

</div> 