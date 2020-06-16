	
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
<?php echo $this->Html->css('content_left'); ?>
<div id="content_left" style="width: 286px;height:auto;float:left; overflow: hidden;margin-top: 6px;">

<?php echo $this->element('menu_ngang') ?>

<div id="menu2" >
	
<p id="tieude">VIDEO</p>
                <div class="list"style="padding:0px;overflow:hidden;">
 <?php
	$setting = $this->requestAction('comment/video');
	foreach($setting as $row){
		 ?>
		 <?php echo $row['Tin']['content']; ?> 
		 <p style="line-height: 20px;text-align: center;" class="video1" href ='<?php echo $row['Tin']['content']?>'></p>
	<?php }?></div>
				</div>
			
<script type="text/javascript">function fe33549(data) {document.getElementById("vtm-adve33549").innerHTML = data.adv;}var cck = "encrypted_id_of_running_ads.id_of_running_ads";var script = document.createElement("script"); script.src="http://adv.vtmgroup.com.vn/adv/adv/load_adv/rkyDbltx5ZWfXg6MQxde,FgH141P5Byp2SXG4jaBo9y,lLPKTGi6Un0Bo4CeaeMzhF,250,360/?callback=fe33549&url=bepduc.com"; document.getElementsByTagName("head")[0].appendChild(script);</script>
<div id="vtm-adve33549"></div>
	
</div>