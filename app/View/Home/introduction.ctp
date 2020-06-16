
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
  
 
 
 <!-- Animations -->
    <link rel="stylesheet" href="<?php echo DOMAIN?>Animations/theme-elements.css">
    <link rel="stylesheet" href="<?php echo DOMAIN?>Animations/animation.css">
    <link rel="stylesheet" href="<?php echo DOMAIN?>Animations/theme-animate.css">
    <link href="<?php echo DOMAIN?>css/font-awesome.css" rel="stylesheet">
    <script src="<?php echo DOMAIN?>Animations/js/modernizr.js"></script>
    
        <script src="<?php echo DOMAIN?>Animations/js/jquery.appear.js"></script>
        <script src="<?php echo DOMAIN?>Animations/js/theme.js"></script>
        <script src="<?php echo DOMAIN?>Animations/js/custom.js"></script>
        <script src="<?php echo DOMAIN?>Animations/js/theme.init.js"></script>
  
        
   <!-- bootstrap -->
   <link rel="stylesheet" href="<?php echo DOMAIN?>Animations/bootstrap.css"> 
   <link rel="stylesheet" href="<?php echo DOMAIN?>Animations/gioithieucss.css"> 
 
 <!-- fancybox -->
 
 <!-- Add jQuery library -->
    <script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/lib/jquery-1.10.1.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="<?php echo DOMAIN?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    
    <!-- hover img -->
    <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/css/main-style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>/fancybox/css/font-awesome.css" media="screen" />
    

 <div id="page-title-bar">
 <div class="banner_about">
     <div class="wrap">
        <h2>Rubee đồng hành cùng doanh nghiệp Việt</h2>
        <p>Khởi tạo giá trị thương hiệu</p>
        <p>Xây dựng thương hiệu vững mạnh theo thời gian</p>
        <div class="button_banner"> 
            <a href="#nangluchoatdong" class="btn_about btn btn-default btn-normal btn-inline download-icon">Tìm hiểu thêm</a>
            <a href="https://rubee.com.vn/san-pham" class="btn_about btn btn-default btn-normal btn-inline download-icon">Khám phá dự án</a>
        </div>
     </div>
 </div>
                <div class="wrap">              
                    <div class="gioithieu pading26">
                    <div class="wrap">
                    <div class="row">
                    
                        
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 borderright">
                        
                        <h1 class="tieudegt">"Giới thiệu</h1>
                        <p class="motagt">Rubee Việt Nam cung cấp các dịch vụ sáng tạo về thương hiệu hàng đầu tại Việt Nam, cùng với đội ngũ nhân viên chuyện nghiệp chúng tôi sẽ giúp bạn xây dựng thương hiệu nhất quán, khác biệt và nổi tiếng, Rubee Việt Nam cùng xây dựng một thương hiệu Việt.</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                            
        <nav class="navbar  menufixtop" style="z-index: 900;">
                    

      <div class="collapse navbar-collapse" id="myNavbar" >
        <ul class="nav navbar-nav">
          <li class="trangchu"><a href="<?php echo DOMAIN?>">Trang chủ</a></li>
          <li><a href="#nangluchoatdong">Năng lực hoạt động</a></li>
          <li><a href="#quytrinhsangtao">Quy trình sáng tạo</a></li>
          <li><a href="#linhvuchoatdong">Lĩnh vực hoạt động</a></li>
          <li><a href="#ynghiabieutuong">Ý nghĩa biểu tượng</a></li>
          </li>
        </ul>
        
                                   </div>


</nav>  
<script>
            jQuery("document").ready(function($){
            
            var nav = $('.menufixtop');
            
            $(window).scroll(function () {
                if ($(this).scrollTop() > 120) {
                    nav.addClass("navbar-fixed-top");
                } else {
                    nav.removeClass("navbar-fixed-top");
                }
            });
         
        });
            </script>
            
  

