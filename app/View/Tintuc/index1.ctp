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

<div class="boxmain" style=" overflow:hidden;padding-bottom: 20px;width: 588px;
float: left;"><?php echo $this->element('support') ?>
<div class="title2"><h2><p style="text-align:left;padding-left:15px;"><?php echo $typeName['Danhmuc']["name"]; ?></p></h2></div>	
     <table class="bg_dichvu"  border="0" cellspacing="0" cellpadding="0">
                    <?php foreach ($listProduct as $rows) { ?>
                        <tr>
                            <td class="titleNews1" height="30"></td>
                        </tr>
                        <tr>
                            <td><div align="justify">
                                    <?php if ($rows['Tintuc']['images'] != "") { ?>
      <div class="abc"><img  title="<?php echo $rows['Tintuc']["name$duoi"]; ?>" alt="image" src="<?php echo IMAGEAD; ?>tintuc/<?php echo $rows['Tintuc']['images']; ?>" width="161" height="113" class="bdimg" /></div>
                                    <?php } ?></div>
                                     </td>
								 <td><div align="justify" style="overflow:hidden;width: 378px;">
                                    <a title="<?php echo $rows['Tintuc']["name$duoi"]; ?>" alt="name"id="at"href="<?php echo DOMAIN; ?>chi-tiet/<?php echo $rows['Tintuc']['id']; ?>/<?php echo $rows['Tintuc']['alias'].'.html'; ?>"><?php echo $rows['Tintuc']["name$duoi"]; ?></a></br></br>
                                    <div id="noidung"> <?php echo $rows['Tintuc']["shortdes$duoi"]; ?></div>
                                    <div align="right" class="detail"><a title="Chi tiết" alt="name"style="color: #005757;"href="<?php echo DOMAIN; ?>chi-tiet/<?php echo $rows['Tintuc']['id'] ?>/<?php echo $rows['Tintuc']['alias'].'.html'; ?>"><?php echo $chitiet ?></a></div>
                                </td>
                        </tr>
                        <tr>
                            <td class="gachngan"></td>
                        </tr>
                    <?php } ?>    
        </tr>  <td>
                <div class="pagination" style="float: right;text-align: center; margin: 4px auto;">
    <?php
        echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->numbers()." ";
        echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
    ?>
</div>
            </td>
                </table>	
</div>