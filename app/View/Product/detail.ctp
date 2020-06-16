<?php 
if($cat_id == 274){
    ?>
     
 <link rel="stylesheet" type="text/css" href="/font/Font-Awesome-master/css/font-awesome.min.css">

 <div class="wrap">
<div class="contente_detail_pro">
    <div class="pop_detai">
        <div class="left_pop">
            <?php echo $detailNews['Product']["content"];?>
        </div>
        <div class="right_pop">
            <h2><?php echo $detailNews['Product']["name"];?></h2>
            <div class="description">
                <?php echo $detailNews['Product']["shortdes"];?>
            </div>
            <div class="view_date">
                <i class="fa fa-eye" aria-hidden="true"></i><span><?php echo $detailNews['Product']["view"];?></span>
                <i class="fa fa-calendar" aria-hidden="true"></i><span> <?php echo date('d/m/Y',strtotime($detailNews['Product']["created"]));?></span>
            </div>
            <a class="btn_tuvan"><img src="/thietkebaobi/icon_phone.jpg">Tư vấn cùng chuyên gia</a>
            <div class="left_addthis">
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-595af3e281b6800c"></script> 
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
@font-face {
        font-family: 'RobotoCondensedBold';
        src: url('/font/roboto/RobotoCondensed-Bold.ttf');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'RobotoCondensedRegular';
        src: url('/font/roboto/Roboto-Regular.ttf');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'Roboto-Black';
        src: url('/font/roboto/Roboto-Black.ttf');
        font-weight: normal;
        font-style: normal;
    }
.contente_detail_pro{
    padding-top:75px;
    margin-bottom: 50px;
}
.pop_detai{
    background-color: #fafbfc;
    overflow: hidden;
    width: 100%;
    position: relative;
}
.left_pop{
    width:70%;
    float:left;
    padding-top: 25px;
}
.left_pop img{
    width: 100% !important;
}
.right_pop{
    width: 30%;
    float:left;
    padding-left:20px;
    padding-right:40px;
    padding-top:15px;
}
.btn_tuvan{
    width: 100%;
    height: 40px;
    background-color: #29baa0;
    display: block;
    color:#fff;
    text-align: center;
    text-transform: uppercase;
    line-height: 40px;
    font-family: 'RobotoCondensedRegular' !important;
    margin-top: 70px;
    cursor:pointer;
}
.btn_tuvan:hover{
    background-color: #08af92;
}
.btn_tuvan img{
    margin-right:10px;
}
.btn_close{
    position: absolute;
    right: 20px;
}
.right_pop h2{
    font-size: 16px;
    text-transform: uppercase;
    line-height: 24px;
    padding-top: 30px;
    border-bottom: 2px solid #eaecee;
    font-family: 'RobotoCondensedBold' !important;
    color: #414042;
    margin-bottom: 10px;
}
.right_pop h2:before{
    content: "";
    width: 80px;
    height: 5px;
    background-color: #27b999;
    position: absolute;
    margin-top: -20px;
}
.right_pop .infomation h3{
    text-transform: uppercase;
    font-size: 14px;
    line-height: 20px;
    margin-top: 10px;
    margin-bottom: 0px;
    padding-bottom: 0px;
    padding-top: 0px;
    font-family: 'RobotoCondensedBold' !important;  
    color:#414042;  
}  

.right_pop .infomation p.company{
       text-transform: uppercase;
    font-size: 14px;
    font-weight: normal;
    line-height: 20px;
    margin-top: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
    font-family: 'RobotoCondensedRegular' !important;
}
.right_pop .infomation,.right_pop .description{
    border-bottom: 2px solid #eaecee;
    margin-bottom: 15px;
    font-family: 'RobotoCondensedRegular' !important;
    padding-bottom: 15px;
}
.right_pop .description p{
    font-size: 14px;
    line-height: 18px;
    padding-bottom: 15px;
    font-family: 'RobotoCondensedRegular' !important;
}
.right_pop .left_addthis{
   margin-top:30px;
}
.view_date{
    width: 100%;
    height: 40px;
    background-color: #f1f1f2;
    color:#333;
    font-size: 12px;
    line-height: 40px;
}
.view_date span{
    margin-right: 40px;
    margin-left: 10px;
}
</style>
    <?php
}else{
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
					<h1 id="page-title"><span><?php echo $detailNews['Product']["name$duoi"] ?></span> </h1>
					<h3 id="page-title-sub" style="float: right; padding-right: 50px;"><span>
                    <div class="sidebar-widget widget_search">	
							<div class="search-form">
								<?php echo $this->Form->create(null, array('url' => DOMAIN . 'tim-kiem.html', 'type' => 'post', 'name' => 'frm1')); ?>
									<input type="text" placeholder="Tìm kiếm sản phẩm" value="" id="field2c" name="txtsearch" class="search-input">
									<input type="submit" value="Tìm kiếm" id="searchsubmit" name="submit" class="search-button">
								<?php echo $this->Form->end(); ?>
							</div>
						</div>
                    </h3>
                    <div class="cleared"></div>
				</div>
			</div>
<div class="wrap" id="sphome">
				<div class="content">
					<div class="big-column left">	
           
                        
						<div class="project-single-content">
                        <!-- slider --!>
                            
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
    
    <?php
          $str = $detailNews['Product']["shortdes_eg"];
          if(strlen($str)>0)
                    {
    ?>
    
    <div id="slidedetal" style="position: relative; width: 100%; overflow: hidden; padding-bottom: 20px;">
        <div style="position: relative; left: 10%; width: 5000px; text-align: center; margin-left: -2500px;">
            <!-- Jssor Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 90px; width: 980px; height: 600px;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 90px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(../images/icon/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1000px;
                    height: 650px; overflow: hidden;">
                    
                    
                    <?php
                    $str = $detailNews['Product']["shortdes_eg"];
                    $str2arr = explode(',', $str);
              
                    for ($i = 1; $i < count($str2arr); $i++)
                    {
                    
                        ?>
                        <div >
                        <img alt="<?php echo $detailNews['Product']["name"].' '.$i.' đẹp'?>" src="<?php echo  $str2arr[$i];?>" style="position: absolute; top: 23px; left: 340px; width: 662px; height: 475px;" />
                        <img u="thumb" alt="<?php echo $detailNews['Product']["name"].' '.$i.' chuyên nghiệp'?>" src="<?php echo  $str2arr[$i];?>" />
                         </div>
                    <?php
                    }
                    ?>
            
                        
                   

                    
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
                        background: url(http://rubee.com.vn/images/icon/a02.png) no-repeat;
                        overflow: hidden;
                        top: 220px!important;
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
                    left: 350px;"></span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora07r" style="width: 50px; height: 50px; top: 220px!important;
                    right: -10px"></span>
                <!-- Arrow Navigator Skin End -->
                <!-- ThumbnailNavigator Skin Begin -->
                <div u="thumbnavigator" class="jssort04" style="position: absolute; width: 600px;
                    height: 130px; right: 0px; bottom: 0px; top: 495px;">
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
                            width: 130px;
                            height: 100px;
                            border: #0099FF 1px solid;
                        }

                        * html .jssort04 .w {
                            width: /**/ 130px;
                            height: /**/ 100px;
                        }

                        .jssort04 .pdn .w, .jssort04 .pav .w {
                            border-style: solid;
                        }

                        .jssort04 .c {
                            width: 130px;
                            height: 100px;
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
                        .left_addthis{
                            width:60%;
                            float:left;
                        }
                        .right_view{
                            width:40%;
                            float:left;
                        }
                        .row_share{
                            margin-bottom:15px;
                        }
                        @media only screen and (max-width: 768px) {
		
                            .right_view,.left_addthis{
                                width:100%;
                                float:none;
                            }
                		}
                    </style>
                    <div u="slides" style="bottom: 25px; left: -40px;">
                        <div u="prototype" class="p" style="position: absolute; width: 130px; height: 100px; top: 45px; left: 0;">
                            <div class="w" style="width: 130px; height: 100px;">
                                <div u="thumbnailtemplate" style="width: 130px; height: 100px; border: none; position: absolute; top: 0px; left: 0;"></div>
                            </div>
                            <div class="c" style="position: absolute; background-color: #000; left: 0">
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- ThumbnailNavigator Skin End -->
            </div>
            <!-- Jssor Slider End -->
        </div>
    </div>
    <?php }?>
                        
                        
                        <!-- end --!>
                        
							<?php echo $detailNews['Product']["content$duoi"] ?>
							</div>
						<!-- End Project Details-->
							
                        <div class="row_share">
                                    <div class="left_addthis">
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-595af3e281b6800c"></script> 
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                        <div class="right_view">
                            	<p><strong>Số lần xem : <?php echo $detailNews['Product']["view"] ?></strong></p>
                        </div>
                        </div>
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
											<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']['id']?>/<?php echo $row['Product']['alias'].'.html'?>">
												<img id="imgview" alt="<?php echo $row['Product']["name$duoi"]?>" src="<?php echo DOMAINAD?><?php echo $row['Product']['images']?>"/>
											</a>
                                            <a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']['id']?>/<?php echo $row['Product']['alias'].'.html'?>">
											<div class="project-cell-bg"></div>
                                  
											<div class="project-cell-hover">
												<div class="project-cell-title">
													<p ><?php echo $row['Product']["name$duoi"]?></p>
												</div>
												
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
            <style type="text/css">
                .big-column{
                    padding-top: 10px;
                }
                .project-small-column{
                    padding-top: 30px;
                }
            </style>
            <?php }?>