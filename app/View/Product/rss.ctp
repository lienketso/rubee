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
					<h2 id="page-title"><span>Rubee Việt Nam Rss</span></h2>
					<div class="cleared"></div>
				</div>
			</div>

<div class="wrap" id="sphome">
        <ul>
        <li class="rss"><a href="<?php echo DOMAIN?>rsslogo.php">Thiết kế logo</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rsslogo.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rssthuonghieu.php">Nhận diện thương hiệu</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rssthuonghieu.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rssbaobi.php">Thiết kế bao bì</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rssbaobi.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rssbienquangcao.php">Thiết kế biển quảng cáo</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rssbienquangcao.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rsstoroi.php">Thiết kế tờ rơi, tờ gấp</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rsstoroi.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rssbrochure.php">Thiết kế Brochure, Catalog</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rssbrochure.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rsslichtet.php">Thiệp, lịch tết</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rsslichtet.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rsswebsite.php">Thiết kế website</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rsswebsite.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rssnoithat.php">Thiết kế nội thất</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rssnoithat.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        <li class="rss"><a href="<?php echo DOMAIN?>rssbanner.php">Thiết kế Poster, Banner</a> &nbsp; &nbsp; &nbsp; » <a href="<?php echo DOMAIN?>rssbanner.php" style="font-weight:normal; color:#0000FF;">RSS <img src="<?php echo DOMAIN?>images/rss.png"/></a></li>
        </ul>
</div>