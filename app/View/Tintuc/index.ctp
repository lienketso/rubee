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
					<h2 id="page-title"><span>Dự án/</span></h2>
					<h1 id="page-title-sub"><?php echo $typeName['Danhmuc']["name$duoi"] ?></h3>
					<div class="cleared"></div>
				</div>
			</div>
<div class="boxmain">

 
     <table class="bg_dichvu"  border="0" cellspacing="0" cellpadding="0">
                    <?php foreach ($listProduct as $rows) { ?>
                        <div class="row_news">
                      <?php if($rows['Tintuc']['images']){?>
								 <img style="float:left;border: 1px solid #d2d1d1;padding:2px;"width="120" height="90"src="<?php echo IMAGEAD?>tintuc/<?php echo $rows['Tintuc']['images']?>">
								 <?php } else {?>
								 <?php }?>
								 <div align="justify" style="overflow:hidden;padding-left: 10px;">
                                    <a id="tenbaiviet1" href="<?php echo DOMAIN; ?>chi-tiet-tin/<?php echo $rows['Tintuc']['id']; ?>/<?php echo $rows['Tintuc']['slug'].'.html'; ?>"><?php echo $rows['Tintuc']["name$duoi"]; ?></a>
                                    <div class="content_news"> <?php echo $rows['Tintuc']["shortdes$duoi"]; ?></div>
                               
                           </div>     
						      </div> 
                      
                    <?php } ?>  
        </tr>   
                </table><tr>
                <td>
                <div class="pagination" style="text-align: center; margin: 4px auto;width: 675px;">
    <?php
        echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->numbers()." ";
        echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
    ?>
</div>
            </td>
            </tr>	
</div>