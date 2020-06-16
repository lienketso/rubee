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

<div class="banner-thiet-ke-logo">
	<div class="row" style="padding-top: 120px;">
		<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" style="text-align: center;">
			<span style="background-color: rgba(0, 0, 0, 0.5); font-size: 38px; font-weight: bold; padding: 5px 60px; opacity: 1; color: #fff;">Thiết kế logo</span>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInLeft" style="text-align: center; margin-top: 40px;">
			<span style="background-color: rgba(0, 0, 0, 0.5); font-size: 20px; font-weight: bold; padding: 5px 14px; opacity: 1; color: #fff;">Chuyên nghiệp</span>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInRight" style="text-align: center; margin-top: 10px;">
			<span style="background-color: rgba(0, 0, 0, 0.5); font-size: 20px; font-weight: bold; margin-top: 40px; padding: 5px 14px; opacity: 1; color: #fff;">Nhanh chóng tiếp cận khách hàng</span> 
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp" style="text-align: center; margin-top: 10px;">
			<span style="background-color: rgba(0, 0, 0, 0.5); font-size: 20px; font-weight: bold; padding: 5px 14px; opacity: 1; color: #fff;">Nắm bắt thời cơ hợp tác</span>
		</div>
	</div>
</div>

<style type="text/css">
	.banner-thiet-ke-logo {
		width: 100%; max-height: 420px;
		height: 420px; 
		position: relative; 
		background-image: url(<?php echo DOMAIN?>images/icon-thiet-ke-logo/web-logo-08.png);
		background-size:100% 100%;
	}
	@media only screen and (max-width: 2560px) {
		.banner-thiet-ke-logo {
	    	bottom: -76px;
	    }
	}
	@media only screen and (max-width: 1024px) {
		.banner-thiet-ke-logo {
	    	bottom: 0px;
	    }
	}
	@media only screen and (max-width: 768px) {
	    .banner-thiet-ke-logo {
	    	bottom: 20px;
	    }
	    #page-title-bar {
	    	bottom: 20px;
	    }
	    #page-title-bar .wrap {
		    position: relative;
	    	padding: 0px 10px;
		}
	}
</style>
 
<div id="page-title-bar" style="padding-top: 40px;">
	<div class="wrap" data-appear-animation="fadeInLeft">
		<div class="overlay-bar"></div>
		<h2 id="page-title"><span><?php echo $sanpham ?>/</span></h2>
					<h1 id="page-title-sub" style="margin-top: 20px;"><?php echo $typeName['Catproduct']["name"]?></h1>
		<div class="cleared"></div>
	</div>
	<style type="text/css">
		#page-title-bar span.span-parent{
			font-family: "Lato",Source Sans Pro !important;
		    font-size: 25px;
		    line-height: 48px;
		    font-style: normal;
		    font-weight: 600;
		    text-transform: uppercase;
		    color: white;
		}
		#page-title-bar span.span-child{
			font-family: Source Sans Pro !important;
		    font-size: 20px;
		    line-height: 48px;
		    font-style: normal;
		    font-weight: 400;
		    text-transform: uppercase;
		    margin-top: 0px;
		    padding: 6px 0;
		    color: rgba(255, 255, 255, 0.7);
		}
		@media only screen and (max-width: 768px) {
			#page-title-bar span.span-parent{
				font-family: "Lato",Source Sans Pro !important;
			    font-size: 21px;
			}
			#page-title-bar span.span-child{
				font-family: Source Sans Pro !important;
			    font-size: 18px;
			}
		}
	</style>
</div>

<link rel='stylesheet' href='<?php echo DOMAIN?>Animations/bootstrap.css' type='text/css' media='all' />
<!-- <link rel='stylesheet' href='<?php echo DOMAIN?>css/animate.min.css' type='text/css' media='all' /> -->
<link rel="stylesheet" href="<?php echo DOMAIN?>Animations/animation.css">
<link rel="stylesheet" href="<?php echo DOMAIN?>Animations/theme-animate.css">
<link href="<?php echo DOMAIN?>css/font-awesome.css" rel="stylesheet">
<script src="<?php echo DOMAIN?>Animations/js/jquery.appear.js"></script>
<!-- <script type="text/javascript" src="<?php echo DOMAIN?>js/wow.min.js"></script> -->
<script src="<?php echo DOMAIN?>Animations/js/modernizr.js"></script>
<script src="<?php echo DOMAIN?>Animations/js/theme.js"></script>
<script src="<?php echo DOMAIN?>Animations/js/custom.js"></script>
<script src="<?php echo DOMAIN?>Animations/js/theme.init.js"></script>

