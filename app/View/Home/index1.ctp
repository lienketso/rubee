
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
         
<link type="text/css" href="<?php echo DOMAIN ?>css/phantrang.css" rel="stylesheet" /> 
<div class="boxmain">

	
					<div id="bor">
	 <?php
                $slideshow = $this->requestAction('comment/gioithieu');
                foreach ($slideshow as $row) {
                    ?>
					<div id="gioithieu">
				<h2><?php echo $row['Post']["name$duoi"]?></h2>
        <?php echo $row['Post']["shortdes$duoi"]?>
		<a href="<?php echo DOMAIN?>gioi-thieu.html" style="color:red;float: right;padding-right: 10px;">
		<?php echo $chitiet?></a>
			</div>
			<?php } ?>
			</div>
</div>
<div class="boxmain">
	<div id="bor">
<div id="tintuc1">
 <p id="td">TIN TỨC</p>
  <?php
                $new = $this->requestAction('comment/tintuc');
                foreach ($new as $row) {
                    ?>
 <a title="<?php echo $row['News']["name$duoi"] ?>" alt="tintuc" href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['News']['id'] . '/' . $row['News']['alias'] . '.html'; ?>">

 <img src="<?php echo IMAGEAD?>news/<?php echo $row['News']["images"] ?>">
</a>
 <p> 
  <h3><?php echo $row['News']["name$duoi"] ?></h3>
  <p id="ngaytao">( <?php echo $row['News']["created"] ?> )</p>
 </p>
					<?php } ?>
					<div id="tintuc">

	<ul>
	
   <?php
                $new = $this->requestAction('comment/tintucchung');
                foreach ($new as $row) {
                    ?>
					<li>
					
                                     <a title="<?php echo $row['News']["name$duoi"] ?>" alt="tintuc" href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['News']['id'] . '/' . $row['News']['alias'] . '.html'; ?>">
<?php echo $row['News']["name$duoi"] ?></a>
</li>					   
					   <?php }?>
					   <p><a href="<?php echo DOMAIN?>tin-tuc/37/tin-tuc.html" id="ctiet"><?php echo $xemthem?> +</a></p>
	</ul>
	
</div>
</div>
<div id="tintuc1">
 <p id="td">DU HỌC</p>
  <?php
                $new = $this->requestAction('comment/sukien');
                foreach ($new as $row) {
                    ?>
 <a title="<?php echo $row['News']["name$duoi"] ?>" alt="tintuc" href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['News']['id'] . '/' . $row['News']['alias'] . '.html'; ?>">

 <img src="<?php echo IMAGEAD?>news/<?php echo $row['News']["images"] ?>">
</a>
 <p> 
  <h3><?php echo $row['News']["name$duoi"] ?></h3>
    <p id="ngaytao">( <?php echo $row['News']["created"] ?> )</p>
 </p>
					<?php } ?>
					<div id="tintuc">

	<ul>
	
   <?php
                $new = $this->requestAction('comment/sukienchung');
                foreach ($new as $row) {
                    ?>
					<li>
					
                                     <a title="<?php echo $row['News']["name$duoi"] ?>" alt="tintuc" href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['News']['id'] . '/' . $row['News']['alias'] . '.html'; ?>">
<?php echo $row['News']["name$duoi"] ?></a>
</li>					   
					   <?php }?>
					    <p><a href="<?php echo DOMAIN?>tin-tuc/36/du-hoc.html" id="ctiet"><?php echo $xemthem?> +</a></p>
	</ul>
</div>
</div>
</div>
	<div id="bor">
<!--end--->
<div id="tintuc1">
 <p id="td">TUYỂN SINH</p>
					<div id="tintuc">

	<ul>
	
   <?php
                $new = $this->requestAction('comment/sukienchung');
                foreach ($new as $row) {
                    ?>
					<li>
					
                                     <a title="<?php echo $row['News']["name$duoi"] ?>" alt="tintuc" href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['News']['id'] . '/' . $row['News']['alias'] . '.html'; ?>">
<?php echo $row['News']["name$duoi"] ?></a>
</li>					   
					   <?php }?>
					    <p><a href="<?php echo DOMAIN?>tin-tuc/38/tuyen-sinh.html" id="ctiet"><?php echo $xemthem?> +</a></p>
	</ul>
</div>
</div>
<!--end--->
<div id="tintuc1">
 <p id="td">VIỆC LÀM</p>
					<div id="tintuc">

	<ul>
	
   <?php
                $new = $this->requestAction('comment/vieclam');
                foreach ($new as $row) {
                    ?>
					<li>
					
                                     <a title="<?php echo $row['News']["name$duoi"] ?>" alt="tintuc" href="<?php echo DOMAIN ?>chi-tiet-tin-tuc/<?php echo $row['News']['id'] . '/' . $row['News']['alias'] . '.html'; ?>">
<?php echo $row['News']["name$duoi"] ?></a>
</li>					   
					   <?php }?>
					   <p><a href="<?php echo DOMAIN?>tin-tuc/39/viec-lam.html" id="ctiet"><?php echo $xemthem?> +</a></p>
	</ul>
</div>
</div>
</div>
<!--end--->


</div>