<script>
var scrollspy =jQuery.noConflict();
scrollspy(document).ready(function($){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   
    
  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
   
        scrollBy(0, -100)
      });
    }  // End if
  });
});
</script>
                            
                        </div>
                        </div>
                        
  

                    </div>
                    </div>
 
                    <div class="cleared"></div>
                </div>
                 <div class="cleared"></div>
            </div>
            
            <div data-spy="scroll" data-target="#myScrollspy" data-offset="20">
            <div class="wrap" id="nangluchoatdong" >                                
                            <div class="pading80">
                            <div data-appear-animation="fadeInUp" >
                            <div class="gttieude">"Giới thiệu</div>
                            <div class="gttieude2 pading26">"Về chúng tôi</div>
                            
                            <div class="center">
                            <?php echo $about['Post']["shortdes"] ?>
                            </div>
                            </div>
                            
                            <div class="cleared"></div>
                            <div class="noidunggt pading15">
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 pading0" data-appear-animation="fadeInLeft" >
                            
                            <img src="<?php echo DOMAINAD?>img/post/<?php echo $about['Post']['images']?>" alt="<?php echo $about['Post']["name"]?>" />
                            
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8" data-appear-animation="fadeInRight">
                                <?php echo $about['Post']["content$duoi"] ?>
                            <a class="btn btn-default btn-normal btn-inline download-icon" title="download resume" href="<?php echo DOMAIN?>/profile">Tải hồ sơ năng lực  
                            <img src="<?php echo DOMAIN?>images/gioithieu/download.png" alt="tải hồ sơ năng lực" />
                            </a>
                            </div>
                            </div>
                            <div class="cleared"></div>
                            </div>
                        </div>
      </div>
                        
      <div class="sangtao pading80">
            <div class="wrap" >
            <div class="uocmo" data-appear-animation="fadeInUp">" ƯỚC MƠ CỦA CHÚNG TÔI LÀ <span>SÁNG TẠO NÊN ĐAM MÊ CỦA CHÍNH MÌNH</span></div>
            <div class="motauocmo" data-appear-animation="fadeInUp">Tại Rubee chúng tôi làm công việc để tạo dựng hình ảnh, mang đến bản sắc riêng cho từng doanh nghiệp, kiến tạo chiến lược <br />
 phát triển phù hợp để cùng doanh nghiệp bắt đầu ở mọi giai đoạn. </div>
            
            </div>
            <div class="cleared"></div>
            
            <div class="wrap" >
            <div class="anhdong">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="anhdong1" >
                        <div class="face" data-appear-animation="bounceIn">
                        <div class="tieudeanhdong">
                            Tư vấn
                        </div>
                        <div class="motaanhdong">
                        Chúng tôi lắng nghe<br/> và tư vấn cho khách hàng
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-sm-3 col-xs-6" >
                        <div class="anhdong2">
                        <div class="face" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                        <div class="tieudeanhdong">
                            Sáng tạo
                        </div>
                        <div class="motaanhdong">
                        Chúng tôi tự hào sáng tạo <br/>của mình làm nên sự khác <br/>biệt cho Thương hiệu.
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                        <div class="anhdong3">
                        <div class="face" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                        <div class="tieudeanhdong">
                            Giải pháp
                        </div>
                        <div class="motaanhdong">
                        Đơn giản hóa mọi giải pháp <br/>dịch vụ, giúp khách hàng <br/>chọn lựa dễ dàng.
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="anhdong4">
                        <div class="face" data-appear-animation="bounceIn" data-appear-animation-delay="600">
                        <div class="tieudeanhdong">
                            Khởi sắc
                        </div>
                        <div class="motaanhdong">
                        Truyền tải sự sáng tạo đột phá,<br />
giúp khách hàng khởi sắc 
<br />hình ảnh doanh nghiệp
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            

            
            </div>
      </div>
      
      <div  id="quytrinhsangtao" class="quytrinh pading80">
    <div class="wrap">
    <div data-appear-animation="slideInUp" >
    <div class="gttieude">"QUY TRÌNH SÁNG TẠO</div>
    <div class="uocmo pading26">"Quy trình sáng tạo <span>thương hiệu tại Rubee Việt Nam </span></div>
    
    <div class="motausangtao">
    Là một đội ngũ làm việc sáng tạo và phối hợp hiệu quả tại Rubee Việt Nam , chúng tôi tìm thấy niềm vui và đam mê trong công việc, cùng nhau chúng tôi tạo ra những <br />
 sản phẩm độc đáo và ấn tượng. Tại Rubee, hoàn thành một dự án không đơn thuần chỉ là việc tạo ra sản phẩm gửi khách hàng, với chúng tôi, đó là nơi để thỏa sức <br />
