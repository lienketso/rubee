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
<?php echo $this->Html->css(array('content', 'phantrang')); ?>
<div id="page-title-bar">
				<div class="wrap">
					<div class="overlay-bar"></div>
					<h2 id="page-title"><span>GIỚI THIỆU/</span></h2>
					<h1 id="page-title-sub"><?php echo $detailNews['Post']['name']; ?></h1>
					<div class="cleared"></div>
				</div>
			</div>
<div class="page-container">
					<div class="page-section white-bg">
						<div class="wrap">								
							<div class="content">
								      <?php echo $detailNews['Post']['content']; ?>
								<div class="cleared"></div>
							</div>
						</div>
					</div>
				</div>			