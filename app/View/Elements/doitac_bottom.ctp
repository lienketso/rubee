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
<script type='text/javascript' src='<?php echo DOMAIN?>js/PanCarousel.js' ></script>
<style type="text/css">
    .V {position: relative;
overflow: hidden;
height: 112px;
padding-top: 10px;}
</style>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">

<div style="overflow:hidden;width: 710px;margin: auto;">
<table class="mainabc">
<div style="width:710px;overflow:hidden;">
<div id="td">
<?php echo $doitac?></div>
</div>
<tr ><div>
	<td>
	<div class="V">
			
            <div id="V1">
                <?php
                $doitac = $this->requestAction('comment/getdoitac2');
                foreach ($doitac as $row) {

                        ?>
                            <div class="thumbnail quangcao2">
                                <a href="<?php echo $row['Doitac']['link'] ?>" target="_blank" rel="nofollow">
                                    <img src="<?php echo IMAGEAD ?>logo/<?php echo $row['Doitac']['images'] ?>" style="border: 1px solid #cccccb;
width: 118px;
height: 89px;
padding: 3px;
border-radius: 5px;
box-shadow: 2px 3px 5px #9f9f9f;" />
                                </a>	
                            </div>
                    <?php
               
                }
                ?>  </div></div> 
	</td></div>
</tr>
</table> </div>
<script type="text/javascript">
    var S = new zxcPanCarousel({
        mode: 'H',        // the mode, H = horizontal, V = vertical.                  (string, default = H)
        id: 'V1',         // the unique id name of the div to scroll.                 (string)
        defaultspeed: 0.5,  // (optional) the default speed to pan, 1 = slow, 5 = fast. (digits, default = 1)
        separation: 9,    // (optional) the separation between the div elements.      (digits, default = 0)
        direction: -1,    // (optional) the initial direction, 1 or -1.               (digits, default = 1)
        start: true,      // (optional) start automatically.                          (boolean, default = false = no autostart)
        panends: {
            distance: 4,     // (optional) the distance from the ends to pan.            (digits, default = parent node width/4)
            maxspeed: 5,
			duration:8000,				// (optional) the maximum speed to pan.                     (digits, default = 5)
            mouseout: true,   // (optional) restart default pan onmouseout.               (boolean, default = false = no restart)
            reverse: true     // (optional) reverse the pan direction of the ends.        (boolean, default = false = no reverse)
        }
    });
</script> 