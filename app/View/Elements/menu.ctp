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
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>css/ddsmoothmenu.css" />

	<script type="text/javascript" src="<?php echo DOMAIN?>js/ddsmoothmenu.js"></script>

<script type="text/javascript">
    ddsmoothmenu.init({
        mainmenuid: "smoothmenu3",
        orientation: 'h',
        classname: 'ddsmoothmenu3',
        contentsource: "markup"
    })
</script>

<div class="navbar">
    <div id="smoothmenu3" class="ddsmoothmenu3">
        <ul>
          <li>
               <a href="<?php echo DOMAIN ?>home" class="sf-with-ul" ><?php echo $HOME?></a>
            </li>
            <li>
                <a href="<?php echo DOMAIN ?>gioi-thieu.html" class="sf-with-ul"><?php echo $ABOUT?></a>                
		<!--		<ul>
				<?php $menuca = $this->requestAction('comment/quanlygioithieu');

                foreach ($menuca as $rowca) {
                    ?>
					
				         <li><a href="<?php echo DOMAIN ?>chi-tiet-gioi-thieu/<?php echo $rowca['Post']['id'] ?>/<?php echo $rowca['Post']['alias'].'.html' ?>" class="sf-with-ul"><?php echo $rowca['Post']["name$duoi"] ?></a></li>
         
					<?php } ?>
				</ul>-->
			
			</li>
            <li>
                <a href="<?php echo DOMAIN; ?>san-pham" class="sf-with-ul">Sản phẩm</a>
                <ul>
			
			<?php $menu1 = $this->requestAction('comment/menu_left_ca');
$i=0;
                foreach ($menu1 as $row1) {$i++;
                    ?>
			
					  <li><a href="<?php echo DOMAIN ?>ds-sp/<?php echo $row1['Catproduct']['id'] ?>/<?php echo $row1['Catproduct']['alias'].'.html' ?>" class="sf-with-ul">
					  <?php echo $row1['Catproduct']["name$duoi"] ?></a>
				
						<?php } ?>
                </ul>
            </li>
			<?php  
				$product = $this->requestAction('comment/tinchung');
				$i=1;
                foreach ($product as $row) {
				$i++;
				?>

                    <li>
						<a href="<?php echo DOMAIN ?>tin-tuc/<?php echo $row['Catalogue']['id'] ?>/<?php echo $row['Catalogue']['alias'].'.html' ?>" class="sf-with-ul">
						<?php echo $row['Catalogue']["name$duoi"] ?></a>
					
						<ul>
							  <?php $menu1 = $this->requestAction('comment/tinchung/' . $row['Catalogue']['id']);

                foreach ($menu1 as $row1) {
                    ?>
					   <li>
						<a href="<?php echo DOMAIN ?>tin-tuc/<?php echo $row1['Catalogue']['id'] ?>/<?php echo $row1['Catalogue']['alias'].'.html' ?>" class="sf-with-ul">
						<?php echo $row1['Catalogue']["name$duoi"] ?></a>
					</li>
					<?php } ?>
						</ul>
					</li>

                    <?php
                }
                ?>
			<!--	<li>
                <a href="<?php echo DOMAIN; ?>thu-vien-anh.html" class="sf-with-ul">Thư viện ảnh</a>
            </li>
            <li>
                <a href="<?php echo DOMAIN; ?>lien-he.html" class="sf-with-ul"><?php echo $LIENHE?></a>
            </li>-->
        </ul>

    </div>
</div>