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
					<h2 id="page-title"><span>Dịch vụ</span></h2>
					<h3 id="page-title-sub"><span> / <?php echo $typeName['Cataloguesrec']["name"]; ?></span></h3>
					<div class="cleared"></div>
				</div>
			</div>
<div class="boxmain" >
    <div class="div_content" >
         <?php
    foreach ($listRecruitment as $row) {
        ?>
	
  
					<div class="pro">
			<a  title="<?php echo $row['Recruitment']["name"]; ?>" href="<?php echo DOMAIN?>danh-sach-anh/<?php echo $row['Recruitment']["id"]; ?>/<?php echo $row['Recruitment']["alias"]; ?>">		
		<div class="row-img">
		<img  src="<?php echo IMAGEAD ?>recruitment/<?php echo $row['Recruitment']["images"]; ?>">
</div>
		<p>		
<?php echo $row['Recruitment']["name$duoi"]; ?></p>

</a>
</div>
                <div class="clear"></div>
             <?php } ?>
			  
        </div><!--end .new-equipment--><!-- <div class="pt">
            <div class="pt-pagi">
                <?php echo $this->Paginator->numbers(); ?>
            </div>
        </div>-->
    </div>
	