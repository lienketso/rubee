<div class="boxright"> <img src="<?php echo DOMAIN; ?>images/intheu_17.png" width="205"> </div>
<div class="boxright online"> 2 </div>
<div class="boxright" style="background: #FFF; padding: 4px 0px;">
<div style="padding-left: 4px;"><img src="<?php echo DOMAIN; ?>images/intheu_34.png" width="205"></div>
<marquee direction="up" height="400" scrollamount="3" onMouseOver="stop()" onMouseOut="start()">
<?php
$spmoi = $this->requestAction('/comment/spmoi');
foreach($spmoi as $rows) {
?>
<div align="center" style="margin-bottom: 4px;">
<a href="<?php echo DOMAIN; ?>chi-tiet-san-pham/<?php echo $rows['Product']['id']; ?>/<?php echo $this->Common->gachnoi($rows['Product']['name']); ?>.html"><img src="<?php echo IMAGEAD; ?>product/<?php echo $rows['Product']['images']; ?>" width="200" /></a>
</div>
<?php } ?>
</marquee>
</div>