đam mê, sáng tạo và cống hiến. Mỗi một sản phẩm thiết kế cũng chính là đứa con tinh thần quí báu của chúng tôi.<br />
Cùng tìm hiểu xem những đứa con tinh thần ấy được tạo ra như thế nào nhé!
    <div class="cleared"></div>
    </div>
    </div>
    
    

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3  experience-desc-holder borderbuoc">
            <div class="buocleft" data-appear-animation="fadeInLeft">
            <div class="buoc">
                <div class="tenbuoc"><span>STEPS<b>01</b></span></div>
                <img src="<?php echo DOMAIN?>/images/gioithieu/bgbuoc.png" />
            </div>
            <div class="cleared"></div>
            <div class="trangthai">
                <div class="trangthai1">Execute</div>
                <div class="cleared"></div>
                <div>complete client brief</div>
            </div>
            </div>
        </div>
        
        <div class="col-lg-9 col-md-9 col-sm-9 experience-desc-holder">
            <div class="buocright buoctop1" data-appear-animation="fadeInLeft" >
            <div class="tieudebuoc">Tiếp nhận yêu cầu từ khách hàng </div>
            <br />
            <div class="noidungbuoc">Tiếp nhận yêu cầu từ khách hàng (Receive and complete client brief) bộ phận kinh doanh – quản lý dự án (account) của Rubee làm việc với khách hàng và tiếp nhận các yêu cầu sáng tạo.</div>
            </div>
        </div>
    </div>
    <hr data-appear-animation="fadeInRightBig" data-appear-animation-delay="100" />
    
    <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-3  experience-desc-holder borderbuoc">
        <div class="buocleft" data-appear-animation="fadeInLeft" data-appear-animation-delay="800">
            <div class="buoc">
                <div class="tenbuoc"><span>STEPS<b>02</b></span></div>
                <img src="<?php echo DOMAIN?>/images/gioithieu/bgbuoc.png" />
            </div>
            <div class="cleared"></div>
            <div class="trangthai">
                <div class="trangthai1">Brainstorm</div>
                <div class="cleared"></div>
                
            </div>
        </div>
        </div>
        
        <div class="col-lg-9 col-md-9 col-sm-9  experience-desc-holder">
            <div class="buocright" data-appear-animation="fadeInRight" data-appear-animation-delay="800">
            <div class="tieudebuoc">Họp nhóm để đưa ra ý tưởng</div>
            <br />
            <div class="noidungbuoc">Account cùng ngồi lại làm việc với bộ phận sáng tạo (creative) và bộ phận sản xuất, in ấn để đưa ra ý tưởng. Đây là bước vô cùng quan trọng làm nên thành công cho 1 dự án và giúp tạo ra sản phẩm với chất lượng cao. Rubee hiểu rằng, sự phối hợp ăn ý giữa các bộ phận là yếu tố chủ chốt tạo nên sản phẩm hoàn chỉnh và thống nhất. Account sẽ giúp cho bộ phận sáng tạo và sản xuất hiểu được chính xác yêu cầu của khách hàng, bộ phận sản xuất, in ấn sẽ giúp cho các chuyên gia thiết kế và xây dựng nội dung </div>
        </div>
        </div>
    </div>
    <hr data-appear-animation="fadeInRightBig" data-appear-animation-delay="100" />
    <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-3  experience-desc-holder borderbuoc">
          <div class="buocleft" data-appear-animation="fadeInLeft" data-appear-animation-delay="800">
            <div class="buoc">
                <div class="tenbuoc"><span>STEPS<b>03</b></span></div>
                <img src="<?php echo DOMAIN?>/images/gioithieu/bgbuoc.png" />
            </div>
            <div class="cleared"></div>
            <div class="trangthai">
                <div class="trangthai1">Execute</div>
                <div class="cleared"></div>
                <div>complete client brief</div>
            </div>
        </div>
        </div>
        
        <div class="col-lg-9 col-md-9 col-sm-9  experience-desc-holder">
           <div class="buocright" data-appear-animation="fadeInRight" data-appear-animation-delay="800">
            <div class="tieudebuoc">Thực hiện</div>
            <br />
            <div class="noidungbuoc">Account cùng ngồi lại làm việc với bộ phận sáng tạo (creative) và bộ phận sản xuất, in ấn để đưa ra ý tưởng. Đây là bước vô cùng quan trọng làm nên thành công cho 1 dự án và giúp tạo ra sản phẩm với chất lượng cao. Rubee hiểu rằng, sự phối hợp ăn ý giữa các bộ phận là yếu tố chủ chốt tạo nên sản phẩm hoàn chỉnh và thống nhất. Account sẽ giúp cho bộ phận sáng tạo và sản xuất hiểu được chính xác yêu cầu của khách hàng, bộ phận sản xuất, in ấn sẽ giúp cho các chuyên gia thiết kế và xây dựng nội dung </div>
        </div>
        </div>
    </div>
    <hr data-appear-animation="fadeInRightBig" data-appear-animation-delay="100" />
    <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-3 experience-desc-holder borderbuoc">
            <div class="buocleft" data-appear-animation="fadeInLeft" data-appear-animation-delay="800">
            <div class="buoc">
                <div class="tenbuoc"><span>STEPS<b>04</b></span></div>
                <img src="<?php echo DOMAIN?>/images/gioithieu/bgbuoc.png" />
            </div>
            <div class="cleared"></div>
            <div class="trangthai">
                <div class="trangthai1">complete</div>
                <div class="cleared"></div>
                <div>complete client brief</div>
            </div>
        </div>
        </div>
        
        <div class="col-lg-9 col-md-9 col-sm-9  experience-desc-holder">
          <div class="buocright buoctop4" data-appear-animation="fadeInRight" data-appear-animation-delay="800">
            <div class="tieudebuoc">hoàn thành</div>
            <br />
            <div class="noidungbuoc">Gửi sản phẩm cuối cùng cho khách hàng và chỉnh sửa nếu cần để tạo ra sản phẩm cuối cùng hoàn thiện nhất.Tại Rubee, chúng tôi coi trọng sự kết hợp chặt chẽ giữa các bộ phận để tạo ra một sản phẩm mang tính thống nhất. Đồng thời, mỗi bộ phận cũng có chức năng chuyên biệt hóa, đảm nhận nhiệm vụ cụ thể, rõ ràng giúp cho quá trình sáng tạo trở nên bài bản và chuyên nghiệp. Trong quá trình thực hiện dự án, bộ phận chăm sóc khách hàng của Rubee sẽ đóng vai trò là cầu nối giữa nhóm sáng tạo và sản xuất nhằm đảm bảo đáp ứng chính xác yêu cầu của khách hàng và giúp cho khách hàng nắm bắt được tiến độ của công việc. Hãy liên lạc với chúng tôi ngay hôm nay để tìm hiểu kĩ hơn qui trình sáng tạo chuyên nghiệp tại Rubee cũng như được tư vấn thêm về dự án thương hiệu của bạn. </div>
        </div>
        </div>
    </div>
    
    <hr data-appear-animation="fadeInRightBig" data-appear-animation-delay="100" />
    
    </div>
