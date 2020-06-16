
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

<div id="ddsidemenubar" class="markermenu">
    <ul>
       <?php
        $menu = $this->requestAction('comment/menu_left_ca');
        $i = 0;
        foreach ($menu as $row) {
            $i++;
            ?>
            <li><a title="<?php echo $row['Catproduct']['name']?>" alt="<?php echo $row['Catproduct']['name']?>" href="<?php echo DOMAIN ?>ds-sp/<?php echo $row['Catproduct']['id']?>/<?php echo $row['Catproduct']['alias'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row['Catproduct']["name$duoi"] ?></a></li>
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

    <?php $menu1 = $this->requestAction('comment/menu_left_ca/' . $row['Catproduct']['id']);
    
        foreach($menu1 as $row1){ ?>
   
        <li><a href="<?php echo DOMAIN ?>ds-sp/<?php echo $row1['Catproduct']['id']?>/<?php echo $row1['Catproduct']['alias'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row1['Catproduct']["name$duoi"]?></a>
    <ul>
    <?php $menu2 = $this->requestAction('comment/menu_left_ca/' . $row1['Catproduct']['id']);

        foreach($menu2 as $row2){ ?>
        <li><a href="<?php echo DOMAIN ?>ds-sp/<?php echo $row2['Catproduct']['id']?>/<?php echo $row2['Catproduct']['alias'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row2['Catproduct']["name$duoi"]?></a>
		<ul>

    <?php $menu3 = $this->requestAction('comment/menu_left_ca/' . $row2['Catproduct']['id']);
        foreach($menu3 as $row3){ ?>
        <li><a href="<?php echo DOMAIN ?>ds-sp/<?php echo $row3['Catproduct']['id']?>/<?php echo $row3['Catproduct']['alias'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row3['Catproduct']["name$duoi"]?></a>
			<ul>

    <?php $menu4= $this->requestAction('comment/menu_left_ca/' . $row3['Catproduct']['id']);
        foreach($menu4 as $row4){ ?>
        <li><a href="<?php echo DOMAIN ?>ds-sp/<?php echo $row4['Catproduct']['id']?>/<?php echo $row4['Catproduct']['alias'].'.html'?>" rel="ddsubmenuside<?php echo $i; ?>"><?php echo $row4['Catproduct']["name$duoi"]?></a>
		</li>
      <?php } ?>

	  
    </ul>
		
		</li>
      <?php } ?>

	  
    </ul>
		
		</li>
      <?php } ?>

    </ul>

		</li>
      <?php } ?>
    </ul>
<?php } ?>





    