<div class="wrap" id="sphome">
	<div class="portfolio-top">
		<div id="portfolio-section-des">
			<div class="title-thiet-ke">
				<div class="row" data-appear-animation="fadeInRight" style="border-bottom: 1px dashed #d2d3d5;">
					<div class="col-lg-1 col-md-1 col-sm-1">
						<img style="float: left;" src="<?php echo DOMAIN?>images/icon-thiet-ke-logo/web logo-02.png">
					</div>
					<div class="col-lg-11 col-md-11 col-sm-11">
						<p style="padding: 0px;"><span style="color: #1bbc9b; font-size: 18px; font-weight: bold;">Thiết kế</span></p>
						<p style="padding: 0px;"><span style="color: #666666; font-size: 18px; font-weight: bold;">Logo chuyên nghiệp</span></p>
					</div>
				</div>
			</div>
			<div class="desc-thiet-ke row" style="padding-top: 10px;">
				<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp" data-wow-duration="1s">
					<p style="text-align: justify;"><strong>Logo có vai trò vô cùng quan trọng với một thương hiệu, một doanh nghiệp muốn xây dựng chỗ đứng và hình ảnh của mình trên thị trường. Với một doanh nghiệp mới thành lập, một thương hiệu mới ra mắt thị trường, logo sẽ là bước khởi đầu để khởi động dự án xây dựng thương hiệu của bạn. Hiện nay, chúng ta thấy rất nhiều những thông tin, những trang web các công ty rao bán sản phẩm là logo với các nhóm từ ấn tượng như: thiết kế logo online, thiết kế logo giá rẻ, thiết kế logo miễn phí, thiết kế logo trực tuyến, thiết kế logo chuyên nghiệp giá rẻ... Tuy nhiên, ai cũng biết cái gì miễn phí, cái gì giá rẻ cũng nên đặt ra câu hỏi về chất lượng, về điều kiện xung quanh sản phẩm ấy, và bao nhiêu là rẻ cho một biểu tượng thương hiệu? Tại Rubee chúng tôi cung cấp dịch vụ thiết kế logo cho khách hàng khi đã giải quyết tất cả những thắc mắc ấy. Bởi:</strong></p>
				</div>
			</div>
			<div class="content-thiet-ke row">
		    	<style type="text/css">
		    		.experience-desc-holder {
					    padding: 30px 0 30px 30px;
					}
					.borderbuoc {
					    border-right: 2px solid #d2d3d5;
					}
					.buocleft {
					    padding-top: 10%;
					}
					.buoc {
					    float: right;
					    padding-right: 30px;
					}
					.tenbuoc span {
					    font-size: 19px;
					    color: #1bbc9b;
					    padding-bottom: 20px;
					    margin-right: -20px;
					}
					.tenbuoc span b {
					    font-size: 75px;
					    color: #58595b;
					    font-weight: bold;
					}
					.cleared {
					    clear: both;
					}
					.trangthai {
					    text-transform: uppercase;
					    float: right;
					    padding-right: 30px;
					}
					.trangthai1 {
					    color: #1bbc9b;
					    float: right;
					}
					.noidungbuoc {
					    text-align: justify;
					}
					hr {
					    margin-top: 20px;
					    margin-bottom: 20px;
					    border: 0;
					    border-top: 2px solid #D2D3D5;
					}
		    	</style>
		    	<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="step-1">
						<div class="col-lg-4 col-md-4 col-sm-4  experience-desc-holder borderbuoc">
				    		<div class="buocleft" data-appear-animation="fadeInLeft">
					            <div class="buoc">
					                <div class="tenbuoc"><span>STEPS<b>01</b></span></div>
					                <img src="<?php echo DOMAIN?>images/gioithieu/bgbuoc.png">
					            </div>
					            <div class="cleared"></div>
					            <div class="trangthai">
					                <div class="trangthai1">Nhân Lực</div>
					                <div class="cleared"></div>
					                <div style="text-align: right;">Thiết kế chuyên nghiệp</div>
					            </div>
				            </div>
				    	</div>

				    	<div class="col-lg-8 col-md-8 col-sm-8 experience-desc-holder">
				            <div class="buocright buoctop1" data-appear-animation="fadeInRight">
					            <div class="noidungbuoc">Họ là các thiết kế đến từ các trường Đại học chuyên đào tạo mỹ thuật đồ họa, họ có kinh nghiệm thiết kế rất nhiều logo, tạo ra các câu chuyện thương hiệu thông qua quá trình làm việc và tham gia các cuộc thi thiết kế logo. Mỗi logo khi ra đời đều được xây dựng ý tưởng thiết kế, xây dựng câu chuyện thương hiệu dựa trên hình ảnh và cam kết mà doanh nghiệp muốn gửi đến khách hàng. Ý tưởng thiết kế logo chính là linh hồn là nền tảng để doanh nghiệp xây dựng bộ nhận diện của mình trong đó. Chúng tôi cập nhật cho nhân viên của mình những phần mềm thiết kế mới nhất, với nguyên tắc làm việc đột phá ý tưởng - kỹ thuật chuẩn mực -  sáng tạo sắc màu.</div>
				            </div>
				        </div>
					</div>
		    	</div>

		    	<div class="col-lg-12 col-md-12 col-sm-12">
		    		<hr data-appear-animation="fadeInRightBig" data-appear-animation-delay="100" class="appear-animation fadeInRightBig appear-animation-visible" style="animation-delay: 100ms;">
		    	</div>

		    	<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="step-2">
						<div class="col-lg-4 col-md-4 col-sm-4  experience-desc-holder borderbuoc">
				    		<div class="buocleft" data-appear-animation="fadeInLeft">
					            <div class="buoc">
					                <div class="tenbuoc"><span>STEPS<b>02</b></span></div>
					                <img src="<?php echo DOMAIN?>images/gioithieu/bgbuoc.png">
					            </div>
					            <div class="cleared"></div>
					            <div class="trangthai">
					                <div class="trangthai1">Quy trình</div>
					                <div class="cleared"></div>
					                <div style="text-align: right;">Làm việc thống nhất hợp lý</div>
					            </div>
				            </div>
				    	</div>

				    	<div class="col-lg-8 col-md-8 col-sm-8 experience-desc-holder">
				            <div class="buocright buoctop1" data-appear-animation="fadeInRight">
					            <div class="noidungbuoc">
					            	Chúng tôi xây dựng quy trình làm việc “đơn giản – nhanh chóng – sáng tạo – thân thiện“ dựa trên sự đặc biệt về sản phẩm và dịch vụ của chính mình. Thông qua việc nghiên cứu, phân tích và sáng tạo để hiểu rõ nhu cầu và cơ hội liên quan đến thương hiệu, khách hàng hoặc thị trường để tạo ra giá trị cho doanh nghiệp. Chúng tôi xây dựng những trải nghiệm độc đáo, toàn diện kết nối mọi người và thương hiệu theo câu chuyện thương hiệu của chính mình.
								</div>
				            </div>
				        </div>
					</div>
		    	</div>
			</div>
			<div class="row" style="padding-top: 40px;">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInLeft" style="text-align: center; padding-bottom: 20px;">
						<img style="width: 150px; height: 150px;" src="<?php echo DOMAIN?>images/icon-thiet-ke-logo/web logo-03.png">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp" data-wow-duration="1s" style="padding-bottom: 10px;">
						<div style="text-align: justify;">
							<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Rubee đã hợp tác hàng trăm khách hàng trong lĩnh vực thiết kế logo</strong></span></span>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp" data-wow-duration="1s">
						<div style="text-align: justify;">
							<span style="font-size:14px;">
								<span style="font-family:arial,helvetica,sans-serif;">
									Rubee là đối tác của rất nhiều khách hàng là
									doanh nghiệp trong và ngoài nước. Với mỗi
									khách hàng, chúng tôi sẽ tư vấn và có những đề
									xuất thiết kế logo khác nhau phù hợp với quy mô
									và lĩnh vực hoạt động của doanh nghiệp. Với mỗi
									Dự án, chúng tôi luôn chú ý đến sự hài lòng cùng
									hiệu quả của dịch vụ, chúng tôi hiểu sự hợp tác
									thành công còn là cơ hội tích lũy và tạo dựng
									quan hệ thân thiết giữa Rubee với Khách hàng.
								</span>
							</span><br>&nbsp;
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInDown" style="text-align: center; padding-bottom: 20px;">
						<img style="width: 150px; height: 150px;" src="<?php echo DOMAIN?>images/icon-thiet-ke-logo/web logo-04.png">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp" data-wow-duration="1s" style="padding-bottom: 10px;">
						<div style="text-align: justify;">
							<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Đội ngũ Quản lý dự án thân thiện, có kinh nghiệm tư vấn trong lĩnh vực thương hiệu. </strong></span></span>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
						<div style="text-align: justify;">
							<span style="font-size:14px;">
								<span style="font-family:arial,helvetica,sans-serif;">
									Đội ngũ Quản lý dự án của Rubee với nhiều năm
									kinh nghiệm tư vấn và xây dựng thương hiệu sẽ
									đồng hành cùng khách hàng, bảo vệ lợi ích cho
									khách hàng, cũng như quản lý tiến trình công
									việc giúp dự án hoàn thành tốt nhất. Chúng tôi
									luôn định hướng mỗi dự án không chỉ dựa vào
									nhu cầu của khách hàng, mà còn dựa vào thời
									điểm xây dựng thương hiệu ấy, để mang đến cho
									khách hàng những thời cơ mới, vận hội mới.
								</span>
							</span><br>&nbsp;
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInRight" style="text-align: center; padding-bottom: 20px;">
						<img style="width: 150px; height: 150px;" src="<?php echo DOMAIN?>images/icon-thiet-ke-logo/web logo-05.png">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp" style="padding-bottom: 10px;">
						<div style="text-align: justify;">
							<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Rubee mang đến sự hài lòng cho khách hàng với giá thiết kế logo tốt nhất</strong></span></span>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
						<div style="text-align: justify;">
							<span style="font-size:14px;">
								<span style="font-family:arial,helvetica,sans-serif;">
									<span style="color: #1bbc9b; font-weight: bold;">Bạn định trả bao nhiêu cho một biểu tượng
									thương hiệu?</span><br>
									<span style="color: #1bbc9b; font-weight: bold;">Thương hiệu của bạn đáng giá bao nhiêu?</span><br>
									Chúng tôi không đem đến chi phí rẻ nhất mà luôn
									đem đến cho khách hàng chi phí tốt nhất, xứng
									đáng với giá trị mà doanh nghiệp bỏ ra cho chính
									thương hiệu của mình. Khách hàng sẽ được bàn
									giao bộ quy chuẩn logo, file gốc thiết kế, hướng
									dẫn sử dụng nhận diện khi kết thúc dự án.
								</span>
							</span><br>&nbsp;
						</div>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-595af3e281b6800c"></script> 
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>
                    <div class="col-md-4">
                        	<p style="float: right;"><strong>Số lần xem : <?php echo strrev(wordwrap(strrev($typeName['Catproduct']["shortdes_eg"]),3,',',true)); ?></strong></p>
                    </div>
                </div>
            </div>
           
          
		
        </div>			
	</div>             
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1203554176363535";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section id="contact-thiet-ke" style="text-align: center; color: #ffffff; width: 100%; margin-bottom: 50px; background-image: url(<?php echo DOMAIN?>images/icon-thiet-ke-logo/web-logo-contact.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 img_hotline" data-appear-animation="fadeInLeft">
				<img width="120px" height="140px" src="<?php echo DOMAIN?>images/icon-thiet-ke-logo/hotline.png">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotline-logo" data-appear-animation="fadeInUp">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hotline-top">
					<span class="title-hotline"><strong>HOTLINE</strong></span> <br> <br>
					<span>Hãy liên lạc cho bộ phận chăm sóc khách hàng của chúng tôi ngay bây giờ để được tư vấn miễn phí</span>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotline-bottom hotline-bottom-border">
					<span class="add">Văn phòng TP Hà Nội</span> <br>
					<span>Hotline: 0902 228 998 (Ms. Ngọc)</span> <br>
					<span>0988 022 586 (Ms. Linh)</span>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hotline-bottom">
					<span class="add"> Văn phòng TP HCM</span> <br>
					<span>Hotline: 0936 438 238 (Ms. Bích)</span> <br>
					<span>0946 299 968 (Ms. Hương Giang)</span> 
				</div>
			</div>
		</div>
	</div>