</div>

<div id="linhvuchoatdong" class="linhvuc padingtop80">
<div class="wrap">
    <div data-appear-animation="slideInUp" >
    <div class="gttieude">"LĨNH VỰC HOẠT ĐỘNG</div>

    
    <div class="motausangtao pading26">
    Hoạt động trong lĩnh vực phát triển Thương hiệu, chúng tôi là những chuyên viên tìm hiểu và xây dựng không mệt mỏi những tiềm năng vốn có của Doanh nghiệp. <br />
     Mỗi dịch vụ Rubee đưa ra đều mong muốn mang lại giá trị hoàn hảo và khác biệt cho các bạn. Chúng tôi luôn sẵn sàng tư vấn và giải đáp tất cả các câu hỏi của <br />
      khách hàng để hợp tác hiệu quả và giúp doanh nghiệp bạn chuyên nghiệp, phát triển hơn. <br />
Tìm hiểu lĩnh vực hoạt động của chúng tôi -  mang lại giải pháp toàn diện cho chính Doanh nghiệp. 
    <div class="cleared"></div>
    </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 padingleft150 padingtop60">
            <div class="linhvuc1 " data-appear-animation="fadeInUp" data-appear-animation-delay="200">
            <div class="tieudelinhvuc">SÁNG TẠO THIẾT KẾ & IN ẤN</div>
            <img src="<?php echo DOMAIN?>/images/gioithieu/tieudelinhvuc.jpg" />
            <ul class="listlinhvuc">
                <li>Thiết kế Bộ nhận diện</li>
                <li>Tờ rơi, Brochure</li>
                <li>Poster, Biển quảng cáo</li>
                <li>Catalogue, Profile, Bao bì</li>
            </ul>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-6 padingleft210 padingtop60">
            <div class="linhvuc2" data-appear-animation="fadeInUp" data-appear-animation-delay="400">
            <div class="tieudelinhvuc">GIẢI PHÁP TRỌN GÓI </div>
            <img src="<?php echo DOMAIN?>/images/gioithieu/tieudelinhvuc.jpg" />
            <ul class="listlinhvuc">
                <li>Thiết kế thương hiệu cho doanh nghiệp mới</li>
                <li>Thiết kế nhận diện thương hiệu doanh nghiệp</li>
                <li>Poster, Biển quảng cáo</li>
                <li>Catalogue, Profile, Bao bì</li>
                <li>Xây dựng thương hiệu cho dự án bất động sản</li>
                <li>Xây dựng và Quảng bá thương hiệu toàn diện</li>
                <li>Sáng tạo thương hiệu sản phẩm mới</li>
                <li>Quảng bá hình ảnh doanh nghiệp</li>
                <li>Truyền thông trực tuyến</li>
                <li>Chăm sóc thương hiệu toàn diện</li>
            </ul>
            </div>
        </div>
        <div class="cleared"></div>
        <div class="pading40"></div>
        
        <div class="col-lg-6 col-md-6 col-sm-6 padingleft150">
            <div class="linhvuc3" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
            <div class="tieudelinhvuc">NHẬN DIỆN CỐT LÕI</div>
            <img src="<?php echo DOMAIN?>/images/gioithieu/tieudelinhvuc.jpg" />
            <ul class="listlinhvuc">
                <li>Đặt tên thương hiệu</li>
                <li>Đặt tên công ty</li>
            </ul>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-6 padingleft210">
            <div class="linhvuc4" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
            <div class="tieudelinhvuc">TƯ VẤN CHIẾN LƯỢC</div>
            <img src="<?php echo DOMAIN?>/images/gioithieu/tieudelinhvuc.jpg" />
            <ul class="listlinhvuc">
                <li>Kiến trúc thương hiệu</li>
                <li>Mô hình thương hiệu</li>
       
                <li>Chiến lược khác biệt hóa</li>
                <li>Mở rộng thương hiệu</li>
            </ul>
            </div>
        </div>
    </div>
    
</div>

