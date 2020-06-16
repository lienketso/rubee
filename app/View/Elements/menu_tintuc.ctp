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
<div id="ddsidemenubar" class="markermenu"><p class="menu_tieude"><?php echo $NEWPRODUCT?></p>
    <ul>
       <?php
        $menu = $this->requestAction('comment/get_hang');
        $i = 0;
        foreach ($menu as $row) {
            $i++;
            ?>
            <li><a href="<?php echo DOMAIN ?>danh-sach-san-pham/<?php echo $row['Hang']['id']?>/<?php echo $row['Hang']['slug'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row['Hang']["name$duoi"] ?></a></li>
            <?php
        }
        ?>
     
    </ul>
</div>
<script type="text/javascript">
    ddlevelsmenu.setup("ddsidemenubar", "sidebar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
</script>
<?php
$i = 0;
foreach ($menu as $row) {
    $i++;
    ?>
    <ul id="ddsubmenuside<?php echo $i ?>" class="ddsubmenustyle blackwhite">

    <?php $menu1 = $this->requestAction('comment/get_catproduct_id/' . $row['Hang']['id']);
    
        foreach($menu1 as $row1){ ?>
   
        <li><a href="<?php echo DOMAIN ?>danh-sach-san-pham/<?php echo $row1['Catproduct']['id']?>/<?php echo $row1['Product']['alias'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row1['Catproduct']["name$duoi"]?></a>
  

		</li>
      <?php } ?>
    </ul>
<?php } ?>





    