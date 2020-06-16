<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title><?php if (isset($title_for_layout)) {echo $title_for_layout;}?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="alternate" hreflang="vi" href="http://rubee.com.vn/"/>
	  <meta name="robots" content="index, follow" />
      <link rel="icon" type="image/ico" href="http://rubee.com.vn/favicon.ico"/>
     <meta name="google-site-verification" content="JKl2PEpHNeX166dNdJ-_NksIHNWNFiadC4VWM1e_LlQ" />
				<?php
        if (isset($keywords_for_layout)) {
            echo "<meta name='keywords' content='" . $keywords_for_layout . "' /> ";
        }
        if (isset($description_for_layout)) {
            echo "<meta name='description' content='" . $description_for_layout . "' />";
        }
        ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52977521-2', 'auto');
  ga('send', 'pageview');

</script>
 <script language="javascript" type="text/javascript" src="<?php echo DOMAIN?>js/jquery-1.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="<?php echo DOMAIN?>js/polyad.js"></script>
        <link href="<?php echo DOMAIN?>js/css1.css" rel="stylesheet" type="text/css"/>
	<link rel='stylesheet' href='<?php echo DOMAIN?>js/revslider/css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo DOMAIN?>js/revslider/css/captions.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo DOMAIN?>css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo DOMAIN?>css/responsive.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo DOMAIN?>css/standard.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo DOMAIN?>js/flex-slider/flexslider.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo DOMAIN?>css/color.css' type='text/css' media='all' />
	<script type="text/javascript" src="<?php echo DOMAIN ?>js/jquery.min.js"></script>
	<script type='text/javascript' src='<?php echo DOMAIN?>js/jquery-1.7.2.min.js'></script>
	<script type='text/javascript' src='<?php echo DOMAIN?>js/jquery-ui-1.8.20.custom.min.js'></script>
	
	<script type='text/javascript' src='<?php echo DOMAIN?>js/revslider/js/jquery.themepunch.plugins.min.js'></script>
	<script type='text/javascript' src='<?php echo DOMAIN?>js/revslider/js/jquery.themepunch.revolution.min.js'></script>
	<script type='text/javascript' src='<?php echo DOMAIN?>js/script.js'></script>
	<script type='text/javascript' src='<?php echo DOMAIN?>js/jquery.easing.1.3.js'></script>
	<script type='text/javascript' src='<?php echo DOMAIN?>js/jquery.isotope.min.js'></script>
	<script type='text/javascript' src='<?php echo DOMAIN?>js/flex-slider/jquery.flexslider-min.js'></script>

</head>
<body >	
	<div id="background" style="background-color:white">
		<div id="back_top"></div>
		<div id="page">
		<?php echo $this->element('header') ?>
			<!-- End Header -->
									
			
				<?php echo $this->element('slideshow') ?>	
			
				
			<div id="body">				
				  <?php echo $content_for_layout; ?>
			</div>
			 <?php echo $this->element('footer') ?>
			<!-- End Footer -->
			<div id="footer-bottom">
			<div class="wrap">
			 <?php
$settings = $this->requestAction('comment/setting');
?>
<div id="lienhe_footer"><?php echo $settings['Setting']['chuchay']; ?></div>
				<div class="wrap" >	
		
					<div id="footer-right">
						<a class="social social-behance" href="#">behance</a>
						<a class="social social-deviantart" href="#">deviantart</a>
						<a class="social social-dribbble" href="#">dribbble</a>
						<a class="social social-digg" href="#">digg</a>
						<a class="social social-facebook" href="http://www.chuyenprofile.com/thiet-ke-profile" title="thiết kế profile" target="_blank">thiết kế profile</a>
						<a class="social social-forrst" href="#">forrst</a>
                        <a class="social social-twitter" style="margin-top: 10px;" href = "https://plus.google.com/107988204174191711274?rel=author">Rubee Việt Nam</a>
					</div>
					<div class="cleared"></div>
				</div></div>
			</div><!-- End Footer Bottom -->
		</div><!-- End Page -->
	</div><!-- End Site Background -->
</body>
</html>