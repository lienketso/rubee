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
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>engine1/style.css" />


	<div id="wowslider-container1">
	<div class="ws_images"><ul>
	   <?php
                $slideshow = $this->requestAction('comment/slidecha');
                foreach ($slideshow as $row) {
                    ?>
<li>
<a href=""  title="<?php echo $row['Slideshow']["name$duoi"] ?>">
<img src="<?php echo DOMAINAD. $row['Slideshow']['images'] ?>" alt="" title="<?php echo $row['Slideshow']["name$duoi"] ?>" id="wows1_0"/></li>
</a>
<?php } ?>
</ul></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="<?php echo DOMAIN?>engine1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo DOMAIN?>engine1/script.js"></script>
