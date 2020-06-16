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
<link type="text/css" href="<?php echo DOMAIN ?>css/phantrang.css" rel="stylesheet" />
<script>
	$(function(){
		$('.video1').click(function(){
		var bien= $(this).attr('href');//alert(bien);
		
		$('.list').html(bien);
		});
		
	})
</script>
<div id='center'>
<div class="main">
<div class="title_top_news_detail" style="margin-top:7px;margin-left:5px;">

         
                <p><?php echo $video?></p>
				
   </div></div>
    <div class='new-equipment'>
         
				<div class="list" style="margin-bottom: 20px;text-align: center;
margin-top: 10px;width: 500px;
float: left;">
			 <?php
	$setting = $this->requestAction('comment/video');
	foreach($setting as $row){
		 ?>
		 <?php echo $row['Tin']['content']; ?> 
		 <p style="font-weight: bold;

line-height: 30px;text-transform: uppercase;" class="video1" href ='<?php echo $row['Tin']['content']?>'>  <?php echo $row['Tin']["name$duoi"]; ?></p>
	<?php }?>
	</div>
		<div class="main1" style="
">
                 <ul style="width: 295px;float:left;">
			 <?php
	$row1 = $this->requestAction('comment/listvideo');
	foreach($row1 as $row){
		 ?>
			<p style="font-weight: bold;cursor: pointer;

			line-height: 30px;" class="video1" href ='<?php echo $row['Tin']['content']?>'> - &nbsp; <?php echo $row['Tin']["name$duoi"]; ?></p>
	<?php }?>
            </ul>  

      

			
                   </div>
    </div>

</div>