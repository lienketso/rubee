
<link rel="stylesheet" href="<?php echo DOMAIN ?>css/skitter.styles.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?php echo DOMAIN ?>js/btloader.min.js"></script>
<body id="s5_body">
		<script type="text/javascript">//<![CDATA[
		document.write('<style type="text/css">.s5_lr_tab_inner {-webkit-transform: rotate(-270deg);-moz-transform: rotate(-270deg);-o-transform: rotate(90deg);}</style>');
		//]]></script>
		<div id="mod_btslideshow_548" class="box_skitter mod_btslideshow" style="margin: auto;width:100%;margin: auto; height:350px;overflow: hidden;">
<ul>
                <?php
                $slideshow = $this->requestAction('comment/slidecon');
                foreach ($slideshow as $row) {
                    ?>
                        <li>
                            <div class="thumbnail quangcao">
                                
                               <img style="" src="<?php echo DOMAINAD. $row['Slideshow']['images'] ?>"/>
  </a>	     
                            </div>
                           
                        </li>
<?php } ?>
 
            </ul>

</div>
<script>

(function(){
	var libs = [
'<?php echo DOMAIN?>js/jquery-1.6.2.min.js', 
'<?php echo DOMAIN?>js/jquery.skitter.min.js',
'<?php echo DOMAIN?>js/jquery.easing.1.3.min.js',

'<?php echo DOMAIN?>js/jquery.animate-colors-min.js'

	];
	
	BT.Loader.js(libs, function(){
		jQuery.noConflict();
		loadSlideshow();
	});
})();

function loadSlideshow(){
		jQuery('#mod_btslideshow_548').skitter({
		width:1000,
height:320,
animation: 'random',
numbers: true,
		structure:			
			'<a href="#" class="prev_button">prev</a>' +
			'<a href="#" class="next_button">next</a>' +
			'<span class="info_slide"></span>' +
			'<div class="container_skitter">' +
				'<div class="image">' +
					'<a href="/"><img class="image_main" /></a>' +
					'<div class="label_skitter"></div>' +
				'</div>' +
			'</div>',
		velocity: 1.3,
		interval: 2500,
		thumb_width: '1000px',
		thumb_height: '313px',
		caption: 'bottom',
		caption_width: '250',
		navigation: 0,
		fullscreen: false
	});
};
</script>		
	

</body>