</div>



    <script type="text/javascript">

       var  fancybox = jQuery.noConflict();
        fancybox(document).ready(function($) {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
            */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>




<div id="ynghiabieutuong">
    <div id="sphome" class="wrap">
        <div class="portfolio-top top80" style="text-align: center;">
        <!--<div id="portfolio-section-des">This is the description of your portfolio. You can edit it in the admin panel.</div>-->             
            <div class="tenthuonghieu">"Ý nghĩa Tên thương hiệu</div>
            <ul id="filters">
                <li><span class="active" data-filter=".photo">Photo</span></li>
                <li><span id="filter-ynthuonghieu" class="" data-filter=".ynthuonghieu">Ý Nghĩa tên thương hiệu</span></li>
                <li><span id="filter-ynbieuthuong" class="" data-filter=".ynbieuthuong">Ý Nghĩa Biểu tượng</span></li>
                <li><span id="filter-ynslogan" class="" data-filter=".ynslogan"  class="current">Ý Nghĩa slogan</span></li>
            </ul>
        </div>
    </div>
    <div class=" portfolio-grid portfolio pading40" data-appear-animation="slideInUp">
        <div id="portfolio-filter-container" class="portfolio_wrapper grid">    
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-1" >
                <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh1.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                    <h5>Rubee Photo</h5>
                    
                    <img  src="<?php echo DOMAIN?>fancybox/anh1.jpg">
                </figure>
            </div>
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-2" >
                <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh2.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                    <h5>Rubee Photo</h5>
                    <img  alt="" src="<?php echo DOMAIN?>fancybox/anh2.jpg">
                </figure>
            </div>
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-3" >
                <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh3.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                    <h5>Rubee Photo</h5>
                    <img  alt="" src="<?php echo DOMAIN?>fancybox/anh3.jpg">
                </figure>
            </div>
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-4" >
                <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh4.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                        
                    <h5>Rubee Photo</h5>
                    <img  alt="" src="<?php echo DOMAIN?>fancybox/anh4.jpg">
                </figure>
            </div>
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-5" >
                <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh5.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                    
                    <h5>Rubee Photo</h5>
                    <img  alt="" src="<?php echo DOMAIN?>fancybox/anh5.jpg" >
                </figure>
            </div>
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-6" >
                <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh6.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                    <h5>Rubee Photo</h5>
                    
                    <img  alt="" src="<?php echo DOMAIN?>fancybox/anh6.jpg">
                </figure>
            </div>
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-7" >
                <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh7.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                    <h5>Rubee Photo</h5>
                    
                    <img  alt="" src="<?php echo DOMAIN?>fancybox/anh7.jpg">
                </figure>
            </div> 
            <div class="portfolio_filter_item photo isotope-item portfolio-item portfolio-item-8" >
              <figure class="thumbnail">
                    <div class="cover"></div>
                    <a  title="" href="<?php echo DOMAIN?>fancybox/anh8.jpg" class="enlarge-icon fancybox-buttons" data-fancybox-group="button"></a>
                    <h5>Rubee Photo</h5>
                    
                    <img  alt="" src="<?php echo DOMAIN?>fancybox/anh8.jpg">
                </figure>
            </div>

            <div class="portfolio_filter_item ynslogan portfolio-item" style="height:auto;margin-top:30px">
                <div class="wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">      
                            <img  alt="" src="<?php echo DOMAIN?>fancybox/slogan.jpg">  
                        </div>  
                        <div class="col-lg-8 col-md-8 col-sm-8" style="text-align: justify;">
                            <div class="noidungctgt">
                                Slogan công ty là <b>"Khởi tạo giá trị thương hiệu"</b>, một câu slogan rất phù hợp với ngành nghề của chúng tôi đang phục vụ, khiến người nghe dễ nhớ, sự đơn giản cũng luôn mang lại giá trị bền vững lâu dài cho người dùng. Hai chữ ‘khởi tạo” đặt lên đầu câu khẳng định xây dựng thương hiệu chính là sự khởi đầu, mà Rubee sẽ giúp doanh nghiệp khởi tạo nó. Hai chữ “giá trị” đặt giữa câu chính là những cái tốt nhất mà “thương hiệu” sẽ mang lại cho doanh nghiệp sở hữu nó. Ý nghĩa - đơn giản - dễ nhớ - bền vững là những gì đọng lại ở slogan này.

                                <br/> <br/>Hy vọng những thành quả lao động của chúng tôi, cũng chính là những giá trị bền vững, những giọt mật ngọt ngào mà bất kỳ đối tác nào đến với chúng tôi cũng cảm nhận được.
                                <br />
                                <br />
                                <div style="font-weight: bold; text-transform: uppercase; font-weight: bold;"> Rubee-Khởi tạo giá trị thương hiệu</div>
                            </div>                          
                        </div>                        
                    </div> 
                </div>     
            </div>
                    
            <div class="portfolio_filter_item ynbieuthuong portfolio-item" style="height:auto;margin-top:30px">
                <div class="wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">   
                            <img  alt="" src="<?php echo DOMAIN?>fancybox/bieutuong.jpg">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8" style="text-align: justify;">
                            <div class="noidungctgt">
                                Hình ảnh trong Logo là sự kết hợp cách điệu tượng trưng sáng tạo của vân tay và dải ngân hà, hai hình ảnh được lồng ghép như vòng xoáy rộng mở của cơn lốc, vòng xoáy tròn phù hợp mềm mại với mọi thương hiệu thúc đẩy sự hòa nhập và phát triển của một công ty hoạt động trong lĩnh vực thương hiệu như RUBEE. <br /> <br />

                                Biểu tượng vân tay là một trong nhưng tượng hình mang tính đồ họa. với chiều vân tay hướng lên thể hiện sự đồng thuận sự đồng ý một cách viên mãn nhất <br />
                                Ngoài ra biểu tượng còn được cách điệu khéo léo theo hình xoắn Elip vừa tạo sự tối giản hợp lý vừa có hình dáng dải ngân hà tượng trưng cho sự rộng lớn tầm vĩ mô, một hình xoáy đầy thu hút bởi sự tinh tú của nó. Với các đường cách điệu một cách dứt khoát hiện đại.<br />

                                <br />Phần chữ không chân đơn giản nhưng mạnh mẽ tạo dấu ấn ở phần cách điệu chữ R, dễ thu hút người nhìn, phù hợp với phần hình ảnh tạo điểm tương đồng.Thiết kế logo là sự kết hợp của hai màu lạnh mang lại cảm giác mạnh mẽ, vận động là màu xanh và màu đen. Đây là hai màu cơ bản, khi kết hợp khéo léo tạo sự sang trọng bắt mắt, dễ nhận diện trên văn bản.   
                            </div>   
                        </div>   
                    </div>
                </div>
            </div>
                    
            <div class="portfolio_filter_item ynthuonghieu portfolio-item " style="height:auto;margin-top:30px">
              <div class="wrap">
                    <div class="row">          
                        <div class="col-lg-4 col-md-4 col-sm-4">                              
                            <img  alt="" src="<?php echo DOMAIN?>fancybox/tenthuonghieu.jpg" style="border: 1px solid #ccc;">           
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8" style="text-align: justify;">
                            <div class="noidungctgt">
                                Xác định hoạt động trong lĩnh vực quảng cáo và làm thương hiệu, cũng như phát triển dịch vụ ra nhiều lĩnh vực ngành nghề khác nhau, chúng tôi muốn bắt đầu khẳng định mình ngay từ hình ảnh ban đầu, từ những điều giản đơn trước một kế hoạch marketing dài lâu, đó là Tên thương hiệu - Logo - Slogan.<br /><br />

                                Yêu cầu một cái tên không quá cầu kỳ, gần gũi nhưng vẫn mang hơi thở hiện đại, nhạy bén, sang trọng, quan trọng hơn là phù hợp với chính mình thật khó. RUBEE là một cái tên được lựa chọn từ rất nhiều phương án đưa ra. Lấy ý tưởng từ màu xanh mà công ty chọn lựa làm màu chủ đạo trên Logo và các ứng dụng văn phòng khác. Màu xanh còn đại diện cho mệnh thủy trong phong thủy, nên RUBEE sẽ mang dòng nước may mắn, mát lành, lan tỏa đến mọi nơi, mang lại phúc khí cho doanh nghiệp sở hữu nó.<br /><br />

                                RUBEE có biến âm khá giống với RUBY, một từ quen thuộc, ngắn gọn, cho cảm giác sung túc thịnh vượng. Hơn thế nữa “Bee”  không chỉ mang lợi thế về cách phát âm kéo dài dễ gây ấn tượng, mà còn là từ khá dễ nhận diện. Be trong  “to be”  chính  là hành động, là làm việc, là sống. Tuy nhiên “Bee” mà chúng tôi đặt vào chính là một từ chỉ những thuộc tính tốt đẹp của loài ong, cần cù, chăm chỉ, sáng tạo, mang lại những thành quả ngọt ngào, nhưng bền vững.
                            </div>
                        </div>
                    </div>     
                </div> 
            </div>    
        </div>
    </div>
</div>


<style type="text/css">
    .ynslogan {
        display: none;
    }
    .after-ynslogan {
        display: block;
    }
    .ynbieuthuong {
        display: none;
    }
    .after-ynbieuthuong {
        display: block;
    }
    .ynthuonghieu {
        display: none;
    }
    .after-ynthuonghieu {
        display: block;
    }
</style>
<script>
    $('#filter-ynslogan').click(function() {
        $('.ynslogan').addClass('after-ynslogan');
    });
    $('#filter-ynbieuthuong').click(function() {
        $('.ynbieuthuong').addClass('after-ynbieuthuong');
    });
    $('#filter-ynthuonghieu').click(function() {
        $('.ynthuonghieu').addClass('after-ynthuonghieu');
    });
    var $grid = jQuery.noConflict();
    $(function() {
        $grid = $('.grid').isotope({
            filter: '.photo'});
    });
</script>

<script src="<?php echo DOMAIN?>Animations/js/bootstrap.min.js"></script>   

<div class="khachhang"  itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="https://rubee.com.vn/">
    <meta itemprop="logo" content="https://rubee.com.vn/images/logo.png">
    <meta itemprop="image" content="https://rubee.com.vn/logo/jawoco/thiet-ke-logo-jawoco.jpg">
    <meta itemprop="description" content="Cảm nhận của khách hàng về dịch vụ thiết kế logo chuyên nghiệp">
    <div itemtype="http://schema.org/AggregateOffer" itemscope="" itemprop="offers">
        <meta content="64.99" itemprop="highPrice">
        <meta content="0" itemprop="lowPrice">
        <meta content="USD" itemprop="priceCurrency">
        <meta content="70" itemprop="offerCount">
        <meta content="70" itemprop="sku">
    </div>
    <div itemprop="brand" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="RubeeVietNam">
    </div>
    <div class="wrap">
        <h3>Khách hàng nói về chúng tôi</h3>
        <div class="line_cus"></div>
        <div class="rating_c">
            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <span class="block-subheader">
                    <span class="stars">
                        <span class="rating">
                            <input name="score" type="radio" id="rating5" value="5" checked="checked"/>
                            <label for="rating5" title="5 stars">☆</label>
                            <input name="score" type="radio" id="rating4" value="4" />
                            <label for="rating4" title="4 stars">☆</label>
                            <input name="score" type="radio" id="rating3" value="3" />
                            <label for="rating3" title="3 stars">☆</label>
                            <input name="score" type="radio" id="rating2" value="2" />
                            <label for="rating2" title="2 stars">☆</label>
                            <input name="score" type="radio" id="rating1" value="1" />
                            <label for="rating1" title="1 stars">☆</label>
                        </span>
                    </span>
                    (<span itemprop="ratingValue">4.8</span> của
                    <span itemprop="bestRating">5</span>)
                    <a href="#"><span itemprop="ratingCount">1030</span> đánh giá từ khách hàng</a>
                </span>
            </div>
        </div>
        <div class="list_customer">

            <div class="item_customer" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <div class="box_customer">
                    <img class="icon_comment2" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment2.png" alt=""/>
                    <h4>THƯƠNG HIỆU TẬP ĐOÀN PICENZA</h4>
                    <p class="type_design">Thiết kế Nhận diện thương hiệu</p>
                    <p class="description">Ông. Dương Tuấn Anh - Trưởng phòng maketingHợp tác với Rubee trong dự án thay đổi bộ nhận diện, Picenza nhận được sự hỗ trợ chuyên nghiệp từ khâu chọn hạng mục, lên ý tưởng và tư vấn suốt quá trình thực hiện. Chúng tôi đã rất an tâm khi cùng Rubee xây dựng phong cách doanh nghiệp.</p>
                    <img class="icon_comment1" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment1.png" alt=""/>
                </div>
                <div class="box_image_cus">
                    <img src="<?php echo DOMAIN?>images/gioithieu/khachhang1.jpg" />
                </div>
            </div>

            <div class="item_customer" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <div class="box_customer">
                    <img class="icon_comment2" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment2.png" alt=""/>
                    <h4>AQUAMEDI SPA</h4>
                    <p class="type_design">Thiết kế Nhận diện thương hiệu</p>
                    <p class="description">Bà. Hoa Hậu Thuỳ Lâm - Chủ cửa hàng Aquamedi Spa. Là khách hàng thường xuyên của công ty hơn hai năm qua, mình cảm thấy rất thoải mái khi được hợp tác cùng Rubee. Hơn 20 hợp đồng thiết kế trong một năm, giúp mình tin tưởng và làm việc lâu dài với Rubee, vì mình cho rằng đó cũng là một duyên thú vị khi mình đi tìm nhà cung cấp tốt.</p>
                    <img class="icon_comment1" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment1.png" alt=""/>
                </div>
                <div class="box_image_cus">
                    <img src="<?php echo DOMAIN?>images/gioithieu/khachhang2.jpg" />
                </div>
            </div>

            <div class="item_customer" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <div class="box_customer">
                    <img class="icon_comment2" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment2.png" alt=""/>
                    <h4>CÔNG TY THUỐC LÁ THANH HOÁ</h4>
                    <p class="type_design">Thiết kế & in ấn Kỷ yếu</p>
                    <p class="description">Ông. Mai Thanh Bình - Phó Giám Đốc. Tôi có thể tìm bất cứ doanh nghiệp agency nào cho thương hiệu của mình nhưng tôi không có thời gian để care những điều mang tính ngoài lề, nên tôi lựa chọn Rubee cho dự án marketing hàng năm của mình bởi chất lượng dịch vụ và sản phẩm mà công ty mang lại sau lần đầu tiên hợp tác.</p>
                    <img class="icon_comment1" src="<?php echo DOMAIN?>js/owl-carousel/icon_comment1.png" alt=""/>
                </div>
                <div class="box_image_cus">
                    <img src="<?php echo DOMAIN?>images/gioithieu/khachhang3.jpg" />
                </div>
            </div>

        </div>
    </div>
</div>
<link rel="stylesheet" href="<?php echo DOMAIN?>js/owl-carousel/owl.carousel-2.0.0.css"> 
<link rel="stylesheet" href="<?php echo DOMAIN?>js/owl-carousel/owl.theme.css"> 
<script type="text/javascript" src="<?php echo DOMAIN?>js/owl-carousel/owl.carousel-2.0.0.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('.list_customer').owlCarousel({
        navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsiveclass: true,
        margin: 30,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            468: {
                items: 1,
                nav: true
            },
            768: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });
});
</script>
<style>
    @font-face {
        font-family: 'RobotoCondensedBold';
        src: url('/font/roboto/RobotoCondensed-Bold.ttf');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: 'Roboto-Black';
        src: url('/font/roboto/Roboto-Black.ttf');
        font-weight: normal;
        font-style: normal;
    }
