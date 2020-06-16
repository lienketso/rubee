

		      <link rel="stylesheet" href="<?php echo DOMAIN ?>css/default.css" type="text/css" media="screen"/>
                                <link rel="stylesheet" href="<?php echo DOMAIN ?>css/nivo-slider.css" type="text/css" media="screen"/>

                                <script type="text/javascript" src="<?php echo DOMAIN ?>js/jquery.nivo.slider.js"></script>
                                <script type="text/javascript">
                                    $(window).load(function () {
                                        $('#slider').nivoSlider();
                                    });
                                </script>
								
 <div id='slide' ">

                                                        <div class="slider-wrapper theme-default">
                                                            <div id="slider" class="nivoSlider">
         <?php
               $slide = $this->requestAction('comment/slidecon');
     foreach ($slide as $row) {   ?>
    
 <img style="width:1366px; height:534px;" src="<?php echo DOMAINAD . $row['Slideshow']['images'] ?>"/>
<?php } ?> 

      </div>
      </div>
                                                    </div>
