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
					<h1 id="page-title"><span><?php echo $detailNews['Product']["name$duoi"] ?></span></h1>
					<div class="cleared"></div>
				</div>
			</div>
<div class="wrap" id="sphome">
				<div class="content">
					<div class="big-column left">	
           
                        
						<div class="project-single-content">
                        <!-- slider --!>
                            <script type="text/javascript" src="<?php echo DOMAIN?>js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="<?php echo DOMAIN?>js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo DOMAIN?>js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <div style="position: relative; width: 100%; background-color: #003399; overflow: hidden;">
        <div style="position: relative; left: 10%; width: 5000px; text-align: center; margin-left: -2500px;">
            <!-- Jssor Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 980px; height: 400px;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px;
                    height: 400px; overflow: hidden;">
                    
                    <div>
         
                        <img src="https://lh6.googleusercontent.com/-u0V7G_fgSt0/VCon9KxQGrI/AAAAAAAAAVU/umLomW_lFVY/w628-h475-no/devote5.jpg" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="https://lh6.googleusercontent.com/-u0V7G_fgSt0/VCon9KxQGrI/AAAAAAAAAVU/umLomW_lFVY/w628-h475-no/devote5.jpg" />
                    </div>
                    <div>
 
                        <img src="https://lh6.googleusercontent.com/-R8nrm0YSwqh2q7HBFarsnmUxIt_m1DRJ3dchGenUCw=w628-h475-no" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="https://lh6.googleusercontent.com/-R8nrm0YSwqh2q7HBFarsnmUxIt_m1DRJ3dchGenUCw=w628-h475-no" />
                    </div>
                    <div>
   
                        <img src="https://lh6.googleusercontent.com/-R8nrm0YSwqh2q7HBFarsnmUxIt_m1DRJ3dchGenUCw=w628-h475-no" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="https://lh6.googleusercontent.com/-R8nrm0YSwqh2q7HBFarsnmUxIt_m1DRJ3dchGenUCw=w628-h475-no" />
                    </div>
                    
                </div>
                <!-- Arrow Navigator Skin Begin -->
                <style>
                    /* jssor slider arrow navigator skin 07 css */
                    /*
                    .jssora07l              (normal)
                    .jssora07r              (normal)
                    .jssora07l:hover        (normal mouseover)
                    .jssora07r:hover        (normal mouseover)
                    .jssora07ldn            (mousedown)
                    .jssora07rdn            (mousedown)
                    */
                    .jssora07l, .jssora07r, .jssora07ldn, .jssora07rdn {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url(../img/a07.png) no-repeat;
                        overflow: hidden;
                    }

                    .jssora07l {
                        background-position: -5px -35px;
                    }

                    .jssora07r {
                        background-position: -65px -35px;
                    }

                    .jssora07l:hover {
                        background-position: -125px -35px;
                    }

                    .jssora07r:hover {
                        background-position: -185px -35px;
                    }

                    .jssora07ldn {
                        background-position: -245px -35px;
                    }

                    .jssora07rdn {
                        background-position: -305px -35px;
                    }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora07l" style="width: 50px; height: 50px; top: 123px;
                    left: 8px;"></span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora07r" style="width: 50px; height: 50px; top: 123px;
                    right: 8px"></span>
                <!-- Arrow Navigator Skin End -->
                <!-- ThumbnailNavigator Skin Begin -->
                <div u="thumbnavigator" class="jssort04" style="position: absolute; width: 600px;
                    height: 60px; right: 0px; bottom: 0px;">
                    <!-- Thumbnail Item Skin Begin -->
                    <style>
                        /* jssor slider thumbnail navigator skin 04 css */
                        /*
                        .jssort04 .p            (normal)
                        .jssort04 .p:hover      (normal mouseover)
                        .jssort04 .pav          (active)
                        .jssort04 .pav:hover    (active mouseover)
                        .jssort04 .pdn          (mousedown)
                        */
                        .jssort04 .w, .jssort04 .pav:hover .w {
                            position: absolute;
                            width: 60px;
                            height: 30px;
                            border: #0099FF 1px solid;
                        }

                        * html .jssort04 .w {
                            width: /**/ 62px;
                            height: /**/ 32px;
                        }

                        .jssort04 .pdn .w, .jssort04 .pav .w {
                            border-style: solid;
                        }

                        .jssort04 .c {
                            width: 62px;
                            height: 32px;
                            filter: alpha(opacity=45);
                            opacity: .45;
                            transition: opacity .6s;
                            -moz-transition: opacity .6s;
                            -webkit-transition: opacity .6s;
                            -o-transition: opacity .6s;
                        }

                        .jssort04 .p:hover .c, .jssort04 .pav .c {
                            filter: alpha(opacity=0);
                            opacity: 0;
                        }

                        .jssort04 .p:hover .c {
                            transition: none;
                            -moz-transition: none;
                            -webkit-transition: none;
                            -o-transition: none;
                        }
                    </style>
                    <div u="slides" style="bottom: 25px; right: 30px;">
                        <div u="prototype" class="p" style="position: absolute; width: 62px; height: 32px; top: 0; left: 0;">
                            <div class="w">
                                <div u="thumbnailtemplate" style="width: 100%; height: 100%; border: none; position: absolute; top: 0; left: 0;"></div>
                            </div>
                            <div class="c" style="position: absolute; background-color: #000; top: 0; left: 0">
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- ThumbnailNavigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">javascript</a>
            </div>
            <!-- Jssor Slider End -->
        </div>
    </div>
                        
                        
                        <!-- end --!>
                        
							<?php echo $detailNews['Product']["content$duoi"] ?>
							</div>
						<!-- End Project Details-->
							
						
						<div class="project-relatives">
							<div class="project-relative-title">
								<?php echo $sanphamkhac ?>								
							</div>
							 <?php
				$i=0;
                foreach ($listProduct as $row) {
				$i++;
                    ?>	
							<div class="project_relative_column">
                            
								<div class="project-cell">
									<div class="project-cell-thumb">
										<div class="project-cell-thumb-window">
											<a href="single-project.html">
												<img id="imgview" alt="project image" src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>">
											</a>
                                            <a title="<?=$row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']['id']?>/<?php echo $row['Product']['alias'].'.html'?>">
											<div class="project-cell-bg"></div>
                                  
											<div class="project-cell-hover">
												<div class="project-cell-title">
													<a title="<?=$row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']['id']?>/<?php echo $row['Product']['alias'].'.html'?>"><?php echo $row['Product']["name$duoi"]?></a>
												</div>
												<!--<div class="project-cell-category">
													<a href="project-category.html" rel="tag">Graphic Design</a> / 
													<a href="project-category.html" rel="tag">Mobile Design</a> / 
													<a href="project-category.html" rel="tag">Web Design</a>
												</div>-->
											</div>
                                        
                                            </a>
										</div>
									</div>
								</div>
                            
							</div>
				<?php } ?>
						
							<div class="cleared"></div>																
							
						
					
						</div>
						</div>
					<!-- End Big Column -->
				
					<div class="project-small-column right">
						<div class="sidebar-widget">
							<div class="sidebar-widget-title">
								<span><?php echo $gioithieusanpham?></span>
							</div>
							<div class="sidebar-widget-content">
								<?php echo $detailNews['Product']["shortdes$duoi"] ?>
							</div>
						</div>
						<!--<div class="sidebar-widget project-category-widget">
							<div class="sidebar-widget-title">
								<span>Category</span>
							</div>
							<div class="sidebar-widget-content">
								<a href="project-category.html" rel="tag">Interaction Design</a> 
								<a href="project-category.html" rel="tag">Mobile Design</a>							
							</div>
						</div>-->
					</div><!-- End Small Column -->
					<div class="cleared"></div>
				</div>
				
			</div>