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
					<h2 id="page-title"><span>Dịch vụ</span></h2>
					<h3 id="page-title-sub"><span>/  <?php echo $typeName['Danhmuc']["name$duoi"] ?></span></h3>
					<div class="cleared"></div>
				</div>
			</div>
<div class="boxmain">
      <div class='new-equipment'>
 <div class="noidung">
 <p style="color: #c70708;font-weight:bold;padding-bottom:10px;"><?php echo $detailNews['Tintuc']["name$duoi"]; ?></p>
            <?php echo $detailNews['Tintuc']["content$duoi"]; ?>
        </div>
		</div>
	    
<br/>
	
	<div class="title_top_news_detail">

          Các tin liên quan
				
   </div>
        <table width="100%" cellpadding="5" cellspacing="10" style="margin-left:7px;margin-bottom: 10px;">
            <?php
            $i = 0;
            foreach ($listNews as $row) {
                $i++;
                $image = 'img/tintuc/' . $row['Tintuc']['images'];
                //echo IMAGES_URL; die;
                if ($i == 1)
                    echo "<tr>";
                ?>
					  <div class="div_sp">
              
						    <div class="product1_a" style="padding-left: 40px;"><a href="<?php echo DOMAIN ?>chi-tiet-tin/<?php echo $row['Tintuc']['id'] ?>/<?php echo $row['Tintuc']['alias'].'.html' ?>">-&nbsp;&nbsp;<?php echo $row['Tintuc']["name$duoi"] ?></div>
                            </a>
                    </div>
                <?php if ($i == 4) echo "</tr>"; ?>
            <?php } ?>
            <?php if ($i == 1) echo '<td colspan="3"></td></tr>'; ?>
            <?php if ($i == 2) echo '<td colspan="2"></td></tr>'; ?>
<?php if ($i == 3) echo '<td colspan="1"></td></tr>'; ?>
        </table>
		 </div>