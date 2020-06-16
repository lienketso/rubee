<div id="slide">    
    <link rel="stylesheet" href="<?php echo DOMAIN ?>Slidenivo/css/nivo-slider.css" type="text/css" media="screen" />
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <?php 
                    foreach($slideshow as $slideshows){?>
                <a href="<?php echo $slideshows['Slideshow']['link'] ?>"><img src="<?php echo DOMAINAD.$slideshows['Slideshow']['images'] ?>" data-thumb="<?php echo DOMAINAD.$slideshows['Slideshow']['images'] ?>" alt="" title="<?php echo $slideshows['Slideshow']['name'] ?>" /></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--<script type="text/javascript" src="<?php echo DOMAIN ?>files/lishowslider/js/jquery-1.7.1.min.js"></script>-->
    <script type="text/javascript" src="<?php echo DOMAIN ?>Slidenivo/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
</div>