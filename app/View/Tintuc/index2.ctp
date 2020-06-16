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
<div class="boxmain" style=" overflow:hidden;padding-bottom: 40px;width: 550px;
float: left;"><?php echo $this->element('slide') ?>
<p><div class="title_tintuc"><p>DỊCH VỤ</p></div>
     <table class="bg_dichvu"  border="0" cellspacing="0" cellpadding="0">
                    <?php foreach ($listProduct as $rows) { ?>
                        <tr>
                            <td class="titleNews1" height="30"></td>
                        </tr>
                        <tr>
                            <td><div align="justify">
                                    <?php if ($rows['Tintuc']['images'] != "") { ?>
                                        <div class="dichvu_1"><a href="<?php echo DOMAIN; ?>chi-tiet-dich-vu/<?php echo $rows['Tintuc']['id']; ?>"><img src="<?php echo IMAGEAD; ?>tintuc/<?php echo $rows['Tintuc']['images']; ?>" width="161" height="113" class="bdimg" /></a></div>
                                    <?php } ?></div>
                                     </td>
								 <td><div align="justify" style="overflow:hidden;width: 350px;">
                                    <a style="color: #4C0303;font-weight: bold;
font-size: 14px;" href="<?php echo DOMAIN; ?>chi-tiet-dich-vu/<?php echo $rows['Tintuc']['id']; ?>"><?php echo $rows['Tintuc']["name$duoi"]; ?></a></br></br>
                                    <div class="content_dichvu"> <?php echo $rows['Tintuc']["shortdes$duoi"]; ?></div>
                                    <div align="right" class="detail"><a style="color: #005757;"href="<?php echo DOMAIN; ?>chi-tiet-dich-vu/<?php echo $rows['Tintuc']['id']; ?>"><?php echo $chitiet ?></a></div>
                                </td>
                        </tr>
                        <tr>
                            <td class="gachngan"></td>
                        </tr>
                    <?php } ?>       
        </tr>
                </table>
				<br/><div class="pt">
            <div class="pt-pagi">
<?php echo $this->Paginator->numbers(); ?>
            </div><!-- End pt-pagi-->
        </div><!-- End pt-->		
</div>