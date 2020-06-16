	
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
  <script>
	$(function(){
		$('.video1').click(function(){
		var bien= $(this).attr('href');//alert(bien);
		
		$('.list').html(bien);
		});
		
	})
</script>
<?php echo $this->Html->css('content_left'); ?>
<div id="content_left" style="">
<div class="lang">

 <form action="<?php echo DOMAIN ?>tim-kiem.html" method="POST" style="height: 28px;
width: 300px;">
		 <input type="text" style="width: 181px;
height: 24px;margin-right: 5px;
border: 1px solid #c6c7c9;
float: left;"name="txtsearch" id="txtdangky" value="" onclick="this.value=''" onblur="if (this.value == '')  {this.value = '';}"/>
				<input type="image" src="<?php echo DOMAIN; ?>images/btn_timkiem.png"  border="0" style="border: none;height: 28px;"/>

           </form> 
</div>
 	<div id="hotrotructuyen">
			<h2>Hỗ trợ Online</h2>
			      	<?php
            $support = $this->requestAction('comment/support');
            foreach ($support as $row) {
                ?>
				<div class="livechat">
				<p style="font-weight: bold;
padding-left: 5px;"><?php echo $row['Support']['name']; ?> : <span style="font-size:15px;"><?php echo $row['Support']['telephone']; ?></span></p>
				<a  style="float: left;" href="skype:<?php echo $row['Support']['skype']; ?>?call"><img src="<?php echo DOMAIN?>images/img_sky.gif" style="border: none;" width="60"  alt="My status" /></a>
								
			 <a style="padding-left: 3px;" border="0" class="a-ya" href="ymsgr:sendIM?<?php echo $row['Support']['yahoo']; ?>">
                        <img style="margin-top: 4px;" class="img-ya" width="75" height="20" border="0" src="http://opi.yahoo.com/online?u=<?php echo $row['Support']['yahoo']; ?>&amp;m=g&amp;t=2&amp;l=us"/>
                    </a>
								</div>
								<?php } ?>
			</div>
			<div class="list_sp">
				<div class="tieude_dm"><p>SỰ KIỆN</p></div>
	  <div class="old1-news">
	  <ul>
      <?php
                    $listtin = $this->requestAction('comment/duannoibat');
						 foreach ($listtin as $rows) {
					?>
      <li>
	  <img style="float: left;
padding-right: 7px;" width="82" height="72" src="<?php echo IMAGEAD?>news/<?php echo $rows['News']['images'] ?>">
	  <a title="<?php echo $rows['News']['name'] ?>" href="<?php echo DOMAIN; ?>chi-tiet-tin-tuc/<?php echo $rows['News']['id']; ?>/<?php echo $rows['News']['alias'].".html"?>">
	  <?php echo $rows['News']["name$duoi"] ?></a></li>
      <?php } ?>
	  </ul>
    </div>			
			</div>
			<div class="list_sp">
			<div class="tieude_dm"><p>LIKE US</p></div>
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/letco.vn?ref=ts&fref=ts" data-width="260px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
			</div>
<div class="list_sp">
			<div class="tieude_dm"><p>VIDEO</p></div><?php $row1 = $this->requestAction('comment/setting');?>
			<?php echo $row1['Setting']['youtube'] ?>
</div>			

			
		
			
			
	
</div> <script src="<?php echo DOMAIN ?>js/jcarousellite_1.0.1c41.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function($) {
        $(".newsticker-jcarousellite1").jCarouselLite({
            vertical: true,
            hoverPause:true,
            visible: 4,
            auto:500,
            speed:3000,
            liWidth: 207,
            liHeight: 243
        });
    });
</script>