</section>
<div class="wrap" id="sphome">
	<div class="row" data-appear-animation="fadeInDown">
		<div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; margin-bottom: 40px;  color: #1a1a1a;">
			<h2 style="text-transform: uppercase; font-size: 30px; padding-bottom: 10px;"><span style=" padding-bottom: 10px; border-bottom: 4px solid #1a1a1a;">Sản Phẩm</span></h2>
			<span style="padding-top: 10px;">Hãy tham khảo những dự án thiết kế thương hiệu mà Rubee đã thực hiện</span>
		</div>
	</div>
	<div class="wrap-portfolio portfolio-grid">
		<?php
			$i=0; 
			foreach ($listProduct as $row) {
			$i++;
		?>
			<div class="column3_1 customer-size" data-appear-animation="fadeInUp">
	            <div class="project-cell">
					<div class="project-cell-thumb">
						<div class="project-cell-thumb-window">
							<a href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
								<img alt="<?php $row['Product']["name"]?>" id="imgviewhome" src="<?php echo DOMAINAD?><?php echo $row['Product']["images"]; ?>">
							</a>
	                        <a title="<?php echo $row['Product']["name"]?>" href="<?php echo DOMAIN?>ct-sp/<?php echo $row['Product']["id"]; ?>/<?php echo $row['Product']["alias"].'.html'; ?>">
							<div class="project-cell-bg"></div>
	                        
							<div class="project-cell-hover">
								<div class="project-cell-title">
	                            <?php echo $row['Product']["name"]?>
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

<style type="text/css">
	.column3_1.customer-size {
		padding-left: 0px;
	}
	.project-cell {
		padding: 10px;
	}
</style>

<style type="text/css">
	@media only screen and (max-width: 2560px) {
		#contact-thiet-ke .img_hotline img{
	    	float: right;
	    	margin-top: 60px;
		}
		#contact-thiet-ke .hotline-logo {
	    	padding-top: 40px;
	    	padding-bottom: 40px;
		}
		#contact-thiet-ke .hotline-top {
	    	padding-bottom: 20px;
		}
		#contact-thiet-ke .hotline-bottom-border {
	    	border-right: 1px #1BBC9B solid;
		}
		#contact-thiet-ke .title-hotline {
	    	font-size: 24px;
	    	border-bottom: 3px #1BBC9B solid;
		}
		#contact-thiet-ke .add {
	    	font-size: 16px;
	    	color: #1BBC9B;
	    	text-transform: uppercase;
	    	font-weight: bold;
		}
	}
	@media only screen and (max-width: 1024px) {
		#contact-thiet-ke .img_hotline img{
	    	float: right;
	    	margin-top: 80px;
		}
		#contact-thiet-ke .hotline-logo {
	    	padding-top: 40px;
	    	padding-bottom: 40px;
		}
		#contact-thiet-ke .hotline-top {
	    	padding-bottom: 20px;
		}
		#contact-thiet-ke .hotline-bottom {
	    	font-size: 13px;
		}
		#contact-thiet-ke .title-hotline {
	    	font-size: 24px;
	    	border-bottom: 3px #1BBC9B solid;
		}
		#contact-thiet-ke .add {
	    	font-size: 16px;
	    	color: #1BBC9B;
	    	text-transform: uppercase;
	    	font-weight: bold;
		}
	}
	@media only screen and (max-width: 768px) {
	    #contact-thiet-ke .img_hotline img{
	    	display: none;
		}
		#contact-thiet-ke .hotline-bottom-border {
	    	border-right: none;
	    	margin-bottom: 20px;
		}
	}
</style>
