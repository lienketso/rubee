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
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN ?>css/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN ?>css/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN ?>css/ddlevelsmenu-sidebar.css" />

<script type="text/javascript" src="<?php echo DOMAIN ?>js/ddlevelsmenu.js"> </script>

<div id="ddsidemenubar" class="markermenu"><p class="menu_tieude"><?php echo $danhmuccodong?></p>
    <ul>
       <?php
        $menu = $this->requestAction('comment/menu_news');
        $i = 0;
        foreach ($menu as $row) {
            $i++;
            ?>
            <li><a href="<?php echo DOMAIN ?>tin-tuc/<?php echo $row['Catalogue']['id']?>/<?php echo $row['Catalogue']['alias'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row['Catalogue']["name$duoi"] ?></a></li>
            <?php
        }
        ?>
     
    </ul>
</div>
<script type="text/javascript">
    ddlevelsmenu.setup("ddsidemenubar", "sidebar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
</script>





    