@font-face {
        font-family: 'MyriadProBold';
        src:url('/font/MyriadPro-Bold.ttf')  format('truetype');
    }
    .banner_about{
    width:100%;
    background-image:url('/rubee-banner.jpg');
    background-size: 100%;
    height: 450px;
        background-repeat: no-repeat;
    }
    .banner_about h2{
      display:inline-block;
      margin-top:70px;
      color:#32ab98;
      background-color:#000000;
      padding:5px 10px;
      font-family: 'RobotoCondensedBold' !important;
      font-size:20px;
      margin-bottom:30px;
    }
    .banner_about p{
        color: #fff;
        font-family: 'RobotoCondensedBold' !important;
        font-size: 18px;
        margin-bottom: 0px;
    }
     .banner_about .button_banner{
        margin-top:50px;
     }
    .banner_about .button_banner a{
        display: inline-block;
        color: #32ab98 !important;
        font-size: 14px;
        margin-right: 10px;
        padding: 0px 10px;
        text-transform: uppercase;
        font-family: 'RobotoCondensedBold' !important;
        line-height: 30px;
        height: 28px;
        border-radius: initial;
        background: #000000 none repeat scroll 0 0;
    }
    .banner_about .button_banner a:hover{
        color:#fff !important;
    }
    .btn.download-icon:after{
        display:none;
    }
    .banner_about .button_banner .btn::before,.banner_about .button_banner .portfolio_filter_buttons button::before{
            background: #1bbc9b none repeat scroll 0 0;
    }
    .navbar-fixed-top{
        background-color: #22b5a3;
        box-shadow: 0px 0px 5px #fff;
    }
    #page-title-bar{
        background-color: #22b5a3;
    }

    .khachhang {
        background-color: #F1F1F1;
        width: 100%;
        overflow: hidden;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .khachhang h3 {
        text-align: center;
        text-transform: uppercase;
        font-family: 'MyriadProBold' !important;
        font-size: 24px;
        color: #686868;
    }
    .line_cus {
    width: 100px;
    height: 2px;
    background-color: #38BAA1;
    margin: auto;
}
.rating_c {
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
    color: #3C3C3B;
}
.box_customer {
    width: 100%;
    border-radius: 30px;
    background-color: #fff;
    padding: 30px;
    overflow: hidden;
    height: 430px;
    position: relative;
}
.box_customer h4 {
    font-size:16px;
        font-weight:600;
        color:#3C3C3B;
        text-align:center;
        margin-top:0px;
        padding-top:0px;
        line-height:20px;
        margin-bottom:0px;
}
.box_customer p.type_design {
    font-size: 14px;
    color: #38BAA1;
    font-style: italic;
    text-align: center;
    margin-bottom: 0px;
}
.item_customer p.description {
    text-align: justify;
}
.box_customer .icon_comment1 {
    position: absolute;
    right: 30px;
    bottom: 15px;
}
.item_customer .box_image_cus {
    width: 100%;
    text-align: center;
    margin-top: -70px;
}
.item_customer .box_image_cus img {
    display: inline-block;
    width: 140px;
    height: 140px;
    border-radius: 70px;
    border: 5px solid #fff;
}
.list_customer .owl-nav {
    display: none;
}
.block-subheader .rating > input {
    position: absolute;
    margin-left: 0px;
    z-index: 2;
    opacity: 0;
    font-size: initial;
    top: 50%;
    transform: translateY(-50%);
}
.block-subheader .rating, .block-subheader a {
    color: #3C3C3B;
}
    @media(max-width:468px){
        .banner_about{
            padding-left:15px;
            padding-right:15px;
            height:auto;
        }
        .banner_about h2{
            margin-top:100px;
            margin-bottom:10px;
        }
        .banner_about .button_banner{
            margin-top:10px;
        }
    }

</style>