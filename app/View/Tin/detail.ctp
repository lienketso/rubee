<link type="text/css" href="<?php echo DOMAIN ?>css/phantrang.css" rel="stylesheet" />
<script>
	$(function(){
		$('.video1').click(function(){
		var bien= $(this).attr('href');//alert(bien);
		
		$('.list').html(bien);
		});
		
	})
</script>
<div class='boxmain' style="text-align: center;
">
	  <div class="title_" style="margin-bottom:10px;">
                <div class="main">
						<div class="title_tintuc"><p>VIDEO</p></div><br/>
                </div>
</div>
				
				<div class="list" style="margin-bottom: 20px;">
			 <?php
	$setting = $this->requestAction('comment/video');
	foreach($setting as $row){
		 ?>
		 <?php echo $row['Tin']['content']; ?> 
	<?php }?>
	</div>
 
													</div>
	<div class="main1" style="text-align: center;
">
                 <ul>
			 <?php
	$setting = $this->requestAction('comment/listvideo');
	foreach($setting as $row){
		 ?>
			<p style="font-weight: bold;

line-height: 30px;text-transform: uppercase;" class="video1" href ='<?php echo $row['Tin']['content']?>'>  <?php echo $row['Tin']['name']; ?></p>
	<?php }?>
            </ul>         
                   </div>
         
</li>
</div>